<?php
/**
 * Handles rendering the exception page as well as logging errors.
 *
 * @package NamelessMC\Misc
 * @author Samerton
 * @author Aberdeener
 * @version 2.0.0-pr9
 * @license MIT
 */
class ErrorHandler {

    /**
     * Defined for easy changing.
     * This constant indicates how many LOC from each frame's PHP file to show before and after the highlighted line
     */
    private const LINE_BUFFER = 20;

    /**
     * Catch an error. If it is a fatal error, pass execution to catchException(), otherwise make a log entry.
     *
     * @param int $error_number PHP universal error number of this error.
     * @param string $error_string Error message.
     * @param string $error_file Path of file which this error was thrown at.
     * @param int $error_line Line of $error_file which error occurred at.
     * @return bool False if error reporting is disabled, true otherwise.
     */
    public static function catchError(int $error_number, string $error_string, string $error_file, int $error_line): bool {

        if (!(error_reporting() & $error_number)) {
            return false;
        }

        switch ($error_number) {
            case E_USER_ERROR:
                // Pass execution to new error handler.
                // Since we registered an exception handler, I dont think this will ever be called,
                // simply a precaution.
                self::catchException(null, $error_string, $error_file, $error_line);
                break;

            case E_USER_WARNING:
                self::logError('warning', '[' . date('Y-m-d, H:i:s') . '] ' . $error_file . '(' . $error_line . ') ' . $error_number . ': ' . $error_string);
                break;

            case E_USER_NOTICE:
                self::logError('notice', '[' . date('Y-m-d, H:i:s') . '] ' . $error_file . '(' . $error_line . ') ' . $error_number . ': ' . $error_string);
                break;

            default:
                self::logError('other', '[' . date('Y-m-d, H:i:s') . '] ' . $error_file . '(' . $error_line . ') ' . $error_number . ': ' . $error_string);
                break;
        }

        return true;
    }

    /**
     * Used to neatly display exceptions/errors and the trace/frames leading up to it.
     * If this is called manually, the error_string, error_file and error_line must be manually provided,
     * and a single trace frame will be generated for it.
     *
     * @param Throwable|null $exception Exception/Error to catch and render trace from. If null, other variables will be used to render trace.
     * @param string|null $error_string Main error message to be shown on top of page. Used when $exception is null.
     * @param string|null $error_file Path to most recent frame's file. Used when $exception is null.
     * @param int|null $error_line Line in $error_file which caused Exception. Used when $exception is null.
     */
    public static function catchException(?Throwable $exception, ?string $error_string = null, ?string $error_file = null, ?int $error_line = null): void {

        // Define variables based on if a Throwable was caught by the compiler, or if this was called manually
        $error_string = is_null($exception) ? $error_string : $exception->getMessage();
        $error_file = is_null($exception) ? $error_file : $exception->getFile();
        $error_line = is_null($exception) ? (int)$error_line : $exception->getLine();

        // Create a log entry for viewing in staffcp
        self::logError('fatal', '[' . date('Y-m-d, H:i:s') . '] ' . $error_file . '(' . $error_line . '): ' . $error_string);

        // If this is an API request, print the error in plaintext and dont render the whole error trace page
        if (strpos($_REQUEST['route'], '/api/v2/') !== false) {
            die($error_string . ' in ' . $error_file . ' on line ' . $error_line . PHP_EOL . $exception->getTraceAsString());
        }

        $frames = [];

        // Most recent frame is not included in getTrace(), so deal with it individually
        $frames[] = self::parseFrame($exception, $error_file, $error_line);

        $skip_frames = 0;

        // Loop all frames in the exception trace & get relevent information
        if ($exception != null) {

            $i = count($exception->getTrace());

            foreach ($exception->getTrace() as $frame) {

                // Check if previous frame had same file and line number (ie: DB->selectQuery() reports same file and line twice in a row)
                if (end($frames)['file'] == $frame['file'] && end($frames)['line'] == $frame['line']) {
                    ++$skip_frames;
                    continue;
                }

                $frames[] = self::parseFrame($exception, $frame['file'], $frame['line'], $i);
                $i--;
            }
        }

        define('ERRORHANDLER', true);
        require_once(ROOT_PATH . DIRECTORY_SEPARATOR . 'error.php');
        die();
    }

    /**
     * Write error to specific log file.
     *
     * @param string $type Which category/file to log this to. Must be: `warning`, `notice`, `other` or `fatal`.
     * @param string $contents The message to be saved.
     */
    private static function logError(string $type, string $contents): void {

        $dir_exists = false;

        try {

            if (!is_dir(implode(DIRECTORY_SEPARATOR, [ROOT_PATH, 'cache', 'logs']))) {
                if (is_writable(ROOT_PATH . DIRECTORY_SEPARATOR . 'cache')) {
                    mkdir(ROOT_PATH . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'logs');
                    $dir_exists = true;
                }
            } else {
                $dir_exists = true;
            }

            if ($dir_exists) {
                file_put_contents(implode(DIRECTORY_SEPARATOR, [ROOT_PATH, 'cache', 'logs', $type . '-log.log']), $contents . PHP_EOL, FILE_APPEND);
            }

        } catch (Exception $exception) {
            // Unable to write to file, ignore for now
        }
    }

    /**
     * Returns frame array from specified information.
     * Leaving number as null will use Exception trace count + 1 (for most recent frame)
     *
     * @param Throwable|null $exception Exception object caught and whose trace to count. If null, $number will be used for frame number.
     * @param string $frame_file Path to file which was referenced in this frame.
     * @param int $frame_line Line number of $frame_file which Exception was thrown at.
     * @param int|null $number Higher number = more recent frame. If null, will use $exception trace count + 1.
     * @return array This frame in an array form.
     */
    public static function parseFrame(?Throwable $exception, string $frame_file, int $frame_line, ?int $number = null): array {
        $lines = file($frame_file);

        return [
            'number' => is_null($number) ? (is_null($exception) ? 1 : count($exception->getTrace()) + 1) : $number,
            'file' => $frame_file,
            'line' => $frame_line,
            'start_line' => (is_array($lines) && count($lines) >= self::LINE_BUFFER && ($frame_line - self::LINE_BUFFER > 0)) ? ($frame_line - self::LINE_BUFFER) : 1,
            'highlight_line' => (is_array($lines) && count($lines) >= self::LINE_BUFFER && $frame_line - self::LINE_BUFFER > 0) ? (self::LINE_BUFFER + 1) : $frame_line,
            'code' => self::parseFile($lines, $frame_line)
        ];
    }

    /**
     * Create purified and truncated string from a file for use with error source code preview.
     *
     * @param array|bool $lines Array of lines in this file. If false, will return nothing (means PHP cannot access file).
     * @param int $error_line Line to center output around.
     * @return string Truncated string from this file.
     */
    private static function parseFile($lines, int $error_line): string {

        if ($lines == false || count($lines) < 1) {
            return '';
        }

        $line_num = 1;
        $return = '';

        foreach ($lines as $line) {
            if (($error_line - self::LINE_BUFFER) <= $line_num && $line_num <= ($error_line + self::LINE_BUFFER)) {
                $return .= Output::getClean($line);
            }

            $line_num++;
        }

        return $return;
    }

    /**
     * Called at end of every execution on page load.
     * If an error exists, and the type is fatal, pass execution to catchException().
     */
    public static function catchShutdownError(): void {
        $error = error_get_last();

        if ($error == null) {
            return;
        }

        if ($error['type'] === E_ERROR) {
            self::catchException(null, $error['message'], $error['file'], $error['line']);
        }
    }

    /**
     * Log a custom error, uses `other` type.
     * Not used internally, only for modules to use.
     *
     * @param string $contents Error to write to file.
     */
    public static function logCustomError(string $contents): void {
        self::logError('other', $contents);
    }
}
