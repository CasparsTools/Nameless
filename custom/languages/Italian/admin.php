<?php
/*
 *	Made by alsoGAMER
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Italian Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Per favore, ri-autenticati',

	// Sidebar
	'dashboard' => 'Dashboard',
	'configuration' => 'Configurazione',
	'layout' => 'Layout',
	'user_management' => 'Gestione utenti',
	'admin_cp' => 'Pannello amministratore',
	'administration' => 'Amministrazione',
	'overview' => 'Panoramica',
	'core' => 'Core',
	'integrations' => 'Integrazioni',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduli',
	'security' => 'Sicurezza',
	'sitemap' => 'Sitemap',
	'styles' => 'Stili',
	'users_and_groups' => 'Utenti e Gruppi',

	// Overview
	'running_nameless_version' => 'Stai eseguendo NamelessMC alla versione <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Stai eseguendo PHP alla versione <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistiche',
	'registrations' => 'Registrazioni',
	'topics' => 'Argomenti',
	'posts' => 'Post',
    'notices' => 'Avvisi',
    'no_notices' => 'Nessun avviso.',
    'email_errors_logged' => "Gli errori dell'email sono stati registrati",

	// Core
	'settings' => 'Impostazioni',
	'general_settings' => 'Impostazioni Generali',
	'sitename' => 'Nome Sito',
	'default_language' => 'Lingua Predefinita',
	'default_language_help' => 'Gli utenti potranno scegliere da tutte le lingue installate.',
	'install_language' => 'Installa Lingua',
	'update_user_languages' => 'Aggiorna Lingue Utente',
	'update_user_languages_warning' => "Quest'azione aggiornerà le lingue per tutti gli utenti del sito, anche se ne avranno già selezionata una!",
	'updated_user_languages' => 'Lingue utente aggiornate.',
	'installed_languages' => 'Tutte le nuove lingue sono state installate con successo.',
	'default_timezone' => 'Fuso orario predefinito',
	'registration' => 'Registrazione',
	'enable_registration' => 'Abilitare le registrazioni?',
	'verify_with_mcassoc' => 'Verificare gli account utente con MCAssoc?',
	'email_verification' => 'Abilitare la verifica email?',
	'registration_settings_updated' => 'Impostazioni di registrazione aggiornate con successo.',
	'homepage_type' => 'Tipo Homepage',
	'post_formatting_type' => 'Tipo Formattazione Post',
	'portal' => 'Portale',
	'private_profiles' => 'Profili Privati',
	'missing_sitename' => 'Per favore, inserisci un nome del sito lungo dai 2 ai 64 caratteri.',
	'missing_contact_address' => "Per favore, inserisci un'email di contatto lunga dai 3 ai 255 caratteri.",
	'use_friendly_urls' => 'Friendly URLs',
	'use_friendly_urls_help' => "IMPORTANTE: Il tuo server deve essere configurato per permettere l'utilizzo di mod_rewrite e dei file .htaccess per fare in modo che ciò funzioni.",
	'config_not_writable' => 'Il file <strong>core/config.php</strong> non è scrivibile. Per favore controlla i permessi sul file.',
	'settings_updated_successfully' => 'Impostazioni generali aggiornate con successo.',
	'social_media' => 'Social Media',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Usare il tema dark per Twitter?',
	'discord_id' => 'ID Server Discord',
	'discord_widget_theme' => 'Tema Widget Discord',
	'dark' => 'Scuro',
	'light' => 'Chiaro',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Impostazioni social media aggiornate con successo.',
	'successfully_updated' => 'Aggiornato con successo',
    'debugging_and_maintenance' => 'Debug & Manutenzione',
    'maintenance' => 'Manutenzione',
    'debugging_settings_updated_successfully' => 'Impostazioni di debug aggiornate con successo.',
    'enable_debug_mode' => 'Abilitare la modalità debug?',
    'force_https' => 'Forzare https?',
    'force_https_help' => 'Se abilitato, tutte le richieste al tuo sito verranno redirette in https. Devi avere un certificato SSL valido affinchè ciò funzioni correttamente.',
    'force_www' => 'Forzare www?',
    'contact_email_address' => 'Email di contatto',
    'emails' => 'Email',
    'email_errors' => 'Errori Email',
    'registration_email' => 'Email di Registrazione',
    'contact_email' => 'Email di contatto',
    'forgot_password_email' => 'Ho dimenticato la mia password',
    'unknown' => 'Sconosciuto',
    'delete_email_error' => "Errore durante l'eliminazione",
    'confirm_email_error_deletion' => 'Sei sicuro di voler eliminare questo errore?',
    'viewing_email_error' => 'Errore di visualizzazione',
    'unable_to_write_email_config' => 'Il file <strong>core/email.php</core> non è scrivibile. Per favore controlla i permessi sul file.',
    'enable_mailer' => 'Abilitare PHPMailer?',
    'enable_mailer_help' => "Abilitalo se le email non vengono inviate di default. L'uso di PHPMailer richiede che tu abbia un servizio capace di inviare email, come Gmail o un provider SMTP.",
    'outgoing_email' => 'Indirizzo email in uscita',
    'outgoing_email_info' => "Questo è l'indirizzo email che NamelessMC userà per inviare le mail.",
    'mailer_settings_info' => 'I seguenti campi sono obbligatori se hai attivato PHPMailer. Per maggiori informazioni su come riempire questi campi controlla <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">la wiki</a>.',
    'host' => 'Host',
    'email_port' => 'Porta',
    'email_password_hidden' => 'La password non è mostrata per motivi di sicurezza.',
    'send_test_email' => 'Invia email di test',
    'send_test_email_info' => "Il seguente bottone tenterà di inviare un'email al tuo indirizzo email, <strong>{x}</strong>. Verranno visualizzati eventuali errori generati durante l'invio dell'email.", // Don't replace {x}
    'send' => 'Invia',
    'test_email_error' => 'Errore email di test:',
    'test_email_success' => 'Email di test inviata con successo!',
    'terms_error' => 'Per favore, inserisci termini & condizioni non più lunghi di 100,000 caratteri.',
    'privacy_policy_error' => 'Per favore, inserisci una privacy policy non più lunga di 100,000 caratteri.',
    'terms_updated' => 'Privacy policy e termini & condizioni aggiornati con successo.',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Permettere agli utenti di caricare avatar personalizzati?',
    'default_avatar' => 'Avatar Predefinito',
    'custom_avatar' => 'Avatar Personalizzato',
    'minecraft_avatar' => 'Avatar Minecraft',
    'minecraft_avatar_source' => 'Sorgente avatar Minecraft',
    'built_in_avatars' => 'Servizio avatar integrato',
    'minecraft_avatar_perspective' => 'Prospettiva avatar Minecraft',
    'face' => 'Faccia',
    'head' => 'Testa',
	'bust' => 'Busto',
    'select_default_avatar' => 'Seleziona un nuovo avatar predefinito:',
    'no_avatars_available' => 'Nessun avatar disponibile. Si prega di caricare una nuova immagine prima.',
    'avatar_settings_updated_successfully' => 'Impostazioni avatar aggiornate con successo.',
    'navigation' => 'Navigazione',
    'navbar_order' => 'Ordine Navbar',
    'navbar_order_instructions' => 'Puoi assegnare ad ogni articolo un numero superiore a 0 per ordinare elementi nella barra di navigazione, con 1 come primo elemento e numeri più alti che lo seguono.',
    'navbar_icon' => 'Icone Navbar',
    'navbar_icon_instructions' => 'Puoi anche aggiungere un\'icona a ciascun elemento della barra di navigazione qui, ad esempio utilizzando <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Impostazioni di navigazione aggiornate con successo.',
    'dropdown_items' => 'Articoli a discesa',
    'enable_page_load_timer' => 'Abilitare il timer di caricamento pagina?',
    'google_recaptcha' => 'Abilitare Google reCAPTCHA?',
    'recaptcha_site_key' => 'Chiave sito reCAPTCHA',
    'recaptcha_secret_key' => 'Chiave segreta reCAPTCHA',
    'registration_disabled_message' => 'Messaggio registrazione disattivata',
    'enable_nicknames_on_registration' => 'Abilitare i nickname per la registrazione degli utenti?',
    'validation_promote_group' => 'Gruppo Post-validazione',
    'validation_promote_group_info' => 'Questo è il gruppo a cui un utente verrà promosso dopo aver convalidato il proprio account.',
    'login_method' => 'Metodo di login',
    'privacy_and_terms' => 'Privacy & Termini',

	// Reactions
	'icon' => 'Icona',
	'type' => 'Tipo',
	'positive' => 'Positivo',
	'neutral' => 'Neutrale',
	'negative' => 'Negativo',
	'editing_reaction' => 'Modifica della reazione',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nuova reazione',
	'creating_reaction' => 'Creazione Reazione',
	'no_reactions' => 'Non ci sono ancora reazioni.',
	'reaction_created_successfully' => 'Reazione creata con successo.',
	'reaction_edited_successfully' => 'Reazione modificata con successo.',
	'reaction_deleted_successfully' => 'Reazione eliminata con successo.',
	'name_required' => 'È richiesto un nome',
	'html_required' => 'È richiesto HTML',
	'type_required' => 'È richiesto un tipo',
	'name_maximum_16' => 'Il nome non deve contenere più di 16 caratteri',
	'html_maximum_255' => "L'HTML non deve contenere più di 255 caratteri",
	'confirm_delete_reaction' => 'Sei sicuro di voler eliminare questa reazione?',

	// Custom profile fields
	'custom_fields' => 'Campi personalizzati',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nuovo campo',
	'required' => 'Richiesto',
	'editable' => 'Modificabile',
	'public' => 'Pubblico',
	'text' => 'Testo',
	'textarea' => 'Area di testo',
	'date' => 'Data',
	'creating_profile_field' => 'Creazione del campo profilo',
	'editing_profile_field' => 'Modifica del campo profilo',
	'field_name' => 'Nome del campo',
	'profile_field_required_help' => "I campi obbligatori devono essere compilati dall'utente e verranno visualizzati durante la registrazione.",
	'profile_field_public_help' => 'I campi pubblici verranno visualizzati da tutti gli utenti, se questo è disabilitato, solo i moderatori possono visualizzare i valori.',
	'profile_field_error' => 'Inserisci un nome di campo compreso tra 2 e 16 caratteri.',
	'description' => 'Descrizione',
	'display_field_on_forum' => 'Mostra campo sul forum?',
	'profile_field_forum_help' => "Se abilitato, il campo verrà visualizzato dall'utente accanto ai post del forum.",
	'profile_field_editable_help' => 'Se abilitato, gli utenti avranno il permesso di modificare il campo nelle loro impostazioni del profilo.',
	'no_custom_fields' => 'Non ci sono ancora campi personalizzati.',
	'profile_field_updated_successfully' => 'Il campo del profilo è stato aggiornato correttamente.',
	'profile_field_created_successfully' => 'Il campo del profilo è stato creato con successo.',
	'profile_field_deleted_successfully' => 'Il campo del profilo è stato eliminato con successo.',

    // Minecraft
    'enable_minecraft_integration' => "Abilitare l'integrazione con Minecraft?",
    'mc_service_status' => 'Stato del servizio Minecraft',
    'service_query_error' => 'Impossibile ottenere lo stato dei servizi.',
    'authme_integration' => 'Integrazione AuthMe',
    'authme_integration_info' => "Quando l'integrazione con AuthMe è abilitata, gli utenti possono registrarsi solo in gioco.",
    'enable_authme' => "Abilitare l'integrazione con AuthMe?",
    'authme_db_address' => 'Indrizzo Database AuthMe',
    'authme_db_port' => 'Porta Database AuthMe',
    'authme_db_name' => 'Nome Database AuthMe',
    'authme_db_user' => 'Username Database AuthMe',
    'authme_db_password' => 'Password Database AuthMe',
    'authme_db_password_hidden' => 'La password del database di AuthMe è nascosta per motivi di sicurezza.',
    'authme_hash_algorithm' => 'Algoritmo Hashing AuthMe',
    'authme_db_table' => 'Tabella utenti AuthMe',
    'enter_authme_db_details' => 'Per favore, inserisci dei dettagli database validi.',
    'authme_password_sync' => 'Sincronizzare password AuthMe?',
    'authme_password_sync_help' => 'Se abilitato, ogni volta che la password di un utente viene aggiornata in gioco, la password verrà anche aggiornata sul sito web.',
    'minecraft_servers' => 'Server Minecraft',
    'account_verification' => 'Verifica account Minecraft',
    'server_banners' => 'Banner Server',
    'query_errors' => 'Errori Query',
    'add_server' => '<i class="fa fa-plus-circle"></i> Aggiungi Server',
    'no_servers_defined' => 'Nessun server è stato ancora definito',
    'query_settings' => 'Impostazioni Query',
    'default_server' => 'Server Predefinito',
    'no_default_server' => 'Nessun server predefinito',
    'external_query' => 'Usera una query esterna?',
    'external_query_help' => 'Se la query del server predefinita non funziona, abilitare questa opzione.',
    'adding_server' => 'Aggiunta Server',
    'server_name' => 'Nome Server',
    'server_address' => 'Indirizzo Server',
    'server_address_help' => "Questo è l'indirizzo IP o il dominio utilizzato per connettersi al tuo server, senza la porta.",
    'server_port' => 'Porta Server',
    'parent_server' => 'Server principale',
    'parent_server_help' => "Un server principale è in genere l'istanza Bungee a cui è connesso il server, se presente.",
    'no_parent_server' => 'Nessun server principale',
    'bungee_instance' => 'Istanza BungeeCord?',
    'bungee_instance_help' => "Seleziona questa opzione se il server è un'istanza BungeeCord.",
    'server_query_information' => "Per visualizzare l'elenco di giocatori online sul tuo sito web, il tuo server <strong>deve</strong> avere l'opzione 'enable-query' abilitata nel file <strong>server.properties</strong> del tuo server.",
    'enable_status_query' => 'Abilitare la query di stato?',
    'status_query_help' => 'Se abilitata, la pagina di stato mosterà se il server è online o offline.',
    'show_ip_on_status_page' => 'Show IP on status page?',
    'show_ip_on_status_page_info' => 'If this is enabled, users will be able to view and copy the IP address when viewing the Status page.',
    'enable_player_list' => 'Abilitare la lista player?',
    'pre_1.7' => 'Versione Minecraft più vecchia di 1.7?',
    'player_list_help' => 'Se è abilitato, la pagina di stato mostrerà un elenco di giocatori online.',
    'server_query_port' => 'Porta query del server',
    'server_query_port_help' => "Questa è l'opzione query.port nel file server.properties del server, a condizione che l'opzione enable-query nello stesso file sia impostata su true.",
    'server_name_required' => 'Si prega di inserire il nome del server',
    'server_name_minimum' => 'Assicurati che il nome del tuo server abbia almeno 1 carattere',
    'server_name_maximum' => 'Assicurati che il nome del tuo server sia composto da un massimo di 20 caratteri',
    'server_address_required' => "Si prega di inserire l'indirizzo del server",
    'server_address_minimum' => "Assicurati che l'indirizzo del tuo server sia almeno di 1 carattere",
    'server_address_maximum' => "Assicurati che l'indirizzo del tuo server sia composto da un massimo di 64 caratteri",
    'server_port_required' => 'Si prega di inserire la porta del server',
    'server_port_minimum' => 'Assicurati che la porta del tuo server abbia almeno 2 caratteri',
    'server_port_maximum' => 'Assicurati che la porta del tuo server abbia un massimo di 5 caratteri',
    'server_parent_required' => 'Si prega di selezionare un server principale',
    'query_port_maximum' => 'Assicurati che la tua porta di interrogazione abbia un massimo di 5 caratteri',
    'server_created' => 'Server creato con successo.',
    'confirm_delete_server' => 'Sei sicuro di voler eliminare questo server?',
    'server_updated' => 'Server aggiornato con successo.',
    'editing_server' => 'Modifica del server',
    'server_deleted' => 'Server eliminato con successo',
    'unable_to_delete_server' => 'Impossibile eliminare il server.',
    'leave_port_empty_for_srv' => 'Puoi lasciare la porta vuota se è 25565 o se il tuo dominio utilizza un record SRV',
    'viewing_query_error' => "Visualizzazione degli errori della query",
    'confirm_query_error_deletion' => 'Sei sicuro di voler eliminare questo errore query?',
    'no_query_errors' => 'Nessun errore query registrato.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nuovo Banner',
    'purge_errors' => 'Elimina Errori',
    'confirm_purge_errors' => 'Sei sicuro di voler eliminare tutti gli errori?',
	'email_errors_purged_successfully' => 'Gli errori email sono stati eliminati con successo.',
	'error_deleted_successfully' => "L'errore è stato cancellato con successo.",
	'no_email_errors' => 'Nessun errore email registrato.',
	'email_settings_updated_successfully' => 'Le impostazioni email sono state aggiornate con successo.',
	'content' => 'Contenuto',
    'mcassoc_help' => 'mcassoc è un servizio esterno che può essere utilizzato per verificare che gli utenti possiedano l\'account Minecraft con il quale si sono registrati. Per utilizzare questa funzione, è necessario registrarsi per una chiave condivisa <a href="https://mcassoc.lukegb.com/" target="_blank">qui</a>.',
    'mcassoc_key' => 'Chiave condivisa mcassoc',
    'mcassoc_instance' => 'Chiave istanza mcassoc',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Fai clic per generare una chiave di istanza</a>',
    'mcassoc_error' => 'Assicurati di aver inserito correttamente la tua chiave condivisa e di aver generato correttamente una chiave di istanza.',
    'updated_mcassoc_successfully' => 'Le impostazioni di mcassoc sono state aggiornate con successo.',
    'force_premium_accounts' => 'Forzare account premium di Minecraft?',
    'banner_background' => 'Sfondo banner',
    'query_interval' => 'Intervallo di query (in minuti, deve essere compreso tra 5 e 60)',
    'player_graphs' => 'Grafici del giocatore',
    'player_count_cronjob_info' => 'Puoi impostare un cron job per interrogare i tuoi server ogni {x} minuti con il seguente comando:',
    'status_page' => 'Abilitare la pagina di stato?',
    'minecraft_settings_updated_successfully' => 'Impostazioni minecraft aggiornate con successo.',
    'server_id_x' => 'ID server: {x}', // Don't replace {x}
    'server_information' => 'Informazioni sul server',
    'query_information' => 'Informazioni sulla query',
    'query_errors_purged_successfully' => 'Errori query eliminati con successo.',
    'query_error_deleted_successfully' => 'Errore query eliminato con successo.',
    'banner_updated_successfully' => "Banner aggiornato con successo. Potrebbe volerci un po' prima che le modifiche abbiano effetto.",

	// Modules
	'modules_installed_successfully' => 'Tutti i nuovi moduli sono stati installati con successo.',
	'enabled' => 'Abilitato',
	'disabled' => 'Disabilitato',
	'enable' => 'Abilita',
	'disable' => 'Disattiva',
	'module_enabled' => 'Modulo abilitato.',
	'module_disabled' => 'Modulo disabilitato.',
	'author' => 'Autore:',
	'author_x' => 'Autore: {x}', // Don't replace {x}
	'module_outdated' => 'Abbiamo rilevato che questo modulo è per la versione {x} di Nameless, ma tu stai usando la {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Trova moduli',
	'view_all_modules' => 'Visualizza tutti i moduli',
	'unable_to_retrieve_modules' => 'Impossibile recuperare i moduli',
	'module' => 'Modulo',
	'unable_to_enable_module' => 'Impossibile abilitare il modulo incompatibile.',

	// Styles
	'templates' => 'Modelli',
	'panel_templates' => 'Modelli Pannello',
	'template_outdated' => 'Abbiamo rilevato che il tuo modello è destinato alla versione {x} di Nameless, ma tu stai usando la{y}', // Don't replace "{x}" or "{y}"
	'active' => 'Attivato',
	'deactivate' => 'Disattivato',
	'activate' => 'Attiva',
	'warning_editing_default_template' => 'Attenzione! Si consiglia di non modificare il modello predefinito.',
	'images' => 'Immagini',
	'upload_new_image' => 'Carica nuova immagine',
	'reset_background' => 'Reimposta sfondo',
	'install' => '<i class="fa fa-plus-circle"></i> Installa',
	'template_updated' => 'Modello aggiornato con successo.',
	'default' => 'Predefinito',
	'make_default' => 'Rendi predefinito',
	'default_template_set' => 'Modello predefinito impostato su {x} con successo.', // Don't replace {x}
	'template_deactivated' => 'Modello disattivato.',
	'template_activated' => 'Modello attivato.',
	'permissions' => 'Permessi',
	'setting_perms_for_x' => 'Impostazione dei permessi per il modello {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Tutti i nuovi modelli sono stati installati con successo.',
	'confirm_delete_template' => 'Sei sicuro di voler eliminare questo modello?',
	'delete' => 'Elimina',
	'template_deleted_successfully' => 'Modello eliminato con successo.',
	'background_image_x' => 'Immagine di sfondo: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Immagine banner: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'La directory <strong>uploads/backgrounds</strong> non è scrivibile!',
	'template_banners_directory_not_writable' => 'La directory <strong>uploads/template_banners</strong> non è scrivibile!',
	'template_banner_reset_successfully' => 'Banner ripristinato con successo.',
	'template_banner_updated_successfully' => 'Banner aggiornato con successo.',
	'reset_banner' => 'Reimposta Banner',
	'find_templates' => 'Trova modelli',
	'view_all_templates' => 'Visualizza tutti i modelli',
	'unable_to_retrieve_templates' => 'Impossibile recuperare i modelli',
	'template' => 'Modello',
	'stats' => 'Statistiche',
	'downloads_x' => 'Download: {x}',
	'views_x' => 'Visualizzazioni: {x}',
	'rating_x' => 'Valutazione: {x}',
	'editing_template_x' => 'Modifica modello {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Modifica del file {x} nel modello {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Non è possibile scrivere in un file modello! Si prega di verificare i permessi dei file.',
	'unable_to_delete_template' => 'Impossibile eliminare completamente il modello. Si prega di verificare i permessi dei file.',
	'background_reset_successfully' => 'Sfondo ripristinato con successo.',
	'background_updated_successfully' => 'Sfondo aggiornato con successo',
	'unable_to_enable_template' => 'Impossibile abilitare il modello incompatibile.',

	// Users & groups
	'users' => 'Utenti',
	'groups' => 'Gruppi',
	'group' => 'Gruppo',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nuovo Utente',
	'creating_new_user' => 'Creating new user',
	'registered' => 'Registrato',
	'user_created' => 'Utente creato con successo.',
	'cant_delete_root_user' => "Non è possibile eliminare l'utente root!",
	'cant_modify_root_user' => 'Non è possibile modificare il gruppo di questo utente!',
	'user_deleted' => 'Utente eliminato con successo.',
	'confirm_user_deletion' => "Sei sicuro di voler eliminare l'utente <strong>{x}</strong>?", // Don't replace {x}
	'validate_user' => "Convalidare l'utente",
	'update_uuid' => 'Aggiorna UUID',
	'update_mc_name' => "Aggiorna l'username Minecraft",
	'reset_password' => 'Resetta la password',
	'punish_user' => 'Punisci utente',
	'delete_user' => 'Elimina utente',
	'minecraft_uuid' => 'UUID Minecraft',
	'other_actions' => 'Altre azioni',
	'disable_avatar' => 'Disabilita Avatar',
	'select_user_group' => 'Devi selezionare il gruppo di un utente.',
	'uuid_max_32' => "L'UUID deve avere un massimo di 32 caratteri.",
	'title_max_64' => 'Il titolo utente deve avere un massimo di 64 caratteri.',
	'group_id' => 'ID di gruppo',
	'name' => 'Nome',
	'title' => 'Titolo',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nuovo gruppo',
	'group_name_required' => 'Si prega di inserire un nome di gruppo.',
	'group_name_minimum' => 'Assicurati che il nome del tuo gruppo sia composto da almeno 2 caratteri.',
	'group_name_maximum' => 'Assicurati che il nome del tuo gruppo abbia una lunghezza massima di 20 caratteri.',
	'creating_group' => 'Creare un nuovo gruppo',
	'group_html_maximum' => 'Assicurati che il codice HTML del tuo gruppo non sia più lungo di 1024 caratteri.',
	'group_html' => 'Codice HTML Gruppo',
	'group_html_lg' => 'Codice HTML Gruppo Largo',
	'group_username_colour' => 'Colore username gruppo',
	'group_staff' => 'È un gruppo staff?',
	'delete_group' => 'Elimina gruppo',
	'confirm_group_deletion' => 'Sei sicuro di voler eliminare il gruppo {x}?', // Don't replace {x}
	'group_not_exist' => 'Quel gruppo non esiste.',
	'secondary_groups' => 'Gruppi secondari',
	'secondary_groups_info' => "L'utente otterrà qualsiasi ulteriore autorizzazione da questi gruppi. Ctrl+clic per selezionare/deselezionare più gruppi.",
	'unable_to_update_uuid' => 'Impossibile aggiornare UUID.',
	'default_group' => 'Il gruppo è il gruppo predefinito (per i nuovi utenti)?',
	'user_id' => 'ID utente',
	'uuid' => 'UUID',
	'group_order' => 'Ordine Gruppo',
	'group_created_successfully' => 'Gruppo creato con successo.',
	'group_updated_successfully' => 'Gruppo aggiornato con successo.',
	'group_deleted_successfully' => 'Gruppo eliminato con successo.',
	'unable_to_delete_group' => 'Impossibile eliminare un gruppo predefinito o un gruppo che può visualizzare il pannello staff. Si prega di aggiornare prima le impostazioni del gruppo!',
	'can_view_staffcp' => 'Il gruppo può vedere il pannello staff?',
	'user' => 'Utente',
	'user_validated_successfully' => 'Utente validato con successo.',
	'user_updated_successfully' => 'Utente aggiornato correttamente.',
	'editing_user_x' => 'Modifica utente {x}', // Don't replace {x}
	'details' => 'Dettagli',

	// Permissions
	'select_all' => 'Seleziona tutto',
	'deselect_all' => 'Deseleziona tutto',
	'background_image' => 'Immagine di sfondo',
	'can_edit_own_group' => 'Può modificare i permessi del proprio gruppo',
	'permissions_updated_successfully' => 'Permessi aggiornati correttamente.',
	'cant_edit_this_group' => 'Non puoi modificare le autorizzazioni di questo gruppo!',

	// General Admin language
	'task_successful' => 'Attività eseguita con successo.',
	'invalid_action' => 'Azione non valida.',
	'enable_night_mode' => 'Abilita modalità notte',
	'disable_night_mode' => 'Disabilita modalità notte',
	'view_site' => 'Visualizza sito',
	'signed_in_as_x' => 'Accesso eseguito come {x}', // Don't replace {x}
    'warning' => 'Attenzione',

    // Maintenance
    'maintenance_mode' => 'Modalità di manutenzione',
    'maintenance_enabled' => 'La modalità di manutenzione è attualmente abilitata.',
    'enable_maintenance_mode' => 'Abilita la modalità di manutenzione?',
    'maintenance_mode_message' => 'Messaggio sulla modalità di manutenzione',
    'maintenance_message_max_1024' => 'Assicurati che il tuo messaggio di manutenzione sia al massimo di 1024 caratteri.',

	// Security
	'acp_logins' => 'Login Pannello Staff',
	'please_select_logs' => 'Si prega di selezionare i log da visualizzare',
	'ip_address' => 'Indirizzo IP',
	'template_changes' => 'Modifiche ai modelli',
	'file_changed' => 'File modificati',
	'all_logs' => 'Tutti i log',
	'action' => 'Azione',
	'action_info' => "Informazioni sull'azione",

	// Updates
	'update' => 'Aggiorna',
	'current_version_x' => 'Versione corrente: <strong>{x}</strong>', // Don't replace {x}
	'new_version_x' => 'Nuova versione: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => "C'è un nuovo aggiornamento disponibile",
	'new_urgent_update_available' => 'È disponibile un nuovo aggiornamento urgente. Si prega di aggiornare il più presto possibile!',
	'up_to_date' => "L'installazione di NamelessMC è aggiornata!",
	'urgent' => 'Questo aggiornamento è un aggiornamento urgente',
	'changelog' => 'Changelog',
	'update_check_error' => 'Si è verificato un errore durante il controllo degli aggiornamenti:',
	'instructions' => 'Istruzioni',
	'download' => 'Download',
	'install_confirm' => 'Assicurati di aver prima scaricato il pacchetto e caricato tutti i file contenuti!',
	'check_again' => 'Controlla di nuovo',

	// Widgets
	'widgets' => 'Widget',
	'widget_enabled' => 'Widget abilitato.',
	'widget_disabled' => 'Widget disabilitato.',
	'widget_updated' => 'Widget aggiornato.',
	'editing_widget_x' => 'Modifica del widget {x}', // Don't replace {x}
	'module_x' => 'Modulo: {x}', // Don't replace {x}
	'widget_order' => 'Ordine dei widget',

    // Online users widget
    'include_staff_in_user_widget' => 'Includere i membri dello staff nel widget utenti?',
    'show_nickname_instead_of_username' => "Mostra il nickname dell'utente al posto dell'username?",

    // Custom Pages
    'pages' => 'Pagine',
    'custom_pages' => 'Pagine Personalizzate',
    'new_page' => '<i class="fa fa-plus-circle"></i> Nuova Pagina',
    'no_custom_pages' => 'Nessuna pagina è stata ancora creata.',
    'creating_new_page' => 'Creazione della pagina',
    'page_title' => 'Titolo della pagina',
    'page_path' => 'Percorso della pagina (preceduto da "/", ad esempio /pagina)',
    'page_icon' => 'Icona della pagina',
    'page_link_location' => 'Posizione link pagina',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Footer',
    'page_link_more' => '"Più" Dropdown',
    'page_link_none' => 'Nessun link',
    'page_content' => 'Contenuto pagina',
    'page_redirect' => 'Pagina di redirect?',
    'page_redirect_to' => 'Link di redirezionamento (preceduto da http://)',
    'unsafe_html' => 'Consentire HTML non sicuro?',
    'unsafe_html_warning' => "L'attivazione di questa opzione indica che qualsiasi codice HTML può essere utilizzato nella pagina, incluso il codice JavaScript potenzialmente pericoloso. Abilitalo solo se sei sicuro che il tuo codice HTML sia sicuro.",
    'include_in_sitemap' => 'Includere nella sitemap?',
    'sitemap_link' => 'Link Sitemap:',
    'page_permissions' => 'Permessi pagina',
    'view_page' => 'Visualizzare la Pagina?',
    'editing_page_x' => 'Modifica pagina {x}', // Don't replace {x}
    'unable_to_create_page' => 'Impossibile creare la pagina:',
    'page_title_required' => 'È richiesto il titolo della pagina.',
    'page_url_required' => 'È richiesto il percorso della pagina.',
    'link_location_required' => 'È richiesta la posizione del link.',
    'page_title_minimum_2' => 'Il titolo della pagina deve contenere almeno 2 caratteri.',
    'page_url_minimum_2' => 'Il percorso della pagina deve essere composto da almeno 2 caratteri.',
    'page_title_maximum_30' => 'Il titolo della pagina deve contenere un massimo di 30 caratteri.',
    'page_icon_maximum_64' => "L'icona della pagina deve contenere un massimo di 64 caratteri.",
    'page_url_maximum_20' => 'Il percorso della pagina deve contenere un massimo di 20 caratteri.',
    'page_content_maximum_100000' => 'Il contenuto della pagina deve essere al massimo di 100000 caratteri.',
    'page_redirect_link_maximum_512' => 'Il link di reindirizzamento della pagina deve essere al massimo di 512 caratteri.',
    'confirm_delete_page' => 'Sei sicuro di voler eliminare questa pagina?',
    'page_created_successfully' => 'Pagina creata con successo.',
    'page_updated_successfully' => 'Pagina aggiornata con successo.',
    'page_deleted_successfully' => 'Pagina eliminata con successo.',

    // API
    'api' => 'API',
    'enable_api' => 'Abilitare API?',
    'api_info' => 'L\'API consente ai plugin e ad altri servizi di interagire con il tuo sito web, come il <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank">plugin Nameless ufficiale</a>.',
    'enable_legacy_api' => "Abilita l'API legacy?",
    'legacy_api_info' => "L'API legacy consente ai plugin che utilizzano la vecchia API Nameless (versione 1) di funzionare anche con il tuo sito web che ha la versione 2.",
    'confirm_api_regen' => 'Sei sicuro di voler rigenerare la tua chiave API?',
	'api_key' => 'Chiave API',
	'api_url' => "URL dell'API",
	'copy' => 'Copia',
	'api_key_regenerated' => 'La chiave API è stata rigenerata con successo.',
    'api_registration_email' => 'Email di registrazione API',
	'show_registration_link' => 'Mostra il link di registrazione',
	'registration_link' => 'Link di Registrazione',
    'link_to_complete_registration' => 'Link per completare la registrazione: {x}', // Don't replace {x}
    'api_verification' => "Abilitare la verifica dell'API?",
    'api_verification_info' => "Se abilitata, gli account possono essere verificati solo tramite l'API, ad esempio ingame utilizzando il plugin Nameless ufficiale. <strong>Questa opzione annullerà la verifica e-mail e gli account verranno automaticamente attivati!</strong> <br /> Dovresti impostare il tuo gruppo predefinito con autorizzazioni limitate e quindi aggiornare il gruppo post-validazione in Pannello Staff -> Configurazione -> Registration tab to the full member group with normal permissions.",
    'enable_username_sync' => 'Abilitare la sincronizzazione degli username?',
    'enable_username_sync_info' => 'Se abilitato, gli username verranno aggiornati per corrispondere agli username in gioco.',
	'api_settings_updated_successfully' => 'Impostazioni API aggiornate con successo.',
	'group_sync' => 'Sincronizzazione Gruppi',
	'group_sync_info' => "È possibile configurare l'API per aggiornare automaticamente il gruppo di un utente sul sito quando viene modificato il proprio gruppo di gioco. Basta inserire il nome del gruppo in gioco e il gruppo del sito Web che dovrebbe essere sincronizzato con esso.",
	'ingame_group' => 'Nome gruppo in gioco',
	'website_group' => 'Gruppo sul sito',
	'set_as_primary_group' => 'Impostare come gruppo primario?',
	'set_as_primary_group_info' => "Se abilitato, il gruppo principale dell'utente sul sito verrà aggiornato. Se disabilitato, il gruppo ingame verrà aggiunto ai gruppi secondari dell'utente sul sito.",
	'ingame_group_maximum' => 'Assicurati che il nome del tuo gruppo abbia una lunghezza massima di 64 caratteri.',
	'select_website_group' => 'Si prega di selezionare un gruppo del sito.',
	'ingame_group_already_exists' => 'È già stata creata una regola di sincronizzazione del rank per quel gruppo in gioco.',
	'group_sync_rule_created_successfully' => 'La regola di sincronizzazione del gruppo è stata creata con successo.',
	'group_sync_rules_updated_successfully' => 'La regola di sincronizzazione del gruppo è stata aggiornata con successo.',
	'group_sync_rule_deleted_successfully' => 'La regola di sincronizzazione del gruppo è stata eliminata con successo.',
	'existing_rules' => 'Regole Esistenti',
	'new_rule' => 'Nuova Regola',

	// File uploads
	'drag_files_here' => 'Trascina qui i file da caricare.',
	'invalid_file_type' => 'Tipo di file non valido!',
	'file_too_big' => 'File troppo grande! Il tuo file è di {{filesize}} e il limite è {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Proxy consentiti',
	'allowed_proxies_info' => 'Elenco di IP proxy consentiti (separato da una linea).',

	// Error logs
	'error_logs' => 'Log errori',
	'notice_log' => 'Log di notifica',
	'warning_log' => 'Log di avviso',
	'custom_log' => 'Log personalizzati',
	'other_log' => 'Altri log',
	'fatal_log' => 'Log fatali',
	'log_file_not_found' => 'File di log non trovato.',
	'log_purged_successfully' => 'Log eliminati con successo.',

	// Hooks
	'discord_hooks' => 'Webhooks Discord',
	'discord_hooks_info' => 'Invia un messaggio a un canale Discord quando succede qualcosa sul tuo sito. Crea un webhook Discord nelle impostazioni del server Discord -> scheda "Webhooks".',
	'discord_hook_url' => 'URL webhook Discord',
	'discord_hook_events' => 'Eventi webhook discord attivati (Ctrl+clic per selezionare più eventi)',
	'register_hook_info' => 'Registrazione utente',
	'validate_hook_info' => "Convalida dell'utente",
	'delete_hook_info' => "Eliminazione dell'utente",

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Impossibile caricare il file sitemap {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generata con successo',
	'sitemap_not_writable' => 'La directory <strong>cache/sitemaps</strong> non è scrivibile.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Genera Sitemap',
	'download_sitemap' => 'Scarica Sitemap',
	'sitemap_not_generated_yet' => 'Non è stata ancora generata una sitemap!',
	'sitemap_last_generated_x' => "La sitemap è stata generata l'ultima volta {x}", // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Metadati della pagina',
	'metadata_page_x' => 'Visualizzazione dei metadati per la pagina {x}', // Don't replace {x}
	'keywords' => 'Parole chiave',
	'description_max_500' => 'La descrizione deve contenere al massimo 500 caratteri.',
	'page' => 'Pagina',
	'metadata_updated_successfully' => 'Metadati aggiornati con successo.',

	// Dashboard
	'total_users' => 'Utenti Totali',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Nuovi Utenti',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Giocatori Medi',
	'nameless_news' => 'Notizie NamelessMC',
	'unable_to_retrieve_nameless_news' => 'Impossibile recuperare le ultime notizie',
	'confirm_leave_site' => 'Stai per lasciare questo sito! Sei sicuro di voler visitare <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Compatibilità Server',
	'issues' => 'Problemi',

	// Other
	'source' => 'Sorgenti',
	'support' => 'Supporto',
	'admin_dir_still_exists' => 'Attenzione! La directory <strong>modules/Core/pages/admin</strong> esiste ancora. Si prega di rimuovere questa directory.',
	'mod_dir_still_exists' => 'Attenzione! La directory <strong>modules/Core/pages/mod</strong> esiste ancora. Si prega di rimuovere questa directory.'
);
