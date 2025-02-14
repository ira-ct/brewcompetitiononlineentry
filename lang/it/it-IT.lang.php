<?php
/**
 * Module:      it-IT.lang.php
 * Description: This module houses all display text in the Italian language.
 * Updated:     January 14, 2025
 *  
 * To translate this file, first make a copy of it and rename it with the 
 * language name in the title.
 * 
 * ==============================
 * 
 * Use ISO 169-2 Standards for and WWW3C Language Tag Standards for naming 
 * of language files. Use the ALPHA-2 letter code whenever possible.
 * 
 * ISO 169-2:
 * @see https://www.loc.gov/standards/iso639-2/php/code_list.php
 * 
 * WWW3 Language Tags:
 * @see https://www.w3.org/International/articles/language-tags/
 * 
 * WWW3 Choosing a Language Tag:
 * @see https://www.w3.org/International/questions/qa-choosing-language-tags
 * 
 * To determine a subtag, go to the IANA Language Subtag Registry:
 * @see http://www.iana.org/assignments/language-subtag-registry
 * 
 * According to the WWW3:
 * 
 * "Always bear in mind that the golden rule is to keep your language tag 
 * as short as possible. Only add further subtags to your language tag if 
 * they are needed to distinguish the language from something else in the 
 * context where your content is used..."
 * 
 * "Unless you specifically need to highlight that you are talking about 
 * Italian as spoken in Italy you should use it 'for Italian, and not 
 * it-IT. The same goes for any other possible combination."
 * 
 * "You should only use a region subtag if it contributes information 
 * needed in a particular context to distinguish this language tag from 
 * another one; otherwise leave it out."
 * 
 * ================ FORMAT =================
 * 
 * Always indicate the primary language subtag first, then a dash (-)
 * and then the region subtag. The region subtag is in all capital letters 
 * or a three digit number.
 * 
 * Examples:
 * en-US
 * English spoken in the United States
 * en is the PRIMARY language subtag
 * US is the REGION subtag (note the capitalization)
 * 
 * es-ES
 * Spanish spoken in Spain
 * 
 * es-419
 * Spanish spoken in Latin America
 * 
 * ========================================
 * 
 * Items that need translation into other languages are housed here in 
 * PHP variables - each start with a dollar sign ($). The words, phrases,
 * etc. (called strings) that need to be translated are housed between 
 * double-quotes ("). Please, ONLY alter the text between the double quotes!
 * 
 * For example, a translated PHP variable would look like this (encoding is utf8mb4; therefore, 
 * accented and other special characters are acceptable):
 * 
 * English (US) before translation:
 * $label_volunteer_info = "Volunteer Info";
 * 
 * Spanish translated:
 * $label_volunteer_info = "Información de Voluntarios";
 * 
 * Portuguese translated:
 * $label_volunteer_info = "Informações Voluntário";
 * 
 * ========================================
 * 
 * Please note: the strings that need to be translated MAY contain HTML 
 * code. Please leave this code intact! For example:
 * 
 * English (US):
 * $beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and select <em>Upload</em>.";
 * 
 * Spanish:
 * $beerxml_text_008 = "Buscar su archivo compatible BeerXML en su disco duro y haga clic en <em>Cargar</em>.";
 * 
 * Note that the <em>...</em> tags were not altered. Just the word "Upload" 
 * to "Cargar" between those tags.
 * 
 * ==============================
 * 
 */

/**
 * Set up PHP variables. No translations in this section.
 */

include (INCLUDES.'url_variables.inc.php');

if (isset($entry_open)) $entry_open = $entry_open;
else $entry_open = "";

if (isset($judge_open)) $judge_open = $judge_open;
else $judge_open = "";

if (isset($judge_closed)) $judge_closed = $judge_closed;
else $judge_closed = "";

if (isset($reg_open)) $reg_open = $reg_open;
else $reg_open = "";

if (isset($total_entries)) $total_entries = $total_entries;
else $total_entries = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($row_limits['prefsEntryLimit'])) $row_limits['prefsEntryLimit'] = $row_limits['prefsEntryLimit'];
else $row_limits['prefsEntryLimit'] = "";

if (isset($row_limits['prefsEntryLimitPaid'])) $row_limits['prefsEntryLimitPaid'] = $row_limits['prefsEntryLimitPaid'];
else $row_limits['prefsEntryLimitPaid'] = "";

$php_version = phpversion();

/**
 * ------------------------------------------------------------------------
 * BEGIN TRANSLATIONS BELOW!
 * ------------------------------------------------------------------------
 */

$j_s_text = "";
if (strpos($section, "step") === FALSE) {
	if ((isset($judge_limit)) && (isset($steward_limit))) {
		if (($judge_limit) && (!$steward_limit)) $j_s_text = "Steward"; // missing punctuation intentional
		elseif ((!$judge_limit) && ($steward_limit)) $j_s_text = "Giudice"; // missing punctuation intentional
		else $j_s_text = "Giudice o steward"; // missing punctuation intentional
	}
}

/**
 * ------------------------------------------------------------------------
 * Global Labels
 * Mostly used for titles and navigation.
 * All labels are capitalized and without punctuation.
 * ------------------------------------------------------------------------
 */
$label_home = "Home";
$label_welcome = "Benvenuto";
$label_comps = "Elenco Competizioni";
$label_info = "Informazioni";
$label_volunteers = "Volontari";
$label_register = "Registrati";
$label_help = "Aiuto";
$label_print = "Stampa";
$label_my_account = "Il Mio Account";
$label_yes = "Sì";
$label_no = "No";
$label_low_none = "Basso/Nessuno";
$label_low = "Basso";
$label_med = "Medio";
$label_high = "Alto";
$label_pay = "Paga Quote di Iscrizione";
$label_reset_password = "Reimposta Password";
$label_log_in = "Accedi";
$label_logged_in = "Accesso Effettuato";
$label_log_out = "Esci";
$label_logged_out = "Disconnesso";
$label_sponsors = "Sponsor";
$label_rules = "Regolamento";
$label_volunteer_info = "Informazioni per Volontari";
$label_reg = $label_register;
$label_judge_reg = "Registrazione Giudice";
$label_steward_reg = "Registrazione Steward";
$label_past_winners = "Vincitori Precedenti";
$label_contact = "Contatti";
$label_style = "Stile";
$label_entry = "Iscrizione";
$label_add_entry = "Aggiungi Iscrizione";
$label_edit_entry = "Modifica Iscrizione";
$label_upload = "Carica";
$label_bos = "Best of Show";
$label_brewer = "Birraio";
$label_cobrewer = "Co-Birraio";
$label_entry_name = "Nome Iscrizione";
$label_required_info = "Informazioni Obbligatorie";
$label_character_limit = " limite di caratteri - usa parole chiave e abbreviazioni se lo spazio è limitato.
Caratteri utilizzati: ";
$label_carbonation = "Carbonazione";
$label_sweetness = "Dolcezza";
$label_strength = "Forza";
$label_color = "Colore";
$label_table = "Tavolo";
$label_standard = "Standard";
$label_super = "Super";
$label_session = "Session";
$label_double = "Doppia";
$label_blonde = "Bionda";
$label_amber = "Ambrata";
$label_brown = "Bruna";
$label_pale = "Chiara";
$label_dark = "Scura";
$label_hydromel = "Idromele";
$label_sack = "Sack";
$label_still = "Ferma";
$label_petillant = "Frizzante";
$label_sparkling = "Spumante";
$label_dry = "Secco";
$label_med_dry = "Medio Secco";
$label_med_sweet = "Medio Dolce";
$label_sweet = "Dolce";
$label_brewer_specifics = "Specifiche del Birraio";
$label_general = "Generale";
$label_amount_brewed = "Quantità Prodotta";
$label_specific_gravity = "Densità";
$label_fermentables = "Fermentabili";
$label_malt_extract = "Estratto di Malto";
$label_grain = "Grani";
$label_hops = "Luppoli";
$label_hop = "Luppolo";
$label_mash = "Ammostamento";
$label_steep = "Infusione";
$label_other = "Altro";
$label_weight = "Peso";
$label_use = "Utilizzo";
$label_time = "Tempo";
$label_first_wort = "First Wort";
$label_boil = "Bollitura";
$label_aroma = "Aroma";
$label_dry_hop = "Dry Hop";
$label_type = "Tipo";
$label_bittering = "Amaro";
$label_both = "Entrambi";
$label_form = "Forma";
$label_whole = "Intero";
$label_pellets = "Pellet";
$label_plug = "Plug";
$label_extract = "Estratto";
$label_date = "Data";
$label_bottled = "Imbottigliato";
$label_misc = "Varie";
$label_minutes = "Minuti";
$label_hours = "Ore";
$label_step = "Fase";
$label_temperature = "Temperatura";
$label_water = "Acqua";
$label_amount = "Quantità";
$label_yeast = "Lievito";
$label_name = "Nome";
$label_manufacturer = "Produttore";
$label_nutrients = "Nutrienti";
$label_liquid = "Liquido";
$label_ale = "Ale";
$label_lager = "Lager";
$label_wine = "Vino";
$label_champagne = "Champagne";
$label_boil = "Bollitura";
$label_fermentation = "Fermentazione";
$label_finishing = "Finitura";
$label_finings = "Chiarificanti";
$label_primary = "Primaria";
$label_secondary = "Secondaria";
$label_days = "Giorni";
$label_forced = "CO2 Forzata";
$label_bottle_cond = "Rifermentata in Bottiglia";
$label_volume = "Volume";
$label_og = "Densità Iniziale";
$label_fg = "Densità Finale";
$label_starter = "Starter";
$label_password = "Password";
$label_judging_number = "Numero di Valutazione";
$label_check_in = "Registra Iscrizione";
$label_box_number = "Numero Scatola";
$label_first_name = "Nome";
$label_last_name = "Cognome";
$label_secret_01 = "Qual è la tua birra preferita di sempre?";
$label_secret_02 = "Qual era il nome del tuo primo animale domestico?";
$label_secret_03 = "Qual era il nome della strada in cui sei cresciuto?";
$label_secret_04 = "Qual era la mascotte della tua scuola superiore?";
$label_security_answer = "Risposta alla Domanda di Sicurezza";
$label_security_question = "Domanda di Sicurezza";
$label_judging = "Valutazione";
$label_judge = "Giudice";
$label_steward = "Steward";
$label_account_info = "Informazioni Account";
$label_street_address = "Indirizzo";
$label_address = "Indirizzo";
$label_city = "Città";
$label_state_province = "Stato/Provincia";
$label_zip = "CAP";
$label_country = "Paese";
$label_phone = "Telefono";
$label_phone_primary = "Telefono Principale";
$label_phone_secondary = "Telefono Secondario";
$label_drop_off = "Consegna Iscrizione";
$label_drop_offs = "Punti di Consegna";
$label_club = "Club";
$label_aha_number = "Numero Membro AHA";
$label_org_notes = "Note per l'Organizzatore";
$label_avail = "Disponibilità";
$label_location = "Luogo";
$label_judging_avail = "Disponibilità per Sessioni di Valutazione";
$label_stewarding = "Assistenza";
$label_stewarding_avail = "Disponibilità per Sessioni di Assistenza";
$label_bjcp_id = "ID BJCP";
$label_bjcp_mead = "Giudice Certificato di Idromele";
$label_bjcp_rank = "Grado BJCP";
$label_designations = "Designazioni";
$label_judge_sensory = "Giudice con Formazione Sensoriale";
$label_judge_pro = "Birraio Professionista";
$label_judge_comps = "Competizioni Giudicate";
$label_judge_preferred = "Stili Preferiti";
$label_judge_non_preferred = "Stili Non Preferiti";
$label_waiver = "Liberatoria";
$label_add_admin = "Aggiungi Informazioni Utente Admin";
$label_add_account = "Aggiungi Informazioni Account";
$label_edit_account = "Modifica Informazioni Account";
$label_entries = "Iscrizioni";
$label_confirmed = "Confermato";
$label_paid = "Pagato";
$label_updated = "Aggiornato";
$label_mini_bos = "Mini-BOS";
$label_actions = "Azioni";
$label_score = "Punteggio";
$label_winner = "Vincitore?";
$label_change_email = "Cambia Email";
$label_change_password = "Cambia Password";
$label_add_beerXML = "Aggiungi un'Iscrizione Usando BeerXML";
$label_none_entered = "Nessuno inserito";
$label_none = "Nessuno";
$label_discount = "Sconto";
$label_subject = "Oggetto";
$label_message = "Messaggio";
$label_send_message = "Invia Messaggio";
$label_email = "Indirizzo Email";
$label_account_registration = "Registrazione Account";
$label_entry_registration = "Registrazione Iscrizione";
$label_entry_fees = "Quote di Iscrizione";
$label_entry_limit = "Limite Iscrizioni";
$label_entry_info = "Informazioni Iscrizione";
$label_entry_per_entrant = "Limiti per Partecipante";
$label_categories_accepted = "Categorie Accettate";
$label_judging_categories = "Categorie di Valutazione";
$label_entry_acceptance_rules = "Regole di Accettazione Iscrizioni";
$label_shipping_info = "Informazioni di Spedizione";
$label_packing_shipping = "Imballaggio e Spedizione";
$label_awards = "Premi";
$label_awards_ceremony = "Cerimonia di Premiazione";
$label_circuit = "Qualificazione al Circuito";
$label_hosted = "Edizione Ospitata";
$label_entry_check_in = "Registrazione Iscrizioni";
$label_cash = "Contanti";
$label_check = "Assegno";
$label_pay_online = "Paga Online";
$label_cancel = "Annulla";
$label_understand = "Ho Capito";
$label_fee_discount = "Quota di Iscrizione Scontata";
$label_discount_code = "Codice Sconto";
$label_register_judge = "Ti Stai Registrando come Partecipante, Giudice o Steward?";
$label_register_judge_standard = "Registra un Giudice o Steward (Standard)";
$label_register_judge_quick = "Registra un Giudice o Steward (Rapido)";
$label_all_participants = "Tutti i Partecipanti";
$label_open = "Aperto";
$label_closed = "Chiuso";
$label_judging_loc = "Sessioni di Valutazione";
$label_new = "Nuovo";
$label_old = "Vecchio";
$label_sure = "Sei Sicuro?";
$label_judges = "Giudici";
$label_stewards = "Steward";
$label_staff = "Staff";
$label_category = "Categoria";
$label_delete = "Elimina";
$label_undone = "Questa Azione Non Può Essere Annullata";
$label_bitterness = "Amarezza";
$label_close = "Chiudi";
$label_custom_style = "Stile Personalizzato";
$label_custom_style_types = "Tipi di Stile Personalizzato";
$label_assigned_to_table = "Assegnato al Tavolo";
$label_organizer = "Organizzatore";
$label_by_table = "Per Tavolo";
$label_by_category = "Per Stile";
$label_by_subcategory = "Per Sottostile";
$label_by_last_name = "Per Cognome";
$label_by_table = "Per Tavolo";
$label_by_location = "Per Luogo della Sessione";
$label_shipping_entries = "Spedizione Iscrizioni";
$label_no_availability = "Nessuna Disponibilità Definita";
$label_error = "Errore";
$label_round = "Turno";
$label_flight = "Flight";
$label_rounds = "Turni";
$label_flights = "Flight";
$label_sign_in = "Accedi";
$label_signature = "Firma";
$label_assignment = "Assegnazione";
$label_assignments = "Assegnazioni";
$label_letter = "Lettera";
$label_re_enter = "Reinserisci";
$label_website = "Sito Web";
$label_place = "Posizione";
$label_cheers = "Salute";
$label_count = "Conteggio";
$label_total = "Totale";
$label_participant = "Partecipante";
$label_entrant = "Concorrente";
$label_received = "Ricevuto";
$label_please_note = "Nota Bene";
$label_pull_order = "Ordine di Prelievo";
$label_box = "Scatola";
$label_sorted = "Ordinato";
$label_subcategory = "Sottocategoria";
$label_affixed = "Etichetta Applicata?";
$label_points = "Punti";
$label_comp_id = "ID Competizione BJCP";
$label_days = "Giorni";
$label_sessions = "Sessioni";
$label_number = "Numero";
$label_more_info = "Maggiori Informazioni";
$label_entry_instructions = "Istruzioni per l'Iscrizione";
$label_commercial_examples = "Esempi Commerciali";
$label_users = "Utenti";
$label_participants = "Partecipanti";
$label_please_confirm = "Per Favore Conferma";
$label_undone = "Questa azione non può essere annullata.";
$label_data_retain = "Dati da Conservare";
$label_comp_portal = "Elenco Competizioni";
$label_comp = "Competizione";
$label_continue = "Continua";
$label_host = "Ospitante";
$label_closing_soon = "In Chiusura";
$label_access = "Accesso";
$label_length = "Lunghezza";
$label_admin = "Amministrazione";
$label_admin_short = "Admin";
$label_admin_dashboard = "Dashboard";
$label_admin_judging = $label_judging;
$label_admin_stewarding = "Assistenza";
$label_admin_participants = $label_participants;
$label_admin_entries = $label_entries;
$label_admin_comp_info = "Informazioni Competizione";
$label_admin_web_prefs = "Preferenze Sito Web";
$label_admin_judge_prefs = "Preferenze Valutazione/Organizzazione Competizione";
$label_admin_archives = "Archivi";
$label_admin_style = $label_style;
$label_admin_styles = "Stili";
$label_admin_dropoff = $label_drop_offs;
$label_admin_judging_loc = $label_judging_loc;
$label_admin_contacts = "Contatti";
$label_admin_tables = "Tavoli";
$label_admin_scores = "Punteggi";
$label_admin_bos = $label_bos;
$label_admin_bos_acr = "BOS";
$label_admin_style_types = "Tipi di Stile";
$label_admin_custom_cat = "Categorie Personalizzate";
$label_admin_custom_cat_data = "Dati Categorie Personalizzate";
$label_admin_sponsors = $label_sponsors;
$label_admin_entry_count = "Conteggio Iscrizioni per Stile";
$label_admin_entry_count_sub = "Conteggio Iscrizioni per Sottostile";
$label_admin_custom_mods = "Moduli Personalizzati";
$label_admin_check_in = $label_entry_check_in;
$label_admin_make_admin = "Cambia Livello Utente";
$label_admin_register = "Registra un Partecipante";
$label_admin_upload_img = "Carica Immagini";
$label_admin_upload_doc = "Carica Schede di Valutazione e Altri Documenti";
$label_admin_password = "Cambia Password Utente";
$label_admin_edit_account = "Modifica Account Utente";
$label_account_summary = "Riepilogo del Mio Account";
$label_confirmed_entries = "Iscrizioni Confermate";
$label_unpaid_confirmed_entries = "Iscrizioni Confermate Non Pagate";
$label_total_entry_fees = "Totale Quote di Iscrizione";
$label_entry_fees_to_pay = "Quote di Iscrizione da Pagare";
$label_entry_drop_off = "Consegna Iscrizioni";
$label_maintenance = "Manutenzione";
$label_judge_info = "Informazioni Giudice";
$label_cellar = "La Mia Cantina";
$label_verify = "Verifica";
$label_entry_number = "Numero Iscrizione";
/**
 * ------------------------------------------------------------------------
 * Headers
 * Missing punctuation intentional for all.
 * ------------------------------------------------------------------------
 */
$header_text_000 = "Configurazione completata con successo.";
$header_text_001 = "Hai effettuato l'accesso e sei pronto per personalizzare ulteriormente il sito della tua competizione.";
$header_text_002 = "Tuttavia, non è stato possibile modificare i permessi del file config.php.";
$header_text_003 = "Si raccomanda vivamente di modificare i permessi del server (chmod) sul file config.php a 555. Per farlo, dovrai accedere al file sul tuo server.";
$header_text_004 = "Inoltre, la variabile &#36;setup_free_access in config.php è attualmente impostata su TRUE. Per motivi di sicurezza, l'impostazione dovrebbe essere riportata a FALSE. Dovrai modificare direttamente config.php e ricaricarlo sul tuo server per farlo.";
$header_text_005 = "Informazioni aggiunte con successo.";
$header_text_006 = "Informazioni modificate con successo.";
$header_text_007 = "Si è verificato un errore.";
$header_text_008 = "Per favore riprova.";
$header_text_009 = "Devi essere un amministratore per accedere a qualsiasi funzione di amministrazione.";
$header_text_010 = "Modifica";
$header_text_011 = $label_email;
$header_text_012 = $label_password;
$header_text_013 = "L'indirizzo email fornito è già in uso, per favore fornisci un altro indirizzo email.";
$header_text_014 = "C'è stato un problema con l'ultima richiesta, per favore riprova.";
$header_text_015 = "La tua password attuale non era corretta.";
$header_text_016 = "Per favore fornisci un indirizzo email.";
$header_text_017 = "Spiacenti, c'è stato un problema con il tuo ultimo tentativo di accesso.";
$header_text_018 = "Spiacenti, il nome utente che hai inserito è già in uso.";
$header_text_019 = "Forse hai già creato un account?";
$header_text_020 = "In tal caso, accedi qui.";
$header_text_021 = "Il nome utente fornito non è un indirizzo email valido.";
$header_text_022 = "Per favore inserisci un indirizzo email valido.";
$header_text_023 = "Il CAPTCHA non è stato completato con successo.";
$header_text_024 = "Gli indirizzi email che hai inserito non corrispondono.";
$header_text_025 = "Il numero AHA che hai inserito è già presente nel sistema.";
$header_text_026 = "Il tuo pagamento online è stato ricevuto e la transazione è stata completata. Nota che potrebbe essere necessario attendere alcuni minuti prima che lo stato del pagamento venga aggiornato qui - assicurati di aggiornare questa pagina o accedere al tuo elenco di iscrizioni. Riceverai una ricevuta di pagamento via email da PayPal.";
$header_text_027 = "Assicurati di stampare la ricevuta e allegarla a una delle tue iscrizioni come prova di pagamento.";
$header_text_028 = "Il tuo pagamento online è stato annullato.";
$header_text_029 = "Il codice è stato verificato.";
$header_text_030 = "Spiacenti, il codice che hai inserito non era corretto.";
$header_text_031 = "Devi effettuare l'accesso e avere privilegi di amministratore per accedere alle funzioni di amministrazione.";
$header_text_032 = "Spiacenti, c'è stato un problema con il tuo ultimo tentativo di accesso.";
$header_text_033 = "Assicurati che il tuo indirizzo email e la password siano corretti.";
$header_text_034 = "È stato generato un token per il reset della password ed è stato inviato via email all'indirizzo associato al tuo account.";
$header_text_035 = "- ora puoi accedere utilizzando il tuo nome utente attuale e la nuova password.";
$header_text_036 = "Sei stato disconnesso.";
$header_text_037 = "Accedi di nuovo?";
$header_text_038 = "La tua domanda di verifica non corrisponde a quella nel database.";
$header_text_039 = "Le tue informazioni di verifica dell'ID sono state inviate all'indirizzo email associato al tuo account.";
$header_text_040 = "Il tuo messaggio è stato inviato a";
$header_text_041 = $header_text_023;
$header_text_042 = "Il tuo indirizzo email è stato aggiornato.";
$header_text_043 = "La tua password è stata aggiornata.";
$header_text_044 = "Informazioni eliminate con successo.";
$header_text_045 = "Dovresti verificare tutte le tue iscrizioni importate utilizzando BeerXML.";
$header_text_046 = "Ti sei registrato.";
$header_text_047 = "Hai raggiunto il limite di iscrizioni.";
$header_text_048 = "La tua iscrizione non è stata aggiunta.";
$header_text_049 = "Hai raggiunto il limite di iscrizioni per la sottocategoria.";
$header_text_050 = "Configurazione: Installa Tabelle e Dati DB";
$header_text_051 = "Configurazione: Crea Utente Amministratore";
$header_text_052 = "Configurazione: Aggiungi Informazioni Utente Amministratore";
$header_text_053 = "Configurazione: Imposta Preferenze Sito Web";
$header_text_054 = "Configurazione: Aggiungi Informazioni Competizione";
$header_text_055 = "Configurazione: Aggiungi Sessioni di Valutazione";
$header_text_056 = "Configurazione: Aggiungi Punti di Consegna";
$header_text_057 = "Configurazione: Designa Stili Accettati";
$header_text_058 = "Configurazione: Imposta Preferenze di Valutazione";
$header_text_059 = "Importa un'Iscrizione Utilizzando BeerXML";
$header_text_060 = "La tua iscrizione è stata registrata.";
$header_text_061 = "La tua iscrizione è stata confermata.";
$header_text_065 = "Tutte le iscrizioni ricevute sono state controllate e quelle non assegnate ai tavoli sono state assegnate.";
$header_text_066 = "Informazioni aggiornate con successo.";
$header_text_067 = "Il suffisso che hai inserito è già in uso, per favore inseriscine uno diverso.";
$header_text_068 = "I dati della competizione specificati sono stati cancellati.";
$header_text_069 = "Archivi creati con successo. ";
$header_text_070 = "Seleziona il nome dell'archivio per visualizzarlo.";
$header_text_071 = "Ricorda di aggiornare le tue ".$label_admin_comp_info." e le tue ".$label_admin_judging_loc." se stai iniziando una nuova competizione.";
$header_text_072 = "Archivio ".$filter." eliminato.";
$header_text_073 = "I record sono stati aggiornati.";
$header_text_074 = "Il nome utente che hai inserito è già in uso.";
$header_text_075 = "Aggiungere un altro punto di consegna?";
$header_text_076 = "Aggiungere un'altra sede, data o orario di valutazione?";
$header_text_077 = "Il tavolo appena definito non ha stili associati.";
$header_text_078 = "Mancano uno o più dati obbligatori - evidenziati in rosso qui sotto.";
$header_text_079 = "Gli indirizzi email che hai inserito non corrispondono.";
$header_text_080 = "Il numero AHA che hai inserito è già presente nel sistema.";
$header_text_081 = "Tutte le iscrizioni sono state contrassegnate come pagate.";
$header_text_082 = "Tutte le iscrizioni sono state contrassegnate come ricevute.";
$header_text_083 = "Tutte le iscrizioni non confermate sono ora contrassegnate come confermate.";
$header_text_084 = "Tutte le assegnazioni dei partecipanti sono state cancellate.";
$header_text_085 = "Un numero di valutazione che hai inserito non è stato trovato nel database.";
$header_text_086 = "Tutti gli stili delle iscrizioni sono stati convertiti da BJCP 2008 a BJCP 2015.";
$header_text_087 = "Dati eliminati con successo.";
$header_text_088 = "Il giudice/steward è stato aggiunto con successo. Ricorda di assegnare l'utente come giudice o steward prima di assegnarlo ai tavoli.";
$header_text_089 = "Il file è stato caricato con successo. Controlla l'elenco per verificare.";
$header_text_090 = "Il file che si è tentato di caricare non è di un tipo accettato e/o supera la dimensione massima consentita.";
$header_text_091 = "File eliminato/i con successo.";
$header_text_092 = "L'email di prova è stata generata. Assicurati di controllare la cartella spam.";
$header_text_093 = "La password dell'utente è stata modificata. Assicurati di comunicargli la nuova password!";
$header_text_094 = "La modifica dei permessi della cartella user_images a 755 non è riuscita.";
$header_text_095 = "Dovrai modificare manualmente i permessi della cartella. Consulta la documentazione del tuo programma FTP o del tuo ISP per il chmod (permessi delle cartelle).";
$header_text_096 = "I Numeri di Valutazione sono stati rigenerati.";
$header_text_097 = "La tua installazione è stata configurata con successo!";
$header_text_098 = "PER MOTIVI DI SICUREZZA dovresti immediatamente impostare la variabile &#36;setup_free_access in config.php su FALSE.";
$header_text_099 = "Altrimenti, la tua installazione e il tuo server sono vulnerabili a violazioni della sicurezza.";
$header_text_100 = "Accedi ora per accedere alla Dashboard di Amministrazione";
$header_text_101 = "La tua installazione è stata aggiornata con successo!";
$header_text_102 = "Gli indirizzi email non corrispondono.";
$header_text_103 = "Per favore accedi per accedere al tuo account.";
$header_text_104 = "Non hai privilegi di accesso sufficienti per visualizzare questa pagina.";
$header_text_105 = "Sono necessarie ulteriori informazioni affinché la tua iscrizione venga accettata e confermata.";
$header_text_106 = "Vedi l'area evidenziata in ROSSO qui sotto.";
$header_text_107 = "Per favore scegli uno stile.";
$header_text_108 = "Questa iscrizione non può essere accettata o confermata finché non è stato scelto uno stile. Le iscrizioni non confermate possono essere eliminate dal sistema senza preavviso.";
$header_text_109 = "Ti sei registrato come steward.";
$header_text_110 = "Tutte le iscrizioni sono state contrassegnate come non pagate.";
$header_text_111 = "Tutte le iscrizioni sono state contrassegnate come non ricevute.";

/**
 * ------------------------------------------------------------------------
 * Alerts
 * ------------------------------------------------------------------------
 */
$alert_text_000 = "Concedi agli utenti l'accesso di amministratore di alto livello e amministratore con cautela.";
$alert_text_001 = "Pulizia dei dati completata.";
$alert_text_002 = "La variabile &#36;setup_free_access in config.php è attualmente impostata su TRUE.";
$alert_text_003 = "Per motivi di sicurezza, l'impostazione dovrebbe essere riportata a FALSE. Dovrai modificare direttamente config.php e ricaricare il file sul tuo server.";
$alert_text_005 = "Non sono stati specificati punti di consegna.";
$alert_text_006 = "Aggiungere un punto di consegna?";
$alert_text_008 = "Non sono state specificate sessioni di valutazione.";
$alert_text_009 = "Aggiungere una sessione di valutazione?";
$alert_text_011 = "Non sono stati specificati contatti per la competizione.";
$alert_text_012 = "Aggiungere un contatto per la competizione?";
$alert_text_014 = "Il tuo set di stili attuale è BJCP 2008.";
$alert_text_015 = "Vuoi convertire tutte le iscrizioni a BJCP 2015?";
$alert_text_016 = "Sei sicuro? Questa azione convertirà tutte le iscrizioni nel database per conformarsi alle linee guida degli stili BJCP 2015. Le categorie saranno 1:1 dove possibile, tuttavia alcuni stili speciali potrebbero dover essere aggiornati dal partecipante.";
$alert_text_017 = "Per mantenere la funzionalità, la conversione deve essere eseguita <em>prima</em> di definire le tabelle.";
$alert_text_019 = "Tutte le iscrizioni non confermate sono state eliminate dal database.";
$alert_text_020 = "Le iscrizioni non confermate sono evidenziate e indicate con una <span class=\"fa fa-sm fa-exclamation-triangle text-danger\"></span> icona";
$alert_text_021 = "I partecipanti dovrebbero essere contattati. Queste iscrizioni non sono incluse nei calcoli delle quote.";
$alert_text_023 = "Aggiungere un Punto di Consegna?";
$alert_text_024 = $label_yes;
$alert_text_025 = $label_no;
$alert_text_027 = "La registrazione delle iscrizioni non è ancora aperta.";
$alert_text_028 = "La registrazione delle iscrizioni è chiusa.";
$alert_text_029 = "L'aggiunta di iscrizioni non è disponibile.";
$alert_text_030 = "Il limite di iscrizioni alla competizione è stato raggiunto.";
$alert_text_031 = "Il tuo limite personale di iscrizioni è stato raggiunto.";
$alert_text_032 = "Potrai aggiungere iscrizioni il o dopo il ".$entry_open.".";
$alert_text_033 = "La registrazione degli account aprirà il ".$reg_open.".";
$alert_text_034 = "Per favore torna allora per registrare il tuo account.";
$alert_text_036 = "La registrazione delle iscrizioni aprirà il ".$entry_open.".";
$alert_text_037 = "Per favore torna allora per aggiungere le tue iscrizioni al sistema.";
$alert_text_039 = "La registrazione di giudici e steward aprirà il ".$judge_open.".";
$alert_text_040 = "Per favore torna allora per registrarti come giudice o steward.";
$alert_text_042 = "La registrazione delle iscrizioni è aperta!";
$alert_text_043 = "Un totale di ".$total_entries." iscrizioni sono state aggiunte al sistema al ".$current_time.".";
$alert_text_044 = "La registrazione si chiuderà ";
$alert_text_046 = "Il limite di iscrizioni è quasi raggiunto!";
$alert_text_047 = $total_entries." su ".$row_limits['prefsEntryLimit']." iscrizioni massime sono state aggiunte nel sistema al ".$current_time.".";
$alert_text_049 = "Il limite di iscrizioni è stato raggiunto.";
$alert_text_050 = "Il limite di ".$row_limits['prefsEntryLimit']." iscrizioni è stato raggiunto. Non saranno accettate ulteriori iscrizioni.";
$alert_text_052 = "Il limite di iscrizioni pagate è stato raggiunto.";
$alert_text_053 = "Il limite di ".$row_limits['prefsEntryLimitPaid']." iscrizioni <em>pagate</em> è stato raggiunto. Non saranno accettate ulteriori iscrizioni.";
$alert_text_055 = "La registrazione è chiusa.";
$alert_text_056 = "Se hai già registrato un account,";
$alert_text_057 = "accedi qui";
$alert_text_059 = "La registrazione delle iscrizioni è chiusa.";
$alert_text_060 = "Un totale di ".$total_entries." iscrizioni sono state aggiunte nel sistema.";
$alert_text_062 = "La consegna delle iscrizioni è chiusa.";
$alert_text_063 = "Le bottiglie delle iscrizioni non sono più accettate nei punti di consegna.";
$alert_text_065 = "La spedizione delle iscrizioni è chiusa.";
$alert_text_066 = "Le bottiglie delle iscrizioni non sono più accettate nel punto di spedizione.";
$alert_text_068 = "Registrazione ".$j_s_text." aperta.";
$alert_text_069 = "Registrati qui";
$alert_text_070 = "La registrazione ".$j_s_text." si chiuderà il ".$judge_closed.".";
$alert_text_072 = "Il limite di giudici registrati è stato raggiunto.";
$alert_text_073 = "Non saranno accettate ulteriori registrazioni di giudici.";
$alert_text_074 = "La registrazione come steward è ancora disponibile.";
$alert_text_076 = "Il limite di steward registrati è stato raggiunto.";
$alert_text_077 = "Non saranno accettate ulteriori registrazioni di steward.";
$alert_text_078 = "La registrazione come giudice è ancora disponibile.";
$alert_text_080 = "Password non corretta.";
$alert_text_081 = "Password accettata.";
$alert_email_valid = "Il formato dell'email è valido.";
$alert_email_not_valid = "Il formato dell'email non è valido.";
$alert_email_in_use = "L'indirizzo email che hai inserito è già in uso. Per favore scegline un altro.";
$alert_email_not_in_use = "Congratulazioni! L'indirizzo email che hai inserito non è in uso.";

/**
 * ------------------------------------------------------------------------
 * Public Pages
 * ------------------------------------------------------------------------
 */
$comps_text_000 = "Scegli la competizione a cui desideri accedere dall'elenco sottostante.";
$comps_text_001 = "Competizione attuale:";
$comps_text_002 = "Non ci sono competizioni con finestre di iscrizione aperte in questo momento.";
$comps_text_003 = "Non ci sono competizioni con finestre di iscrizione che si chiudono nei prossimi 7 giorni.";

/**
 * ------------------------------------------------------------------------
 * BeerXML
 * ------------------------------------------------------------------------
 */
$beerxml_text_000 = "L'importazione delle iscrizioni non è disponibile.";
$beerxml_text_001 = "è stato caricato e la birra è stata aggiunta al tuo elenco di iscrizioni.";
$beerxml_text_002 = "Spiacenti, quel tipo di file non è consentito per il caricamento. Sono consentite solo estensioni di file .xml.";
$beerxml_text_003 = "La dimensione del file supera i 2MB. Per favore modifica la dimensione e riprova.";
$beerxml_text_004 = "File non valido specificato.";
$beerxml_text_005 = "Tuttavia, non è stata confermata. Per confermare la tua iscrizione, accedi al tuo elenco di iscrizioni per ulteriori istruzioni. Oppure, puoi aggiungere un'altra iscrizione BeerXML qui sotto.";
$beerxml_text_006 = "La versione di PHP del tuo server non supporta la funzione di importazione BeerXML.";
$beerxml_text_007 = "È richiesta la versione PHP 5.x o superiore — questo server sta eseguendo la versione PHP ".$php_version.".";
$beerxml_text_008 = "Cerca il tuo file compatibile con BeerXML sul tuo disco rigido e seleziona <em>Carica</em>.";
$beerxml_text_009 = "Scegli File BeerXML";
$beerxml_text_010 = "Nessun file scelto...";
$beerxml_text_011 = "iscrizioni aggiunte";
$beerxml_text_012 = "iscrizione aggiunta";

/**
 * ------------------------------------------------------------------------
 * Add Entry
 * ------------------------------------------------------------------------
 */
$brew_text_000 = "Seleziona per dettagli sullo stile";
$brew_text_001 = "I giudici non conosceranno il nome della tua iscrizione.";
$brew_text_002 = "[disabilitato - limite di iscrizioni per stile o tipo di stile raggiunto]";
$brew_text_003 = "[disabilitato - limite di iscrizioni raggiunto]";
$brew_text_004 = "Sono richiesti tipo specifico, ingredienti speciali, stile classico, forza (per stili di birra) e/o colore";
$brew_text_005 = "Forza richiesta";
$brew_text_006 = "Livello di carbonazione richiesto";
$brew_text_007 = "Livello di dolcezza richiesto";
$brew_text_008 = "Questo stile richiede che tu fornisca informazioni specifiche per l'iscrizione.";
$brew_text_009 = "Requisiti per";
$brew_text_010 = "Questo stile richiede più informazioni. Per favore inseriscile nell'area fornita.";
$brew_text_011 = "Il nome dell'iscrizione è obbligatorio.";
$brew_text_012 = "NON OBBLIGATORIO Fornisci SOLO se desideri che i giudici considerino pienamente ciò che scrivi qui quando valutano e assegnano un punteggio alla tua iscrizione. Usa per registrare specifiche che vorresti che i giudici considerassero quando valutano la tua iscrizione che NON HAI SPECIFICATO in altri campi (es. tecnica di ammostamento, varietà di luppolo, varietà di miele, varietà di uva, varietà di pera, ecc.).";
$brew_text_013 = "NON usare questo campo per specificare ingredienti speciali, stile classico, forza (per iscrizioni di birra) o colore.";
$brew_text_014 = "Fornisci solo se desideri che i giudici considerino pienamente ciò che specifichi quando valutano e assegnano un punteggio alla tua iscrizione.";
$brew_text_015 = "Tipo di estratto (es. chiaro, scuro) o marca.";
$brew_text_016 = "Tipo di grano (es. pilsner, pale ale, ecc.)";
$brew_text_017 = "Tipo di ingrediente o nome.";
$brew_text_018 = "Nome del luppolo.";
$brew_text_019 = "Solo numeri, per favore.";
$brew_text_020 = "Nome del ceppo (es. 1056 American Ale).";
$brew_text_021 = "Wyeast, White Labs, ecc.";
$brew_text_022 = "1 smackpack, 2 fiale, 2000 ml, ecc.";
$brew_text_023 = "Fermentazione primaria in giorni.";
$brew_text_024 = "Sosta di saccarificazione, ecc.";
$brew_text_025 = "Fermentazione secondaria in giorni.";
$brew_text_026 = "Altra fermentazione in giorni.";

/**
 * ------------------------------------------------------------------------
 * My Account
 * ------------------------------------------------------------------------
 */
$brewer_text_000 = "Per favore inserisci il nome di <em>una sola</em> persona.";
$brewer_text_001 = "Scegline una. Questa domanda sarà usata per verificare la tua identità nel caso dimenticassi la password.";
$brewer_text_003 = "L'input accetta solo caratteri numerici. Per essere considerato per un'opportunità di birrificio GABF Pro-Am devi essere membro AHA.";
$brewer_text_004 = "Fornisci qualsiasi informazione che ritieni l'organizzatore della competizione, il coordinatore dei giudici o lo staff della competizione dovrebbero sapere (es. allergie, restrizioni dietetiche speciali, taglia della maglietta, ecc.).";
$brewer_text_005 = "Non Applicabile";
$brewer_text_006 = "Sei disposto e qualificato a servire come giudice in questa competizione?";
$brewer_text_007 = "Hai superato l'esame BJCP per Giudice di Idromele?";
$brewer_text_008 = "* Il grado <em>Non-BJCP</em> è per coloro che non hanno sostenuto l'Esame di Ingresso per Giudice di Birra BJCP e <em>non</em> sono birrai professionisti.";
$brewer_text_009 = "** Il grado <em>Provvisorio</em> è per coloro che hanno sostenuto e superato l'Esame di Ingresso per Giudice di Birra BJCP, ma non hanno ancora sostenuto l'Esame di Valutazione della Birra BJCP.";
$brewer_text_010 = "Solo le prime due designazioni appariranno sulle etichette stampate delle tue schede di valutazione.";
$brewer_text_011 = "In quante competizioni hai precedentemente servito come <strong>".strtolower($label_judge)."</strong>?";
$brewer_text_012 = "SOLO per le preferenze. Lasciare uno stile non selezionato indica che sei disponibile a giudicarlo – non c'è bisogno di selezionare tutti gli stili che sei disponibile a giudicare.";
$brewer_text_013 = "Seleziona o tocca il pulsante sopra per espandere l'elenco degli stili non preferiti da giudicare.";
$brewer_text_014 = "Non c'è bisogno di segnare quegli stili per i quali hai iscrizioni; il sistema non ti permetterà di essere assegnato a nessun tavolo dove hai iscrizioni.";
$brewer_text_015 = "Sei disposto a servire come steward in questa competizione?";
$brewer_text_016 = "La mia partecipazione a questa valutazione è completamente volontaria. So che la partecipazione a questa valutazione comporta il consumo di bevande alcoliche e che questo consumo può influenzare le mie percezioni e reazioni.";
$brewer_text_017 = "Seleziona o tocca il pulsante sopra per espandere l'elenco degli stili preferiti da giudicare.";
$brewer_text_018 = "Selezionando questa casella, sto effettivamente firmando un documento legale in cui accetto la responsabilità per la mia condotta, comportamento e azioni e sollevo completamente la competizione e i suoi organizzatori, individualmente o collettivamente, dalla responsabilità per la mia condotta, comportamento e azioni.";
$brewer_text_019 = "Se stai pianificando di servire come giudice in qualsiasi competizione, seleziona o tocca il pulsante sopra per inserire le tue informazioni relative al giudice.";
$brewer_text_020 = "Sei disposto a servire come membro dello staff in questa competizione?";
$brewer_text_021 = "I membri dello staff della competizione sono persone che servono in vari ruoli per assistere nell'organizzazione e nell'esecuzione della competizione prima, durante e dopo la valutazione. Giudici e steward possono anche servire come membri dello staff. I membri dello staff possono guadagnare punti BJCP se la competizione è sanzionata.";
/**
 * ------------------------------------------------------------------------
 * Contact
 * ------------------------------------------------------------------------
 */
$contact_text_000 = "Utilizza i link qui sotto per contattare le persone coinvolte nel coordinamento di questa competizione:";
$contact_text_001 = "Utilizza il modulo sottostante per contattare un funzionario della competizione. Tutti i campi con un asterisco sono obbligatori.";
$contact_text_002 = "Inoltre, una copia è stata inviata all'indirizzo email che hai fornito.";
$contact_text_003 = "Vuoi inviare un altro messaggio?";

/**
 * ------------------------------------------------------------------------
 * Home Pages
 * ------------------------------------------------------------------------
 */
$default_page_text_000 = "Non sono stati specificati punti di consegna.";
$default_page_text_001 = "Aggiungere un punto di consegna?";
$default_page_text_002 = "Non sono state specificate date/luoghi di valutazione.";
$default_page_text_003 = "Aggiungere un luogo di valutazione?";
$default_page_text_004 = "Iscrizioni Vincenti";
$default_page_text_005 = "I vincitori saranno pubblicati il o dopo il";
$default_page_text_006 = "Benvenuto";
$default_page_text_007 = "Visualizza i dettagli del tuo account e l'elenco delle iscrizioni.";
$default_page_text_008 = "Visualizza qui i dettagli del tuo account.";
$default_page_text_009 = "Vincitori Best of Show";
$default_page_text_010 = "Iscrizioni Vincenti";
$default_page_text_011 = "Devi registrare le tue informazioni solo una volta e puoi tornare su questo sito per inserire altre birre o modificare quelle che hai già inserito.";
$default_page_text_012 = "Puoi anche pagare le tue quote di iscrizione online se lo desideri.";
$default_page_text_013 = "Funzionario della Competizione";
$default_page_text_014 = "Funzionari della Competizione";
$default_page_text_015 = "Puoi inviare un'email a uno qualsiasi dei seguenti individui tramite";
$default_page_text_016 = "è orgoglioso di avere i seguenti";
$default_page_text_017 = "per il";
$default_page_text_018 = "Scarica i vincitori Best of Show in formato PDF.";
$default_page_text_019 = "Scarica i vincitori Best of Show in formato HTML.";
$default_page_text_020 = "Scarica le iscrizioni vincenti in formato PDF.";
$default_page_text_021 = "Scarica le iscrizioni vincenti in formato HTML.";
$default_page_text_022 = "Grazie per il tuo interesse nel";
$default_page_text_023 = "organizzato da";
$reg_open_text_000 = "La Registrazione di Giudici e Steward è";
$reg_open_text_001 = "Aperta";
$reg_open_text_002 = "Se <em>non ti sei</em> registrato e sei disposto a fare il volontario,";
$reg_open_text_003 = "per favore registrati";
$reg_open_text_004 = "Se <em>ti sei</em> registrato, accedi e poi scegli <em>Modifica Account</em> dal menu Il Mio Account indicato dall'icona";
$reg_open_text_005 = "nel menu in alto.";
$reg_open_text_006 = "Dato che ti sei già registrato, puoi";
$reg_open_text_007 = "controllare le informazioni del tuo account";
$reg_open_text_008 = "per vedere se hai indicato che sei disposto a fare il giudice e/o lo steward.";
$reg_open_text_009 = "Se sei disposto a fare il giudice o lo steward, per favore torna a registrarti il o dopo il";
$reg_open_text_010 = "La Registrazione delle Iscrizioni è";
$reg_open_text_011 = "Per aggiungere le tue iscrizioni nel sistema";
$reg_open_text_012 = "per favore procedi attraverso il processo di registrazione";
$reg_open_text_013 = "se hai già un account.";
$reg_open_text_014 = "usa il modulo per aggiungere un'iscrizione";
$reg_open_text_015 = "La Registrazione dei Giudici è";
$reg_open_text_016 = "La Registrazione degli Steward è";
$reg_closed_text_000 = "Grazie e Buona Fortuna a Tutti Coloro Che Hanno Partecipato al";
$reg_closed_text_001 = "Ci sono";
$reg_closed_text_002 = "partecipanti, giudici e steward registrati.";
$reg_closed_text_003 = "iscrizioni registrate e";
$reg_closed_text_004 = "partecipanti, giudici e steward registrati.";
$reg_closed_text_005 = "Al";
$reg_closed_text_006 = "iscrizioni ricevute ed elaborate (questo numero si aggiornerà man mano che le iscrizioni verranno ritirate dai punti di consegna e organizzate per la valutazione).";
$reg_closed_text_007 = "Le date di valutazione della competizione devono ancora essere determinate. Per favore controlla più tardi.";
$reg_closed_text_008 = "Mappa per";
$judge_closed_000 = "Grazie a tutti coloro che hanno partecipato al";
$judge_closed_001 = "Ci sono state";
$judge_closed_002 = "iscrizioni valutate e";
$judge_closed_003 = "partecipanti, giudici e steward registrati.";

/**
 * ------------------------------------------------------------------------
 * Entry Info
 * ------------------------------------------------------------------------
 */
$entry_info_text_000 = "Potrai creare il tuo account a partire dal";
$entry_info_text_001 = "fino al";
$entry_info_text_002 = "Giudici e steward possono registrarsi a partire dal";
$entry_info_text_003 = "per iscrizione";
$entry_info_text_004 = "Puoi creare il tuo account da oggi fino al";
$entry_info_text_005 = "Giudici e steward possono registrarsi da ora fino al";
$entry_info_text_006 = "Registrazioni per";
$entry_info_text_007 = "solo giudici e steward";
$entry_info_text_008 = "accettate fino al";
$entry_info_text_009 = "La registrazione è <strong class=\"text-danger\">chiusa</strong>.";
$entry_info_text_010 = "Benvenuto";
$entry_info_text_011 = "Visualizza i dettagli del tuo account e l'elenco delle iscrizioni.";
$entry_info_text_012 = "Visualizza qui le informazioni del tuo account.";
$entry_info_text_013 = "per iscrizione dopo il";
$entry_info_text_014 = "Potrai aggiungere le tue iscrizioni al sistema a partire dal";
$entry_info_text_015 = "Puoi aggiungere le tue iscrizioni al sistema da oggi fino al";
$entry_info_text_016 = "La registrazione delle iscrizioni è <strong class=\"text-danger\">chiusa</strong>.";
$entry_info_text_017 = "per iscrizioni illimitate.";
$entry_info_text_018 = "per i membri AHA.";
$entry_info_text_019 = "C'è un limite di";
$entry_info_text_020 = "iscrizioni per questa competizione.";
$entry_info_text_021 = "Ogni partecipante è limitato a";
$entry_info_text_022 = strtolower($label_entry);
$entry_info_text_023 = strtolower($label_entries);
$entry_info_text_024 = "iscrizione per sottocategoria";
$entry_info_text_025 = "iscrizioni per sottocategoria";
$entry_info_text_026 = "le eccezioni sono dettagliate di seguito";
$entry_info_text_027 = strtolower($label_subcategory);
$entry_info_text_028 = "sottocategorie";
$entry_info_text_029 = "iscrizione per le seguenti";
$entry_info_text_030 = "iscrizioni per le seguenti";
$entry_info_text_031 = "Dopo aver creato il tuo account e aggiunto le tue iscrizioni al sistema, devi pagare le tue quote di iscrizione. I metodi di pagamento accettati sono:";
$entry_info_text_032 = $label_cash;
$entry_info_text_033 = $label_check.", intestato a";
$entry_info_text_034 = "Carta di credito/debito e assegno elettronico, tramite PayPal";
$entry_info_text_035 = "Le date di valutazione della competizione devono ancora essere determinate. Per favore controlla più tardi.";
$entry_info_text_036 = "Bottiglie delle iscrizioni accettate presso la nostra sede di spedizione";
$entry_info_text_037 = "Spedire le iscrizioni a:";
$entry_info_text_038 = "Imballa con cura le tue iscrizioni in una scatola robusta. Rivesti l'interno del cartone con un sacchetto di plastica per la spazzatura. Separa e imballa ogni bottiglia con materiale di imballaggio adeguato. Per favore non imballare eccessivamente!";
$entry_info_text_039 = "Scrivi chiaramente: <em>Fragile. Questo lato in alto.</em> sul pacco. Per favore usa solo pluriball come materiale di imballaggio.";
$entry_info_text_040 = "Inserisci <em>ciascuna</em> delle tue etichette per bottiglia in un piccolo sacchetto con chiusura a zip prima di attaccarle alle rispettive bottiglie. In questo modo l'organizzatore può identificare specificamente quale iscrizione si è rotta in caso di danni durante la spedizione.";
$entry_info_text_041 = "Sarà fatto ogni ragionevole sforzo per contattare i partecipanti le cui bottiglie si sono rotte per prendere accordi per l'invio di bottiglie sostitutive.";
$entry_info_text_042 = "Se vivi negli Stati Uniti, nota che è <strong>illegale</strong> spedire le tue iscrizioni tramite il Servizio Postale degli Stati Uniti (USPS). Le compagnie di spedizione private hanno il diritto di rifiutare la tua spedizione se vengono informate che il pacco contiene vetro e/o bevande alcoliche. Tieni presente che le iscrizioni spedite a livello internazionale spesso richiedono una documentazione adeguata da parte delle dogane. Queste iscrizioni potrebbero essere aperte e/o restituite al mittente dai funzionari doganali a loro discrezione. È esclusivamente tua responsabilità seguire tutte le leggi e i regolamenti applicabili.";
$entry_info_text_043 = "Bottiglie delle iscrizioni accettate presso i nostri punti di consegna";
$entry_info_text_044 = "Mappa per";
$entry_info_text_045 = "Seleziona/Tocca per le Informazioni Richieste sull'Iscrizione";
$entry_info_text_046 = "Se il nome di uno stile è un collegamento ipertestuale, ha requisiti di iscrizione specifici. Seleziona o tocca il nome per visualizzare i requisiti della sottocategoria.";


/**
 * ------------------------------------------------------------------------
 * My Account Entry List
 * ------------------------------------------------------------------------
 */
$brewer_entries_text_000 = "C'è un problema noto con la stampa dal browser Firefox.";
$brewer_entries_text_001 = "Hai iscrizioni non confermate.";
$brewer_entries_text_002 = "Per ogni iscrizione qui sotto con un'icona  <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, seleziona l'icona <span class=\"fa fa-lg fa-pencil text-primary\"></span> per rivedere e confermare tutti i dati della tua iscrizione. Le iscrizioni non confermate potrebbero essere eliminate dal sistema senza preavviso.";
$brewer_entries_text_003 = "NON PUOI pagare le tue iscrizioni finché tutte le iscrizioni non sono confermate.";
$brewer_entries_text_004 = "Hai iscrizioni che richiedono di definire un tipo specifico, ingredienti speciali, stile classico, forza e/o colore.";
$brewer_entries_text_005 = "Per ogni iscrizione qui sotto con un'icona <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, seleziona l'icona <span class=\"fa fa-lg fa-pencil text-primary\"></span> per inserire le informazioni richieste. Le iscrizioni senza un tipo specifico, ingredienti speciali, stile classico, forza e/o colore nelle categorie che li richiedono potrebbero essere eliminate dal sistema senza preavviso.";
$brewer_entries_text_006 = "Scarica le schede di valutazione dei giudici per";
$brewer_entries_text_007 = "Stile NON Inserito";
$brewer_entries_text_008 = "Modulo di Iscrizione e";
$brewer_entries_text_009 = "Etichette Bottiglia";
$brewer_entries_text_010 = "Stampa Modulo Ricetta per";
$brewer_entries_text_011 = "Inoltre, non potrai aggiungere un'altra iscrizione poiché è stato raggiunto il limite di iscrizioni per la competizione. Seleziona Annulla in questa finestra e poi modifica l'iscrizione se desideri mantenerla.";
$brewer_entries_text_012 = "Sei sicuro di voler eliminare l'iscrizione chiamata";
$brewer_entries_text_013 = "Potrai aggiungere iscrizioni il o dopo il";
$brewer_entries_text_014 = "Non hai aggiunto alcuna iscrizione al sistema.";
$brewer_entries_text_015 = "Non puoi eliminare la tua iscrizione in questo momento.";

/**
 * ------------------------------------------------------------------------
 * Past Winners
 * ------------------------------------------------------------------------
 */
$past_winners_text_000 = "Visualizza i vincitori passati:";

/**
 * ------------------------------------------------------------------------
 * Pay for Entries
 * ------------------------------------------------------------------------
 */
$pay_text_000 = "Poiché le scadenze per la registrazione degli account, la registrazione delle iscrizioni, la spedizione e la consegna sono tutte passate, i pagamenti non vengono più accettati.";
$pay_text_001 = "Contatta un funzionario della competizione se hai domande.";
$pay_text_002 = "le seguenti sono le tue opzioni per pagare le tue quote di iscrizione.";
$pay_text_003 = "Le quote sono";
$pay_text_004 = "per iscrizione";
$pay_text_005 = "per iscrizione dopo il";
$pay_text_006 = "per iscrizioni illimitate";
$pay_text_007 = "Le tue quote sono state scontate a";
$pay_text_008 = "Il totale delle tue quote di iscrizione è";
$pay_text_009 = "Devi pagare";
$pay_text_010 = "Le tue quote sono state contrassegnate come pagate. Grazie!";
$pay_text_011 = "Attualmente hai";
$pay_text_012 = "confermate non pagate";
$pay_text_013 = "Allega un assegno per l'intero importo dell'iscrizione a una delle tue bottiglie. Gli assegni devono essere intestati a";
$pay_text_014 = "La copia del tuo assegno o l'assegno incassato è la tua ricevuta di iscrizione.";
$pay_text_015 = "Allega il pagamento in contanti per l'intero importo dell'iscrizione in una <em>busta sigillata</em> a una delle tue bottiglie.";
$pay_text_016 = "Le tue schede di valutazione restituite serviranno come ricevuta di iscrizione.";
$pay_text_017 = "La tua email di conferma del pagamento è la tua ricevuta di iscrizione. Includi una copia con le tue iscrizioni come prova di pagamento.";
$pay_text_018 = "Seleziona il pulsante <em>Paga con PayPal</em> qui sotto per pagare online.";
$pay_text_019 = "Si prega di notare che una commissione di transazione di";
$pay_text_020 = "sarà aggiunta al tuo totale.";
$pay_text_021 = "Per assicurarti che il tuo pagamento PayPal sia contrassegnato come <strong>pagato</strong> su <strong>questo sito</strong>, assicurati di selezionare il link <em>Ritorna a...</em> nella schermata di conferma di PayPal <strong>dopo</strong> aver inviato il tuo pagamento. Inoltre, assicurati di stampare la ricevuta di pagamento e allegarla a una delle tue bottiglie di iscrizione.";
$pay_text_022 = "Assicurati di Selezionare <em>Ritorna a...</em> Dopo Aver Pagato le Tue Quote";
$pay_text_023 = "Inserisci il codice fornito dagli organizzatori della competizione per una quota di iscrizione scontata.";
$pay_text_024 = $pay_text_010;
$pay_text_025 = "Non hai ancora registrato alcuna iscrizione.";
$pay_text_026 = "Non puoi pagare le tue iscrizioni perché una o più delle tue iscrizioni non sono confermate.";
$pay_text_027 = "Seleziona <em>Il Mio Account</em> sopra per rivedere le tue iscrizioni non confermate.";
$pay_text_028 = "Hai iscrizioni non confermate che <em>non</em> sono riflesse nei totali delle tue quote qui sotto.";
$pay_text_029 = "Per favore vai al tuo elenco di iscrizioni per confermare tutti i dati delle tue iscrizioni. Le iscrizioni non confermate potrebbero essere eliminate dal sistema senza preavviso.";
/**
 * ------------------------------------------------------------------------
 * QR Code Check-in
 * ------------------------------------------------------------------------
 */
// Ignore the next four lines
if (strpos($view, "^") !== FALSE) {
	$qr_text_019 = sprintf("%06d",$checked_in_numbers[0]);
	if (is_numeric($checked_in_numbers[1])) $qr_text_020 = sprintf("%06d",$checked_in_numbers[1]);
	else $qr_text_020 = $checked_in_numbers[1];
}

$qr_text_000 = $alert_text_080;
$qr_text_001 = $alert_text_081;

// Begin translations here
if (strpos($view, "^") !== FALSE) $qr_text_002 = sprintf("Numero di iscrizione <span class=\"text-danger\">%s</span> convalidato con <span class=\"text-danger\">%s</span> come numero di valutazione.",$qr_text_019,$qr_text_020); else $qr_text_002 = "";
$qr_text_003 = "Se questo numero di valutazione <em>non</em> è corretto, <strong>scansiona nuovamente il codice e reinserisci il numero di valutazione corretto.";
if (strpos($view, "^") !== FALSE) $qr_text_004 = sprintf("Numero di iscrizione %s convalidato in .",$qr_text_019); else $qr_text_004 = "";
if (strpos($view, "^") !== FALSE) $qr_text_005 = sprintf("Numero di iscrizione %s non trovato nel db. Metti le bottiglie da parte e avverti gli organizzatori.",$qr_text_019); else $qr_text_005 = "";
if (strpos($view, "^") !== FALSE) $qr_text_006 = sprintf("Il numero di valutazione - %s - è già assegnato al numero di iscrizione %s.",$qr_text_020,$qr_text_019); else $qr_text_006 = "";
$qr_text_007 = "Registrazione Iscrizioni tramite Codice QR";
$qr_text_008 = "Per registrare le iscrizioni tramite codice QR, fornisci la password corretta. Dovrai fornire la password solo una volta per sessione - assicurati di mantenere aperta l'app di scansione del codice QR.";
$qr_text_009 = "Assegna un numero di valutazione e/o numero di scatola all'iscrizione";
$qr_text_010 = "Inserisci un numero di valutazione SOLO se la tua competizione sta utilizzando etichette con numeri di valutazione durante lo smistamento.";
$qr_text_011 = "Sei numeri con zeri iniziali - ad esempio, 000021.";
$qr_text_012 = "Assicurati di controllare due volte il tuo input e di applicare le appropriate etichette con i numeri di valutazione su ogni bottiglia e sull'etichetta della bottiglia (se applicabile).";
$qr_text_013 = "I numeri di valutazione devono essere di sei caratteri e non possono includere il carattere ^.";
$qr_text_014 = "In attesa dell'input del codice QR scansionato.";
$qr_text_016 = "Hai bisogno di un'app per la scansione di codici QR? Cerca su <a class=\"hide-loader\" href=\"https://play.google.com/store/search?q=qr%20code%20scanner&c=apps&hl=en\" target=\"_blank\">Google Play</a> (Android) or <a class=\"hide-loader\" href=\"https://itunes.apple.com/store/\" target=\"_blank\">iTunes</a> (iOS).";


/**
 * ------------------------------------------------------------------------
 * Registration
 * ------------------------------------------------------------------------
 */
$register_text_000 = "Il volontario è ";
$register_text_001 = "Sei ";
$register_text_002 = "La registrazione è chiusa.";
$register_text_003 = "Grazie per il tuo interesse.";
$register_text_004 = "Le informazioni che fornisci oltre al tuo nome, cognome e club sono strettamente per scopi di registrazione e contatto.";
$register_text_005 = "Una condizione per partecipare alla competizione è fornire queste informazioni. Il tuo nome e club potrebbero essere visualizzati se una delle tue iscrizioni si piazza, ma nessun'altra informazione sarà resa pubblica.";
$register_text_006 = "Promemoria: Puoi iscriverti solo a una regione e una volta registrato in una sede, NON potrai cambiarla.";
$register_text_007 = "Rapida";
$register_text_008 = "Registra";
$register_text_009 = "un Giudice";
$register_text_010 = "un Partecipante";
$register_text_011 = "Per registrarti, crea il tuo account compilando i campi sottostanti.";
$register_text_012 = "Aggiungi rapidamente un partecipante al pool di giudici/steward della competizione. Verranno utilizzati un indirizzo e un numero di telefono fittizi e verrà assegnata una password predefinita <em>bcoem</em> a ciascun partecipante aggiunto tramite questa schermata.";
$register_text_013 = "L'iscrizione a questa competizione si svolge completamente online.";
$register_text_014 = "Per aggiungere le tue iscrizioni e/o indicare che sei disposto a fare il giudice o lo steward (i giudici e gli steward possono anche aggiungere iscrizioni), dovrai creare un account sul nostro sistema.";
$register_text_015 = "Il tuo indirizzo email sarà il tuo nome utente e sarà utilizzato come mezzo di diffusione delle informazioni dallo staff della competizione. Assicurati che sia corretto.";
$register_text_016 = "Una volta registrato, puoi procedere con il processo di iscrizione.";
$register_text_017 = "Ad ogni iscrizione che aggiungi verrà automaticamente assegnato un numero dal sistema.";
$register_text_018 = "Scegline una. Questa domanda sarà utilizzata per verificare la tua identità nel caso dimenticassi la password.";
$register_text_019 = "Per favore fornisci un indirizzo email.";
$register_text_020 = "Gli indirizzi email che hai inserito non corrispondono.";
$register_text_021 = "Gli indirizzi email fungono da nomi utente.";
$register_text_022 = "Per favore fornisci una password.";
$register_text_023 = "Per favore fornisci una risposta alla tua domanda di sicurezza.";
$register_text_024 = "Fai in modo che la tua risposta di sicurezza sia qualcosa che solo tu ricorderai facilmente!";
$register_text_025 = "Per favore fornisci un nome.";
$register_text_026 = "Per favore fornisci un cognome.";
$register_text_027 = "uno Steward";
$register_text_028 = "Per favore fornisci un indirizzo.";
$register_text_029 = "Per favore fornisci una città.";
$register_text_030 = "Per favore fornisci uno stato o una provincia.";
$register_text_031 = "Per favore fornisci un codice postale.";
$register_text_032 = "Per favore fornisci un numero di telefono principale.";
$register_text_033 = "Solo i membri dell'American Homebrewers Association sono idonei per un'opportunità Great American Beer Festival Pro-Am.";
$register_text_034 = "Per registrarti, devi selezionare la casella, indicando che accetti la dichiarazione di rinuncia.";

/**
 * ------------------------------------------------------------------------
 * Sidebar
 * ------------------------------------------------------------------------
 */
$sidebar_text_000 = "Registrazioni per giudici o steward accettate";
$sidebar_text_001 = "Registrazioni per steward accettate";
$sidebar_text_002 = "Registrazioni per giudici";
$sidebar_text_003 = "Le registrazioni non sono più accettate. Il limite di giudici e steward è stato raggiunto.";
$sidebar_text_004 = "fino al";
$sidebar_text_005 = "Registrazioni account accettate";
$sidebar_text_006 = "è Aperta solo per Giudici o Steward";
$sidebar_text_007 = "è Aperta solo per Steward";
$sidebar_text_008 = "è Aperta solo per Giudici";
$sidebar_text_009 = "Registrazioni iscrizioni accettate";
$sidebar_text_010 = "Il limite di iscrizioni pagate della competizione è stato raggiunto.";
$sidebar_text_011 = "Il limite di iscrizioni della competizione è stato raggiunto.";
$sidebar_text_012 = "Vedi il tuo elenco di iscrizioni.";
$sidebar_text_013 = "Seleziona qui per pagare le tue quote.";
$sidebar_text_014 = "Le quote di iscrizione non includono le iscrizioni non confermate.";
$sidebar_text_015 = "Hai iscrizioni non confermate - è necessaria un'azione per confermare.";
$sidebar_text_016 = "Vedi il tuo elenco di iscrizioni.";
$sidebar_text_017 = "Hai";
$sidebar_text_018 = "rimasti prima di raggiungere il limite di";
$sidebar_text_019 = "per partecipante";
$sidebar_text_020 = "Hai raggiunto il limite di";
$sidebar_text_021 = "in questa competizione";
$sidebar_text_022 = "Bottiglie di iscrizione accettate presso";
$sidebar_text_023 = "la sede di spedizione";
$sidebar_text_024 = "Le date di valutazione della competizione devono ancora essere determinate. Per favore controlla più tardi.";
$sidebar_text_025 = "sono state aggiunte al sistema al";

/**
 * ------------------------------------------------------------------------
 * Styles
 * ------------------------------------------------------------------------
 */
$styles_entry_text_07C = "Il partecipante deve specificare se l'iscrizione è una Munich Kellerbier (chiara, basata su Helles) o una Franconian Kellerbier (ambrata, basata su Marzen). Il partecipante può specificare un altro tipo di Kellerbier basato su altri stili di base come Pils, Bock, Schwarzbier, ma dovrebbe fornire una descrizione dello stile per i giudici.";
$styles_entry_text_09A = "Il partecipante deve specificare se l'iscrizione è una variante chiara o scura.";
$styles_entry_text_10C = "Il partecipante deve specificare se l'iscrizione è una variante chiara o scura.";
$styles_entry_text_21B = "Il partecipante deve specificare una forza (session: 3.0-5.0%, standard: 5.0-7.5%, doppia: 7.5-9.5%); se non viene specificata una forza, si presumerà standard. Il partecipante deve specificare il tipo specifico di Specialty IPA dalla lista di tipi noti elencati nelle Linee Guida dello Stile, o come modificato dal sito web BJCP; oppure il partecipante deve descrivere il tipo di Specialty IPA e le sue caratteristiche chiave sotto forma di commento in modo che i giudici sappiano cosa aspettarsi. I partecipanti possono specificare le varietà di luppolo utilizzate, se ritengono che i giudici potrebbero non riconoscere le caratteristiche varietali dei luppoli più nuovi. I partecipanti possono specificare una combinazione di tipi di IPA definiti (es. Black Rye IPA) senza fornire descrizioni aggiuntive. I partecipanti possono utilizzare questa categoria per una versione di forza diversa di una IPA definita dalla propria sottocategoria BJCP (es. IPA americana o inglese di forza session) - tranne dove esiste già una sottocategoria BJCP per quello stile (es. IPA [americana] doppia). Tipi attualmente definiti: Black IPA, Brown IPA, White IPA, Rye IPA, Belgian IPA, Red IPA.";
$styles_entry_text_23F = "Il tipo di frutta utilizzata deve essere specificato. Il birraio deve dichiarare un livello di carbonazione (basso, medio, alto) e un livello di dolcezza (basso/nessuno, medio, alto).";
$styles_entry_text_24C = "Il partecipante deve specificare bière de garde bionda, ambrata o bruna. Se non viene specificato alcun colore, il giudice dovrebbe tentare di giudicare basandosi sull'osservazione iniziale, aspettandosi un sapore di malto e un equilibrio che corrisponda al colore.";
$styles_entry_text_25B = "Il partecipante deve specificare la forza (table, standard, super) e il colore (chiaro, scuro).";
$styles_entry_text_27A = "Il partecipante deve specificare uno stile con una descrizione fornita dal BJCP, o fornire una descrizione simile per i giudici di uno stile diverso. Se una birra viene iscritta con solo un nome di stile e nessuna descrizione, è molto improbabile che i giudici capiscano come giudicarla. Esempi attualmente definiti: Gose, Piwo Grodziskie, Lichtenhainer, Roggenbier, Sahti, Kentucky Common, Pre-Prohibition Lager, Pre-Prohibition Porter, London Brown Ale.";
$styles_entry_text_28A = "Il partecipante deve specificare uno stile di birra di base (stile BJCP classico, o una famiglia di stili generica) o fornire una descrizione degli ingredienti/specifiche/carattere desiderato. Il partecipante deve specificare se è stata condotta una fermentazione 100% Brett. Il partecipante può specificare il ceppo/i di Brettanomyces utilizzato, insieme a una breve descrizione del suo carattere.";
$styles_entry_text_28B = "Il partecipante deve specificare una descrizione della birra, identificando il lievito/batteri utilizzati e uno stile di base o gli ingredienti/specifiche/carattere target della birra.";
$styles_entry_text_28C = "Il partecipante deve specificare il tipo di frutta, spezia, erba o legno utilizzato. Il partecipante deve specificare una descrizione della birra, identificando il lievito/batteri utilizzati e uno stile di base o gli ingredienti/specifiche/carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_29A = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di frutta utilizzata. Le birre alla frutta acide che non sono lambic dovrebbero essere iscritte nella categoria American Wild Ale.";
$styles_entry_text_29B = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di frutta e spezie, erbe o verdure (SEV) utilizzate; gli ingredienti SEV individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (es. spezie per torta di mele).";
$styles_entry_text_29C = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di frutta utilizzata. Il partecipante deve specificare il tipo di zucchero fermentabile aggiuntivo o il processo speciale impiegato.";
$styles_entry_text_30A = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di spezie, erbe o verdure utilizzate; gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (es. spezie per torta di mele).";
$styles_entry_text_30B = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di spezie, erbe o verdure utilizzate; gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (es. spezie per torta di zucca). La birra deve contenere spezie e può contenere verdure e/o zuccheri.";
$styles_entry_text_30C = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di spezie, zuccheri, frutti o fermentabili aggiuntivi utilizzati; gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (es. spezie per vin brulé).";
$styles_entry_text_31A = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di cereale alternativo utilizzato.";
$styles_entry_text_31B = "Il partecipante deve specificare uno stile di base; lo stile dichiarato non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di zucchero utilizzato.";
$styles_entry_text_32A = "Il partecipante deve specificare uno stile di base Classico. Il partecipante deve specificare il tipo di legno o fumo se è percepibile un carattere di fumo varietale.";
$styles_entry_text_32B = "Il partecipante deve specificare uno stile di birra di base; la birra di base non deve necessariamente essere uno Stile Classico. Il partecipante deve specificare il tipo di legno o fumo se è percepibile un carattere di fumo varietale. Il partecipante deve specificare gli ingredienti aggiuntivi o i processi che rendono questa una birra affumicata speciale.";
$styles_entry_text_33A = "Il partecipante deve specificare il tipo di legno utilizzato e il livello di carbonizzazione (se carbonizzato). Il partecipante deve specificare lo stile di base; lo stile di base può essere sia uno stile BJCP classico (cioè, una sottocategoria nominata) o può essere un tipo generico di birra (es. porter, brown ale). Se è stato utilizzato un legno insolito, il partecipante deve fornire una breve descrizione degli aspetti sensoriali che il legno aggiunge alla birra.";
$styles_entry_text_33B = "Il partecipante deve specificare il carattere alcolico aggiuntivo, con informazioni sulla botte se rilevanti per il profilo di sapore finale. Il partecipante deve specificare lo stile di base; lo stile di base può essere sia uno stile BJCP classico (cioè, una sottocategoria nominata) o può essere un tipo generico di birra (es. porter, brown ale). Se è stato utilizzato un legno o un ingrediente insolito, il partecipante deve fornire una breve descrizione degli aspetti sensoriali che l'ingrediente aggiunge alla birra.";
$styles_entry_text_34A = "Il partecipante deve specificare il nome della birra commerciale che sta clonando, le specifiche (statistiche vitali) della birra, e una breve descrizione sensoriale o un elenco degli ingredienti utilizzati nella produzione della birra. Senza queste informazioni, i giudici che non conoscono la birra non avranno una base per il confronto.";
$styles_entry_text_34B = "Il partecipante deve specificare gli stili che vengono miscelati. Il partecipante può fornire una descrizione aggiuntiva del profilo sensoriale della birra o le statistiche vitali della birra risultante.";
$styles_entry_text_34C = "Il partecipante deve specificare la natura speciale della birra sperimentale, inclusi gli ingredienti speciali o i processi che la rendono non adatta altrove nelle linee guida. Il partecipante deve fornire le statistiche vitali della birra, e una breve descrizione sensoriale o un elenco degli ingredienti utilizzati nella produzione della birra. Senza queste informazioni, i giudici non avranno una base per il confronto.";
$styles_entry_text_M1A = "Istruzioni per l'iscrizione: I partecipanti devono specificare il livello di carbonazione e la forza. La dolcezza si presume sia SECCA in questa categoria. I partecipanti possono specificare le varietà di miele.";
$styles_entry_text_M1B = "I partecipanti devono specificare il livello di carbonazione e la forza. La dolcezza si presume sia SEMI-DOLCE in questa categoria. I partecipanti POSSONO specificare le varietà di miele.";
$styles_entry_text_M1C = "I partecipanti DEVONO specificare il livello di carbonazione e la forza. La dolcezza si presume sia DOLCE in questa categoria. I partecipanti POSSONO specificare le varietà di miele.";
$styles_entry_text_M2A = "I partecipanti devono specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti possono specificare le varietà di miele. I partecipanti possono specificare le varietà di mela utilizzate; se specificate, ci si aspetterà un carattere varietale. I prodotti con una proporzione relativamente bassa di miele sono meglio iscritti come Sidro Speciale. Un cyser speziato dovrebbe essere iscritto come Idromele alla Frutta e Spezie. Un cyser con altra frutta dovrebbe essere iscritto come Melomel. Un cyser con ingredienti aggiuntivi dovrebbe essere iscritto come Idromele Sperimentale.";
$styles_entry_text_M2B = "I partecipanti devono specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti possono specificare le varietà di miele. I partecipanti possono specificare le varietà di uva utilizzate; se specificate, ci si aspetterà un carattere varietale. Un pyment speziato (hippocras) dovrebbe essere iscritto come Idromele alla Frutta e Spezie. Un pyment fatto con altra frutta dovrebbe essere iscritto come Melomel. Un pyment con altri ingredienti dovrebbe essere iscritto come Idromele Sperimentale.";
$styles_entry_text_M2C = "I partecipanti devono specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti possono specificare le varietà di miele. I partecipanti devono specificare le varietà di frutta utilizzate. Un idromele fatto sia con bacche che con frutta non a bacca (incluse mele e uva) dovrebbe essere iscritto come Melomel. Un idromele di bacche speziato dovrebbe essere iscritto come Idromele alla Frutta e Spezie. Un idromele di bacche contenente altri ingredienti dovrebbe essere iscritto come Idromele Sperimentale.";
$styles_entry_text_M2D = "I partecipanti devono specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti possono specificare le varietà di miele. I partecipanti devono specificare le varietà di frutta utilizzate. Un idromele di frutta a nocciolo speziato dovrebbe essere iscritto come Idromele alla Frutta e Spezie. Un idromele di frutta a nocciolo che contiene frutta non a nocciolo dovrebbe essere iscritto come Melomel. Un idromele di frutta a nocciolo che contiene altri ingredienti dovrebbe essere iscritto come Idromele Sperimentale.";
$styles_entry_text_M2E = "I partecipanti devono specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti possono specificare le varietà di miele. I partecipanti devono specificare le varietà di frutta utilizzate. Un melomel speziato dovrebbe essere iscritto come Idromele alla Frutta e Spezie. Un melomel contenente altri ingredienti dovrebbe essere iscritto come Idromele Sperimentale. I melomel fatti con mele o uva come unica fonte di frutta dovrebbero essere iscritti rispettivamente come Cyser e Pyment. I melomel con mele o uva, più altra frutta dovrebbero essere iscritti in questa categoria, non come Sperimentale.";
$styles_entry_text_M3A = "I partecipanti devono specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti possono specificare le varietà di miele. I partecipanti devono specificare i tipi di spezie utilizzate (anche se miscele di spezie ben note possono essere indicate con il nome comune, come spezie per torta di mele). I partecipanti devono specificare i tipi di frutta utilizzati. Se vengono utilizzate solo combinazioni di spezie, iscrivere come Idromele alle Spezie, Erbe o Verdure. Se vengono utilizzate solo combinazioni di frutta, iscrivere come Melomel. Se vengono utilizzati altri tipi di ingredienti, iscrivere come Idromele Sperimentale.";
$styles_entry_text_M3B = "I partecipanti DEVONO specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti POSSONO specificare le varietà di miele. I partecipanti DEVONO specificare i tipi di spezie utilizzate (anche se miscele di spezie ben note possono essere indicate con il nome comune, come spezie per torta di mele).";
$styles_entry_text_M4A = "I partecipanti DEVONO specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti POSSONO specificare le varietà di miele. I partecipanti POSSONO specificare lo stile di base della birra o i tipi di malto utilizzati. I prodotti con una proporzione relativamente bassa di miele dovrebbero essere iscritti nella categoria Birra Speziata come Birra al Miele.";
$styles_entry_text_M4B = "I partecipanti DEVONO specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti POSSONO specificare le varietà di miele. I partecipanti DEVONO specificare la natura speciale dell'idromele, fornendo una descrizione dell'idromele per i giudici se non è disponibile una tale descrizione dal BJCP.";
$styles_entry_text_M4C = "I partecipanti DEVONO specificare il livello di carbonazione, la forza e la dolcezza. I partecipanti POSSONO specificare le varietà di miele. I partecipanti DEVONO specificare la natura speciale dell'idromele, se si tratta di una combinazione di stili esistenti, un idromele sperimentale o qualche altra creazione. Qualsiasi ingrediente speciale che conferisca un carattere identificabile PUÒ essere dichiarato.";
$styles_entry_text_C1E = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 categorie). I partecipanti DEVONO dichiarare la varietà di pera/e utilizzata/e.";
$styles_entry_text_C2A = "I partecipanti DEVONO specificare se il sidro è stato fermentato o invecchiato in botte. I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 livelli).";
$styles_entry_text_C2B = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 categorie). I partecipanti DEVONO specificare tutti i frutti e/o succhi di frutta aggiunti.";
$styles_entry_text_C2C = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 livelli).";
$styles_entry_text_C2D = "I partecipanti DEVONO specificare la densità iniziale, la densità finale o lo zucchero residuo, e il livello alcolico. I partecipanti DEVONO specificare il livello di carbonazione (3 livelli).";
$styles_entry_text_C2E = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 categorie). I partecipanti DEVONO specificare tutti i botanici aggiunti. Se vengono utilizzati luppoli, il partecipante deve specificare la/e varietà utilizzata/e.";
$styles_entry_text_C2F = "I partecipanti DEVONO specificare tutti gli ingredienti. I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 categorie).";

/**
 * ------------------------------------------------------------------------
 * User Edit Email
 * ------------------------------------------------------------------------
 */
$user_text_000 = "È richiesto un nuovo indirizzo email e deve essere in forma valida.";
$user_text_001 = "Inserisci la vecchia password.";
$user_text_002 = "Inserisci la nuova password.";
$user_text_003 = "Seleziona questa casella se desideri procedere con la modifica del tuo indirizzo email.";

/**
 * ------------------------------------------------------------------------
 * Volunteers
 * ------------------------------------------------------------------------
 */
$volunteers_text_000 = "Se ti sei registrato,";
$volunteers_text_001 = "e poi scegli <em>Modifica Account</em> dal menu Il Mio Account indicato dall'icona";
$volunteers_text_002 = "nel menu in alto";
$volunteers_text_003 = "e";
$volunteers_text_004 = "Se <em>non</em> ti sei registrato e sei disposto a fare il giudice o lo steward, per favore registrati";
$volunteers_text_005 = "Dato che ti sei già registrato,";
$volunteers_text_006 = "accedi al tuo account";
$volunteers_text_007 = "per vedere se ti sei offerto volontario come giudice o steward";
$volunteers_text_008 = "Se sei disposto a fare il giudice o lo steward, per favore torna a registrarti il o dopo il";
$volunteers_text_009 = "Se desideri offriti volontario come membro dello staff della competizione, per favore registrati o aggiorna il tuo account per indicare che desideri far parte dello staff della competizione.";
$volunteers_text_010 = "";

/**
 * ------------------------------------------------------------------------
 * Login
 * ------------------------------------------------------------------------
 */
$login_text_000 = "Hai già effettuato l'accesso.";
$login_text_001 = "Non c'è alcun indirizzo email nel sistema che corrisponde a quello che hai inserito.";
$login_text_002 = "Vuoi riprovare?";
$login_text_003 = "Hai già registrato il tuo account?";
$login_text_004 = "Hai dimenticato la password?";
$login_text_005 = "Reimpostala";
$login_text_006 = "Per reimpostare la tua password, inserisci l'indirizzo email che hai usato quando ti sei registrato.";
$login_text_007 = "Verifica";
$login_text_008 = "Generata casualmente.";
$login_text_009 = "<strong>Non disponibile.</strong> Il tuo account è stato creato da un amministratore e la tua &quot;risposta segreta&quot; è stata generata casualmente. Per favore contatta un amministratore del sito per recuperare o cambiare la tua password.";
$login_text_010 = "Oppure, usa l'opzione email qui sotto.";
$login_text_011 = "La tua domanda di sicurezza è...";
$login_text_012 = "Se non hai ricevuto l'email,";
$login_text_013 = "Ti verrà inviata un'email con la tua domanda e risposta di verifica. Assicurati di controllare la tua cartella SPAM.";
$login_text_014 = "seleziona qui per reinviarla a";
$login_text_015 = "Se non riesci a ricordare la risposta alla tua domanda di sicurezza, contatta un funzionario della competizione o un amministratore del sito.";
$login_text_016 = "Falla inviare via email a";
/**
 * ------------------------------------------------------------------------
 * Winners
 * ------------------------------------------------------------------------
 */
$winners_text_000 = "Non sono stati inseriti vincitori per questa tabella. Per favore controlla più tardi.";
$winners_text_001 = "Le iscrizioni vincenti non sono ancora state pubblicate. Per favore controlla più tardi.";
$winners_text_002 = "La struttura dei premi scelta è di assegnare i posti per tabella. Seleziona i posti premiati per l'intera tabella qui sotto.";
$winners_text_003 = "La struttura dei premi scelta è di assegnare i posti per categoria. Seleziona i posti premiati per ogni categoria generale qui sotto (potrebbero essercene più di una in questa tabella).";
$winners_text_004 = "La struttura dei premi scelta è di assegnare i posti per sottocategoria. Seleziona i posti premiati per ogni sottocategoria qui sotto (potrebbero essercene più di una in questa tabella).";

/**
 * ------------------------------------------------------------------------
 * Output
 * ------------------------------------------------------------------------
 */
$output_text_000 = "Grazie per aver partecipato alla nostra competizione";
$output_text_001 = "Di seguito trovi un riepilogo delle tue iscrizioni, punteggi e piazzamenti.";
$output_text_002 = "Riepilogo per";
$output_text_003 = "iscrizioni sono state valutate";
$output_text_004 = "Non è stato possibile generare correttamente le tue schede di valutazione. Per favore contatta gli organizzatori della competizione.";
$output_text_005 = "Non sono state definite assegnazioni di giudici/steward";
$output_text_006 = "per questa sede";
$output_text_007 = "Se desideri stampare schede tavolo vuote, chiudi questa finestra e scegli <em>Stampa Schede Tavolo: Tutti i Tavoli</em> dal menu <em>Reportistica</em>.";
$output_text_008 = "Per favore assicurati di controllare se il tuo ID Giudice BJCP è corretto. Se non lo è, o se ne hai uno e non è elencato, per favore inseriscilo nel modulo.";
$output_text_009 = "Se il tuo nome non è nell'elenco qui sotto, registrati sui fogli allegati.";
$output_text_010 = "Per ricevere credito per la valutazione, assicurati di inserire il tuo ID Giudice BJCP correttamente e in modo leggibile.";
$output_text_011 = "Non sono state fatte assegnazioni.";
$output_text_012 = "Totale iscrizioni in questa sede";
$output_text_013 = "Nessun partecipante ha fornito note agli organizzatori.";
$output_text_014 = "Di seguito sono riportate le note agli organizzatori inserite dai giudici o dagli steward.";
$output_text_015 = "Nessun partecipante ha fornito note agli organizzatori.";
$output_text_016 = "Inventario Iscrizioni Post-Valutazione";
$output_text_017 = "Se non ci sono iscrizioni mostrate qui sotto, i flight a questo tavolo non sono stati assegnati ai turni.";
$output_text_018 = "Se mancano iscrizioni, non tutte le iscrizioni sono state assegnate a un flight o turno OPPURE sono state assegnate a un turno diverso.";
$output_text_019 = "Se non ci sono iscrizioni qui sotto, questo tavolo non è stato assegnato a un turno.";
$output_text_020 = "Nessuna iscrizione è idonea.";
$output_text_021 = "Foglio Riassuntivo Numero Iscrizione / Numero Valutazione";
$output_text_022 = "I punti in questo report sono derivati dai Requisiti Ufficiali per Competizioni Sanzionate BJCP, disponibili su";
$output_text_023 = "include Best of Show";
$output_text_024 = "Report Punti BJCP";
$output_text_025 = "Totale Punti Staff Disponibili";
$output_text_026 = "Gli stili in questa categoria non sono accettati in questa competizione.";
$output_text_027 = "link alle Linee Guida degli Stili del BJCP";

/**
 * ------------------------------------------------------------------------
 * Maintenance
 * ------------------------------------------------------------------------
 */
$maintenance_text_000 = "L'amministratore del sito ha messo il sito offline per manutenzione.";
$maintenance_text_001 = "Per favore ricontrolla più tardi.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.10-2.1.13 Additions
 * ------------------------------------------------------------------------
 */
$label_entry_numbers = "Numero/i Iscrizione"; // For PayPal IPN Email
$label_status = "Stato"; // For PayPal IPN Email
$label_transaction_id = "ID Transazione"; // For PayPal IPN Email
$label_organization = "Organizzazione";
$label_ttb = "Numero TTB";
$label_username = "Nome utente";
$label_from = "Da"; // For email headers
$label_to = "A"; // For email headers
$label_varies = "Varia";
$label_styles_accepted = "Stili Accettati";
$label_judging_styles = "Stili di Valutazione";
$label_select_club = "Seleziona o Cerca il Tuo Club";
$label_select_style = "Seleziona o Cerca lo Stile della Tua Iscrizione";
$label_select_country = "Seleziona o Cerca il Tuo Paese";
$label_select_dropoff = "Seleziona il Metodo di Consegna della Tua Iscrizione";
$label_club_enter = "Inserisci il Nome del Club";
$label_secret_05 = "Qual è il cognome da nubile di tua nonna materna?";
$label_secret_06 = "Qual era il nome del tuo primo fidanzato o fidanzata?";
$label_secret_07 = "Qual era la marca e il modello del tuo primo veicolo?";
$label_secret_08 = "Qual era il cognome del tuo insegnante di terza elementare?";
$label_secret_09 = "In quale città o paese hai incontrato il tuo partner?";
$label_secret_10 = "Qual era il nome del tuo migliore amico in prima media?";
$label_secret_11 = "Qual è il nome del tuo artista o gruppo musicale preferito?";
$label_secret_12 = "Qual era il tuo soprannome da bambino?";
$label_secret_13 = "Qual è il cognome dell'insegnante che ti ha dato il tuo primo voto insufficiente?";
$label_secret_14 = "Qual è il nome del tuo amico d'infanzia preferito?";
$label_secret_15 = "In quale città o paese si sono incontrati tua madre e tuo padre?";
$label_secret_16 = "Qual era il numero di telefono della tua infanzia che ricordi meglio, incluso il prefisso?";
$label_secret_17 = "Qual era il tuo posto preferito da visitare da bambino?";
$label_secret_18 = "Dove eri quando hai dato il tuo primo bacio?";
$label_secret_19 = "In quale città o paese era il tuo primo lavoro?";
$label_secret_20 = "In quale città o paese eri a Capodanno del 2000?";
$label_secret_21 = "Qual è il nome di un'università a cui hai fatto domanda ma non hai frequentato?";
$label_secret_22 = "Qual è il nome del ragazzo o della ragazza che hai baciato per primo?";
$label_secret_23 = "Qual era il nome del tuo primo peluche, bambola o action figure?";
$label_secret_24 = "In quale città o paese hai incontrato tuo marito/moglie/partner?";
$label_secret_25 = "In quale strada vivevi in prima elementare?";
$label_secret_26 = "Qual è la velocità di volo di una rondine non carica?";
$label_secret_27 = "Qual è il nome del tuo programma TV cancellato preferito?";
$label_pro = "Professionista";
$label_amateur = "Amatoriale";
$label_hosted = "Ospitato";
$label_edition = "Edizione";
$label_pro_comp_edition = "Edizione Competizione Professionisti";
$label_amateur_comp_edition = "Edizione Competizione Amatori";
$label_optional_info = "Informazioni Opzionali";
$label_or = "Oppure";
$label_admin_payments = "Pagamenti";
$label_payer = "Pagatore";
$label_pay_with_paypal = "Paga con PayPal";
$label_submit = "Invia";
$label_id_verification_question = "Domanda di Verifica ID";
$label_id_verification_answer = "Risposta di Verifica ID";
$label_server = "Server";
$label_password_reset = "Reimpostazione Password";
$label_id_verification_request = "Richiesta di Verifica ID";
$label_new_password = "Nuova Password";
$label_confirm_password = "Conferma Password";
$label_with_token = "Con Token";
$label_password_strength = "Forza della Password";
$label_entry_shipping = "Spedizione Iscrizione";
$label_jump_to = "Vai a...";
$label_top = "Inizio";
$label_bjcp_cider = "Giudice di Sidro Certificato";
$header_text_112 = "Non hai privilegi di accesso sufficienti per eseguire questa azione.";
$header_text_113 = "Puoi modificare solo le informazioni del tuo account.";
$header_text_114 = "Come amministratore, puoi modificare le informazioni dell'account di un utente tramite Admin > Iscrizioni e Partecipanti > Gestisci Partecipanti.";
$header_text_115 = "I risultati sono pubblicati.";
$header_text_116 = "Se non ricevi l'email entro un tempo ragionevole, controlla la cartella SPAM del tuo account email. Se non è lì, contatta un funzionario della competizione o un amministratore del sito per reimpostare la tua password per te.";
$alert_text_082 = "Poiché ti sei registrato come giudice o steward, non ti è permesso aggiungere iscrizioni al tuo account. Solo i rappresentanti di un'organizzazione possono aggiungere iscrizioni ai loro account.";
$alert_text_083 = "L'aggiunta e la modifica delle iscrizioni non sono disponibili.";
$alert_text_084 = "Come Amministratore, puoi aggiungere un'iscrizione all'account di un'organizzazione utilizzando il menu a tendina &quot;Aggiungi Iscrizione Per...&quot; nella pagina Admin > Iscrizioni e Partecipanti > Gestisci Iscrizioni.";
$alert_text_085 = "Non potrai stampare alcun documento di iscrizione (etichette bottiglia, ecc.) finché il pagamento non sarà stato confermato e non sarà stato contrassegnato come &quot;pagato&quot; qui sotto.";
$brew_text_027 = "Questo stile della Brewers Association richiede una dichiarazione del birraio riguardo la natura speciale del prodotto. Vedi le <a href=\"https://www.brewersassociation.org/resources/brewers-association-beer-style-guidelines/\" target=\"_blank\"> per indicazioni specifiche.";
$brew_text_028 = "NON RICHIESTO Aggiungi qui informazioni che sono dettagliate nelle linee guida dello stile come una caratteristica che PUOI dichiarare.";
$brew_text_029 = "Modifica admin disabilitata. Il tuo profilo è considerato un profilo personale e non un profilo organizzativo, e quindi non idoneo ad aggiungere iscrizioni. Per aggiungere un'iscrizione per un'organizzazione, accedi all'elenco Gestisci Iscrizioni e scegli un'organizzazione dal menu a tendina &quot;Aggiungi un'Iscrizione Per...&quot;.";
$brew_text_030 = "latte / lattosio";
$brew_text_031 = "uova";
$brew_text_032 = "pesce";
$brew_text_033 = "crostacei";
$brew_text_034 = "frutta a guscio";
$brew_text_035 = "arachidi";
$brew_text_036 = "grano";
$brew_text_037 = "soia";
$brew_text_038 = "Questa iscrizione contiene possibili allergeni alimentari? Gli allergeni alimentari comuni includono latte (incluso lattosio), uova, pesce, crostacei, frutta a guscio, arachidi, grano, soia, ecc. Per stili non di birra, specifica il glutine come allergene se una fonte fermentabile può contenerlo (es. malto d'orzo, grano o segale) o se è stato utilizzato lievito di birra.";
$brew_text_039 = "Per favore specifica tutti i possibili allergeni";
$brewer_text_022 = "Potrai identificare un co-birraio quando aggiungerai le tue iscrizioni.";
$brewer_text_023 = "Seleziona &quot;Nessuno&quot; se non sei affiliato a un club. Seleziona &quot;Altro&quot; se il tuo club non è nella lista - <strong>assicurati di usare la casella di ricerca</strong>.";
$brewer_text_024 = "Per favore fornisci il tuo nome.";
$brewer_text_025 = "Per favore fornisci il tuo cognome.";
$brewer_text_026 = "Per favore fornisci il tuo numero di telefono.";
$brewer_text_027 = "Per favore fornisci il tuo indirizzo.";
$brewer_text_028 = "Per favore fornisci la tua città.";
$brewer_text_029 = "Per favore fornisci il tuo stato o provincia.";
$brewer_text_030 = "Per favore fornisci il tuo CAP.";
$brewer_text_031 = "Per favore scegli il tuo paese.";
$brewer_text_032 = "Per favore fornisci il nome della tua organizzazione.";
$brewer_text_033 = "Per favore scegli una domanda di sicurezza.";
$brewer_text_034 = "Per favore fornisci una risposta alla tua domanda di sicurezza.";
$brewer_text_035 = "Hai superato l'esame BJCP per Giudice di Sidro?";
$entry_info_text_047 = "Se il nome di uno stile è un collegamento ipertestuale, ha requisiti di iscrizione specifici. Seleziona o tocca il nome per accedere agli stili della Brewers Association come elencati sul loro sito web.";
$brewer_entries_text_016 = "Stile Inserito NON Accettato";
$brewer_entries_text_017 = "Le iscrizioni non saranno visualizzate come ricevute finché lo staff della competizione non le avrà contrassegnate come tali nel sistema. Tipicamente, questo avviene DOPO che tutte le iscrizioni sono state raccolte da tutti i punti di consegna e spedizione e ordinate.";
$brewer_entries_text_018 = "Non potrai stampare i documenti di questa iscrizione (etichette bottiglia, ecc.) finché non sarà stata contrassegnata come pagata.";
$brewer_entries_text_019 = "La stampa dei documenti di iscrizione non è disponibile in questo momento.";
$brewer_entries_text_020 = "La modifica di questa iscrizione non è disponibile. Questo può essere dovuto a diversi fattori (ad esempio, la scadenza per le modifiche è passata o la tua iscrizione è già stata contrassegnata come ricevuta, ecc.). Se desideri modificare questa iscrizione, contatta un funzionario della competizione.";
if (SINGLE) $brewer_info_000 = "Ciao";
else $brewer_info_000 = "Grazie per partecipare al";
$brewer_info_001 = "I dettagli del tuo account sono stati aggiornati l'ultima volta";
$brewer_info_002 = "Prenditi un momento per <a href=\"#entries\">rivedere le tue iscrizioni</a>";
$brewer_info_003 = "paga le tue quote di iscrizione</a>";
$brewer_info_004 = "per iscrizione";
$brewer_info_005 = "È richiesta l'iscrizione all'American Homebrewers Association (AHA) se una delle tue iscrizioni viene selezionata per un Great American Beer Festival Pro-Am.";
$brewer_info_006 = "Stampa le etichette di spedizione da attaccare alle tue scatole di bottiglie.";
$brewer_info_007 = "Stampa Etichette di Spedizione";
$brewer_info_008 = "Sei già stato assegnato a un tavolo come";
$brewer_info_009 = "Se desideri modificare la tua disponibilità e/o ritirare il tuo ruolo, contatta l'organizzatore della competizione o il coordinatore dei giudici.";
$brewer_info_010 = "Sei già stato assegnato come";
$brewer_info_011 = "o";
$brewer_info_012 = "Stampa le etichette delle tue schede di valutazione ";
$pay_text_030 = "Selezionando il pulsante &quot;Ho Capito&quot; qui sotto, sarai indirizzato a PayPal per effettuare il pagamento. Una volta <strong>completato</strong> il pagamento, PayPal ti reindirizzerà a questo sito e ti invierà via email una ricevuta della transazione. <strong>Se il tuo pagamento è andato a buon fine, il tuo stato di pagamento verrà aggiornato automaticamente. Nota che potrebbe essere necessario attendere alcuni minuti per l'aggiornamento dello stato del pagamento.</strong> Assicurati di aggiornare la pagina di pagamento o accedere al tuo elenco di iscrizioni.";
$pay_text_031 = "Stai per Lasciare questo Sito";
$pay_text_032 = "Non è necessario alcun pagamento. Grazie!";
$pay_text_033 = "Hai iscrizioni non pagate. Seleziona o tocca per pagare le tue iscrizioni.";
$register_text_035 = "Le informazioni che fornisci oltre al nome della tua organizzazione sono strettamente per scopi di registrazione e contatto.";
$register_text_036 = "Una condizione per partecipare alla competizione è fornire queste informazioni, inclusi l'indirizzo email e il numero di telefono di una persona di contatto. Il nome della tua organizzazione potrebbe essere visualizzato se una delle tue iscrizioni si piazza, ma nessun'altra informazione sarà resa pubblica.";
$register_text_037 = "Conferma di Registrazione";
$register_text_038 = "Un amministratore ti ha registrato per un account. Di seguito trovi la conferma delle informazioni inserite:";
$register_text_039 = "Grazie per aver registrato un account. Di seguito trovi la conferma delle informazioni che hai fornito:";
$register_text_040 = "Se alcune delle informazioni sopra riportate non sono corrette,";
$register_text_041 = "accedi al tuo account";
$register_text_042 = "e apporta le modifiche necessarie. Buona fortuna nella competizione!";
$register_text_043 = "Si prega di non rispondere a questa email in quanto è generata automaticamente. L'account di origine non è attivo o monitorato.";
$register_text_044 = "Si prega di fornire il nome dell'organizzazione.";
$register_text_045 = "Fornisci il nome del birrificio, brewpub, ecc. Assicurati di controllare le informazioni sulla competizione per i tipi di bevande accettate.";
$register_text_046 = "Solo per organizzazioni statunitensi.";
$user_text_004 = "Assicurati di utilizzare lettere maiuscole e minuscole, numeri e caratteri speciali per una password più forte.";
$user_text_005 = "Il tuo indirizzo email attuale è";
$login_text_017 = "Inviami via Email la Risposta alla Mia Domanda di Sicurezza";
$login_text_018 = "Il tuo nome utente (indirizzo email) è obbligatorio.";
$login_text_019 = "La tua password è obbligatoria.";
$login_text_020 = "Il token fornito non è valido o è già stato utilizzato. Si prega di utilizzare nuovamente la funzione password dimenticata per generare un nuovo token di reimpostazione della password.";
$login_text_021 = "Il token fornito è scaduto. Si prega di utilizzare nuovamente la funzione password dimenticata per generare un nuovo token di reimpostazione della password.";
$login_text_022 = "L'email inserita non è associata al token fornito. Si prega di riprovare.";
$login_text_023 = "Le password non corrispondono. Si prega di riprovare.";
$login_text_024 = "È richiesta una password di conferma.";
$login_text_025 = "Hai dimenticato la password?";
$login_text_026 = "Inserisci l'indirizzo email del tuo account e la nuova password qui sotto.";
$login_text_027 = "La tua password è stata reimpostata con successo. Ora puoi accedere con la nuova password.";
$winners_text_005 = "I vincitori del Best of Show non sono ancora stati pubblicati. Si prega di controllare più tardi.";
$paypal_response_text_000 = "Il tuo pagamento è stato completato. I dettagli della transazione sono forniti qui per tua comodità.";
$paypal_response_text_001 = "Si prega di notare che riceverai una comunicazione ufficiale da PayPal all'indirizzo email indicato di seguito.";
$paypal_response_text_002 = "Buona fortuna nella competizione!";
$paypal_response_text_003 = "Si prega di non rispondere a questa email in quanto è generata automaticamente. L'account di origine non è attivo o monitorato.";
$paypal_response_text_004 = "PayPal ha elaborato la tua transazione.";
$paypal_response_text_005 = "Lo stato del tuo pagamento PayPal è:";
$paypal_response_text_006 = "La risposta di PayPal è stata &quot;non valida&quot;. Si prega di provare a effettuare nuovamente il pagamento.";
$paypal_response_text_007 = "Si prega di contattare l'organizzatore della competizione per qualsiasi domanda.";
$paypal_response_text_008 = "Pagamento PayPal Non Valido";
$paypal_response_text_009 = "Pagamento PayPal";
$pwd_email_reset_text_000 = "È stata fatta una richiesta per verificare l'account sul";
$pwd_email_reset_text_001 = "sito web utilizzando la funzione di email di Verifica ID. Se non hai avviato questa procedura, contatta l'organizzatore della competizione.";
$pwd_email_reset_text_002 = "La risposta di verifica ID è sensibile alle maiuscole/minuscole";
$pwd_email_reset_text_003 = "È stata fatta una richiesta per cambiare la tua password sul";
$pwd_email_reset_text_004 = "sito web. Se non hai avviato questa procedura, non preoccuparti. La tua password non può essere reimpostata senza il link qui sotto.";
$pwd_email_reset_text_005 = "Per reimpostare la tua password, seleziona il link qui sotto o copialo/incollalo nel tuo browser.";
$best_brewer_text_000 = "birrai partecipanti";
$best_brewer_text_001 = "MO";
$best_brewer_text_002 = "I punteggi e i criteri di spareggio sono stati applicati in conformità con la <a href=\"#\" data-toggle=\"modal\" data-target=\"#scoreMethod\">metodologia di punteggio</a>. I numeri riflessi sono arrotondati al centesimo. Passa il mouse sopra o tocca l'icona del punto interrogativo (<span class=\"fa fa-question-circle\"></span>) per il valore calcolato effettivo.";
$best_brewer_text_003 = "Metodologia di Punteggio";
$best_brewer_text_004 = "Ad ogni iscrizione piazzata vengono assegnati i seguenti punti:";
$best_brewer_text_005 = "I seguenti criteri di spareggio sono stati applicati, in ordine di priorità:";
$best_brewer_text_006 = "Il numero totale più alto di primi, secondi e terzi posti.";
$best_brewer_text_007 = "Il numero totale più alto di primi, secondi, terzi, quarti (se applicabile) e menzioni d'onore.";
$best_brewer_text_008 = "Il numero più alto di primi posti.";
$best_brewer_text_009 = "Il numero più basso di iscrizioni.";
$best_brewer_text_010 = "Il punteggio minimo più alto.";
$best_brewer_text_011 = "Il punteggio massimo più alto.";
$best_brewer_text_012 = "Il punteggio medio più alto.";
$best_brewer_text_013 = "Non utilizzato.";
$best_brewer_text_014 = "club partecipanti";
$dropoff_qualifier_text_001 = "Si prega di prestare attenzione alle note fornite per ogni punto di consegna. Potrebbero esserci scadenze anticipate per alcuni punti di consegna elencati, orari particolari in cui le iscrizioni sono accettate, determinate persone a cui lasciare le iscrizioni, ecc. <strong class=\"text-danger\">Tutti i partecipanti sono responsabili della lettura delle informazioni fornite dagli organizzatori per ogni punto di consegna.</strong>";
$brewer_text_036 = "Poiché hai scelto \"<em>Altro</em>\", assicurati che il club che hai inserito non sia presente nella nostra lista in una forma simile.";
$brewer_text_037 = "Ad esempio, potresti aver inserito l'acronimo del tuo club invece del nome completo.";
$brewer_text_038 = "Nomi di club coerenti tra gli utenti sono essenziali per i calcoli del \"Miglior Club\" se implementati per questa competizione.";
$brewer_text_039 = "Il club che hai inserito in precedenza non corrisponde a uno nella nostra lista.";
$brewer_text_040 = "Si prega di scegliere dalla lista o selezionare <em>Altro</em> e inserire il nome del tuo club.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.13 Additions
 * ------------------------------------------------------------------------
 */
$entry_info_text_048 = "Per garantire una corretta valutazione, il partecipante deve fornire informazioni aggiuntive sulla bevanda.";
$entry_info_text_049 = "Per garantire una corretta valutazione, il partecipante deve fornire il livello di forza della bevanda.";
$entry_info_text_050 = "Per garantire una corretta valutazione, il partecipante deve fornire il livello di carbonazione della bevanda.";
$entry_info_text_051 = "Per garantire una corretta valutazione, il partecipante deve fornire il livello di dolcezza della bevanda.";
$entry_info_text_052 = "Se si partecipa a questa categoria, il partecipante deve fornire ulteriori informazioni affinché l'iscrizione possa essere valutata accuratamente. Più informazioni si forniscono, meglio è.";
$output_text_028 = "Le seguenti iscrizioni hanno possibili allergeni - come indicato dai partecipanti.";
$output_text_029 = "Nessun partecipante ha fornito informazioni sugli allergeni per le proprie iscrizioni.";
$label_this_style = "Questo Stile";
$label_notes = "Note";
$label_possible_allergens = "Possibili Allergeni";
$label_please_choose = "Per Favore Scegli";
$label_mead_cider_info = "Informazioni Idromele/Sidro";


/**
 * ------------------------------------------------------------------------
 * Version 2.1.14 Additions
 * ------------------------------------------------------------------------
 */
$label_winners = "Vincitori";
$label_unconfirmed_entries = "Iscrizioni Non Confermate";
$label_recipe = "Ricetta";
$label_view = "Visualizza";
$label_number_bottles = "Numero di Bottiglie Richieste Per Iscrizione";
$label_pro_am = "Pro-Am";
$pay_text_034 = "Il limite di iscrizioni pagate è stato raggiunto - non vengono accettati ulteriori pagamenti per le iscrizioni.";
$bottle_labels_000 = "Le etichette non possono essere generate in questo momento.";
$bottle_labels_001 = "Assicurati di controllare le regole di accettazione delle iscrizioni alla competizione per le linee guida specifiche sull'applicazione delle etichette prima di inviare!";
$bottle_labels_002 = "Tipicamente, si usa nastro adesivo trasparente per attaccare l'etichetta al corpo di ogni iscrizione - coprire completamente l'etichetta.";
$bottle_labels_003 = "Tipicamente, si usa un elastico per attaccare le etichette a ogni iscrizione.";
if (isset($_SESSION['jPrefsBottleNum'])) $bottle_labels_004 = "Vengono fornite 4 etichette per cortesia. Questa competizione richiede ".$_SESSION['jPrefsBottleNum']." bottiglie per iscrizione. Potrebbe essere necessario stampare più pagine a seconda del numero di bottiglie richieste.";
else $bottle_labels_004 = "Vengono fornite 4 etichette per cortesia. Scarta le etichette in eccesso.";
$bottle_labels_005 = "Se mancano degli elementi, chiudi questa finestra e modifica l'iscrizione. Potrebbe essere necessario stampare più pagine a seconda del numero di bottiglie richieste.";
$bottle_labels_006 = "Spazio riservato all'uso dello staff della competizione.";
$bottle_labels_007 = "QUESTO MODULO DI RICETTA È SOLO PER I TUOI REGISTRI - per favore NON includere una copia con la spedizione della tua iscrizione.";
$brew_text_040 = "Non c'è bisogno di specificare il glutine come allergene per qualsiasi stile di birra; si presume che sarà presente. Le birre senza glutine dovrebbero essere iscritte nella categoria Birra Senza Glutine (BA) o nella categoria Birra con Cereali Alternativi (BJCP).";
$brewer_text_041 = "Hai già ricevuto un'opportunità Pro-Am per competere nella prossima Competizione Pro-Am del Great American Beer Festival?";
$brewer_text_042 = "Se hai già ricevuto un Pro-Am, o sei stato nello staff di produzione di qualsiasi birrificio, per favore indicalo qui. Questo aiuterà lo staff della competizione e i rappresentanti dei birrifici Pro-Am (se applicabile per questa competizione) a scegliere le iscrizioni Pro-Am da birrai che non ne hanno ancora ottenuto uno.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.15 Additions
 * ------------------------------------------------------------------------
 */
$label_submitting = "Submitting";
$label_additional_info = "Entries with Additional Info";
$label_working = "Working";
$output_text_030 = "Please stand by.";
$brewer_entries_text_021 = "Check the entries to print their bottle/can labels. Select the top checkbox to check or uncheck all the boxes in the column.";
$brewer_entries_text_022 = "Print Labels for All Entries Checked Above";
$brewer_entries_text_023 = "The labels will open in a new tab or window.";
$brewer_entries_text_024 = "Print Selected Entry Labels";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.18 Additions
 * ------------------------------------------------------------------------
 */
$output_text_031 = "Press Esc to hide.";
$styles_entry_text_21X = "Entrant MUST specify a strength (session: 3.0-5.0%, standard: 5.0-7.5%, double: 7.5-9.5%).";
$styles_entry_text_PRX4 = "Entrant must specify the types of fresh fruit(s) used.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.19 Additions
 * ------------------------------------------------------------------------
 */
$output_text_032 = "Entry count only reflects entrants who indicated a location in their account profile. The actual number of entries may be higher or lower.";
$brewer_text_043 = "Or, are you, or have you ever been, employed on the brewing staff at any brewery? This includes brewer positions as well as lab technicians, cellar crew, bottling/canning crew, etc. Current and former brewing staff employees are not eligible to participate in the Great American Beer Festival Pro-Am competition.";
$label_entrant_reg = "Entrant Registration";
$sidebar_text_026 = "are in the system as of";
$label_paid_entries = "Paid Entries";

/**
 * ------------------------------------------------------------------------
 * Version 2.2.0 Additions
 * ------------------------------------------------------------------------
 */
$alert_text_086 = "Internet Explorer non è supportato da BCOE&M - le funzionalità non verranno visualizzate correttamente e la tua esperienza non sarà ottimale. Per favore aggiorna a un browser più recente.";
$alert_text_087 = "Per un'esperienza ottimale e affinché tutte le funzionalità vengano eseguite correttamente, abilita JavaScript per continuare a utilizzare questo sito. Altrimenti, si verificheranno comportamenti imprevisti.";
$alert_text_088 = "La Presentazione dei Premi sarà disponibile pubblicamente dopo la pubblicazione dei risultati.";
$alert_text_089 = "I dati archiviati non sono disponibili.";
$brewer_entries_text_025 = "Visualizza o Stampa le schede di valutazione dei giudici";
$brewer_info_013 = "Sei stato assegnato come giudice.";
$brewer_info_014 = "Accedi alla Dashboard di Valutazione usando il pulsante qui sotto per inserire le valutazioni delle iscrizioni assegnate a te.";
$contact_text_004 = "Gli organizzatori della competizione non hanno specificato alcun contatto.";
$label_thank_you = "Grazie";
$label_congrats_winners = "Congratulazioni a Tutti i Vincitori di Medaglie";
$label_placing_entries = "Iscrizioni Piazzate";
$label_by_the_numbers = "In Numeri";
$label_launch_pres = "Avvia Presentazione Premi";
$label_entrants = "Partecipanti";
$label_judging_dashboard = "Dashboard di Valutazione";
$label_table_assignments = "Assegnazioni ai Tavoli";
$label_table = "Tavolo";
$label_edit = "Modifica";
$label_add = "Aggiungi";
$label_disabled = "Disabilitato";
$label_judging_scoresheet = "Scheda di Valutazione";
$label_checklist_version = "Versione Checklist";
$label_classic_version = "Versione Classica";
$label_structured_version = "Versione Strutturata";
$label_submit_evaluation = "Invia Valutazione";
$label_edit_evaluation = "Modifica Valutazione";
$label_your_score = "Il Tuo Punteggio";
$label_your_assigned_score = "Il Tuo Punteggio di Consenso Inserito";
$label_assigned_score = "Punteggio di Consenso";
$label_accepted_score = "Punteggio Ufficiale Accettato";
$label_recorded_scores = "Punteggi di Consenso Inseriti";
$label_go = "Vai";
$label_go_back = "Torna Indietro";
$label_na = "N/D";
$label_evals_submitted = "Valutazioni Inviate";
$label_evaluations = "Valutazioni Iscrizioni";
$label_submitted_by = "Inviato Da";
$label_attention = "Attenzione!";
$label_unassigned_eval = "Valutazioni Non Assegnate";
$label_head_judge = "Giudice Capo";
$label_lead_judge = "Giudice Principale";
$label_mini_bos_judge = "Giudice Mini-BOS";
$label_view_my_eval = "Visualizza La Mia Valutazione";
$label_view_other_judge_eval = "Visualizza Valutazione Altro Giudice";
$label_place_awarded = "Posizione Assegnata";
$label_honorable_mention = "Menzione d'Onore";
$label_places_awarded_table = "Posizioni Assegnate a questo Tavolo";
$label_places_awarded_duplicate = "Posizioni Duplicate Assegnate a questo Tavolo";
$evaluation_info_000 = "Il gruppo di iscrizioni per ciascuno dei tavoli e dei flight che ti sono stati assegnati è dettagliato di seguito.";
$evaluation_info_001 = "Questa competizione sta impiegando la valutazione in coda. Se c'è più di una coppia di giudici al tuo tavolo, valuta la prossima iscrizione nella coda stabilita.";
$evaluation_info_002 = "Per garantire una competizione accurata e fluida, tu e il tuo partner giudice dovreste valutare SOLO le iscrizioni al vostro tavolo che non sono ancora state valutate. Consulta l'organizzatore o il coordinatore dei giudici se hai domande.";
$evaluation_info_003 = "In attesa dell'accettazione finale da parte di un amministratore del sito.";
$evaluation_info_004 = "Il tuo punteggio di consenso è stato inserito.";
$evaluation_info_005 = "Questa iscrizione <strong>non fa</strong> parte del tuo flight assegnato.";
$evaluation_info_006 = "Modifica secondo necessità.";
$evaluation_info_007 = "Per registrare una valutazione, scegli tra le seguenti iscrizioni con un pulsante blu \"Aggiungi\".";
$evaluation_info_008 = "Per registrare la tua valutazione, seleziona il pulsante Aggiungi corrispondente a un'iscrizione. Sono disponibili solo i tavoli per le sessioni di valutazione passate e attuali.";
$evaluation_info_009 = "Sei stato assegnato come giudice, ma non sei stato assegnato a nessun tavolo o flight nel sistema. Per favore verifica con l'organizzatore o il coordinatore dei giudici.";
$evaluation_info_010 = "Questa iscrizione fa parte del tuo flight assegnato.";
$evaluation_info_011 = "Aggiungi una valutazione per un'iscrizione non assegnata a te.";
$evaluation_info_012 = "Usa solo quando ti viene chiesto di valutare un'iscrizione che non ti è stata assegnata nel sistema.";
$evaluation_info_013 = "Iscrizione non trovata.";
$evaluation_info_014 = "Per favore verifica il numero di iscrizione di sei caratteri e riprova.";
$evaluation_info_015 = "Assicurati che il numero sia lungo 6 cifre.";
$evaluation_info_016 = "Nessuna valutazione è stata inviata.";
$evaluation_info_017 = "I punteggi di consenso inseriti dai giudici non corrispondono.";
$evaluation_info_018 = "È necessaria una verifica per le seguenti iscrizioni:";
$evaluation_info_019 = "Le seguenti iscrizioni hanno solo una valutazione inviata:";
$evaluation_info_020 = "Il tuo Pannello di Valutazione sarà disponibile";
$evaluation_info_021 = "per aggiungere valutazioni per le iscrizioni assegnate a te";
$evaluation_info_022 = "La valutazione e l'invio delle valutazioni sono chiusi.";
$evaluation_info_023 = "Se hai domande, contatta l'organizzatore della competizione o il coordinatore dei giudici.";
$evaluation_info_024 = "Sei stato assegnato ai seguenti tavoli. <strong>Gli elenchi delle iscrizioni per ogni tavolo saranno mostrati solo per le sessioni di valutazione <u>passate</u> e <u>attuali</u>.</strong>";
$evaluation_info_025 = "Giudici assegnati a questo tavolo:";
$evaluation_info_026 = "Tutti i punteggi di consenso inseriti dai giudici corrispondono.";
$evaluation_info_027 = "Iscrizioni che hai completato, o che un amministratore ha inserito per tuo conto, che non ti erano state assegnate nel sistema.";
$evaluation_info_028 = "La sessione di valutazione è terminata.";
$evaluation_info_029 = "Sono state assegnate posizioni duplicate ai seguenti tavoli:";
$evaluation_info_030 = "Gli amministratori dovranno inserire eventuali iscrizioni piazzate rimanenti.";
$evaluation_info_031 = "valutazioni sono state aggiunte dai giudici";
$evaluation_info_032 = "Valutazioni multiple per una singola iscrizione sono state inviate da un giudice.";
$evaluation_info_033 = "Sebbene sia un evento insolito, una valutazione duplicata può essere inviata a causa di problemi di connettività, ecc. Una singola valutazione registrata per ogni giudice dovrebbe essere ufficialmente accettata - tutte le altre dovrebbero essere eliminate per evitare confusione ai partecipanti.";
$evaluation_info_034 = "Quando valuti stili di tipo speciale, usa questa riga per commentare le caratteristiche uniche di esso, come frutta, spezie, fermentabili, acidità, ecc.";
$evaluation_info_035 = "Fornisci commenti sullo stile, la ricetta, il processo e il piacere nel bere. Includi suggerimenti utili al birraio.";
if (isset($_SESSION['jPrefsScoreDispMax'])) $evaluation_info_036 = "Uno o più punteggi dei giudici sono fuori dall'intervallo di punteggio accettabile. L'intervallo accettabile è di ".$_SESSION['jPrefsScoreDispMax']. " punti o meno.";
$evaluation_info_037 = "Tutti i flight a questo tavolo sembrano essere completi.";
$evaluation_info_038 = "Come Giudice Capo, è tua responsabilità verificare che i punteggi di consenso di ogni iscrizione corrispondano, assicurarti che tutti i punteggi dei giudici per ogni iscrizione rientrino nell'intervallo appropriato e assegnare le posizioni alle iscrizioni designate.";
$evaluation_info_039 = "Iscrizioni a questo tavolo:";
$evaluation_info_040 = "Iscrizioni valutate a questo tavolo:";
$evaluation_info_041 = "Iscrizioni valutate nel tuo flight:";
$evaluation_info_042 = "Le tue iscrizioni valutate:";
$evaluation_info_043 = "Giudici con valutazioni a questo tavolo:";
$label_submitted = "Inviato";
$label_ordinal_position = "Posizione Ordinale nel Flight";
$label_alcoholic = "Alcolico";
$descr_alcoholic = "L'aroma, il sapore e l'effetto riscaldante dell'etanolo e degli alcoli superiori. A volte descritto come \"caldo\".";
$descr_alcoholic_mead = "L'effetto dell'etanolo. Riscaldante. Caldo.";
$label_metallic = "Metallico";
$descr_metallic = "Sapore di latta, moneta, rame, ferro o sangue.";
$label_oxidized = "Ossidato";
$descr_oxidized = "Qualsiasi combinazione di aromi e sapori stantii, vinosi, di cartone, di carta o simili allo sherry. Stantio.";
$descr_oxidized_cider = "Stantio, l'aroma/sapore di sherry, uva passa o frutta ammaccata.";
$label_phenolic = "Fenolico";
$descr_phenolic = "Speziato (chiodi di garofano, pepe), affumicato, plastica, cerotto adesivo in plastica e/o medicinale (clorofenolico).";
$label_vegetal = "Vegetale";
$descr_vegetal = "Aroma e sapore di verdura cotta, in scatola o marcia (cavolo, cipolla, sedano, asparagi, ecc.).";
$label_astringent = "Astringente";
$descr_astringent = "Sensazione di contrazione, asprezza persistente e/o secchezza nel finale/retrogusto; granulosità aspra; gusto di buccia.";
$descr_astringent_cider = "Una sensazione di secchezza in bocca simile a masticare una bustina di tè. Deve essere in equilibrio se presente.";
$label_acetaldehyde = "Acetaldeide";
$descr_acetaldehyde = "Aroma e sapore simile alla mela verde.";
$label_diacetyl = "Diacetile";
$descr_diacetyl = "Aroma e sapore artificiale di burro, butterscotch o toffee. A volte percepito come una sensazione untuosa sulla lingua.";
$descr_diacetyl_cider = "Aroma o sapore di burro o butterscotch.";
$label_dms = "DMS (Dimetil Solfuro)";
$descr_dms = "A bassi livelli, un aroma e sapore dolce, di mais cotto o in scatola.";
$label_estery = "Esteroso";
$descr_estery = "Aroma e/o sapore di qualsiasi estere (frutti, aromi di frutta o rose).";
$label_grassy = "Erbaceo";
$descr_grassy = "Aroma/sapore di erba appena tagliata o foglie verdi.";
$label_light_struck = "Colpito dalla Luce";
$descr_light_struck = "Simile all'aroma di una puzzola.";
$label_musty = "Muffa";
$descr_musty = "Aromi/sapori stantii, ammuffiti o di muffa.";
$label_solvent = "Solvente";
$descr_solvent = "Aromi e sapori di alcoli superiori (alcoli fuselici). Simili agli aromi di acetone o diluente per lacca.";
$label_sour_acidic = "Acido";
$descr_sour_acidic = "Acidità nell'aroma e nel sapore. Può essere netta e pulita (acido lattico) o simile all'aceto (acido acetico).";
$label_sulfur = "Zolfo";
$descr_sulfur = "L'aroma di uova marce o fiammiferi che bruciano.";
$label_sulfury = "Sulfureo";
$label_yeasty = "Lievitoso";
$descr_yeasty = "Un aroma o sapore di pane, sulfureo o simile al lievito.";
$label_acetified = "Acetificato (Acidità Volatile, VA)";
$descr_acetified = "Acetato di etile (solvente, smalto per unghie) o acido acetico (aceto, aspro in fondo alla gola).";
$label_acidic = "Acido";
$descr_acidic = "Sapore aspro-acido. Tipicamente da uno di diversi acidi: malico, lattico o citrico. Deve essere in equilibrio.";
$descr_acidic_mead = "Sapore/aroma acido pulito da basso pH. Tipicamente da uno di diversi acidi: malico, lattico, gluconico o citrico.";
$label_bitter = "Amaro";
$descr_bitter = "Un gusto aspro che è sgradevole a livelli più alti.";
$label_farmyard = "Fattoria";
$descr_farmyard = "Simile al letame (mucca o maiale) o alla stalla (stalla di cavalli in una giornata calda).";
$label_fruity = "Fruttato";
$descr_fruity = "L'aroma e il sapore di frutti freschi che possono essere appropriati in alcuni stili e non in altri.";
$descr_fruity_mead = "Esteri di sapore e aroma spesso derivati dai frutti in un melomel. Banana e ananas sono spesso difetti.";
$label_mousy = "Topo";
$descr_mousy = "Gusto che evoca l'odore della tana/gabbia di un roditore.";
$label_oaky = "Legnoso";
$descr_oaky = "Un gusto o aroma dovuto a un periodo prolungato in una botte o su trucioli di legno. \"Carattere di botte.\"";
$label_oily_ropy = "Oleoso/Viscoso";
$descr_oily_ropy = "Una lucentezza nell'aspetto visivo, come un carattere viscoso sgradevole che procede verso un carattere filante.";
$label_spicy_smoky = "Speziato/Affumicato";
$descr_spicy_smoky = "Spezie, chiodi di garofano, affumicato, prosciutto.";
$label_sulfide = "Solfuro";
$descr_sulfide = "Uova marce, da problemi di fermentazione.";
$label_sulfite = "Solfito";
$descr_sulfite = "Fiammiferi che bruciano, da eccessiva/recente solfitazione.";
$label_sweet = "Dolce";
$descr_sweet = "Gusto base dello zucchero. Deve essere in equilibrio se presente.";
$label_thin = "Sottile";
$descr_thin = "Watery. Mancanza di corpo o \"sostanza.\"";
$label_acetic = "Acetico";
$descr_acetic = "Acetoso, acido acetico, pungente.";
$label_chemical = "Chimico";
$descr_chemical = "Sapore di vitamina, nutriente o chimico.";
$label_cloying = "Stucchevole";
$descr_cloying = "Sciropposo, eccessivamente dolce, non bilanciato da acido/tannino.";
$label_floral = "Floreale";
$descr_floral = "L'aroma di fiori in fiore o profumo.";
$label_moldy = "Ammuffito";
$descr_moldy = "Aromi/sapori stantii, muffiti, ammuffiti o di tappo.";
$label_tannic = "Tannico";
$descr_tannic = "Sensazione in bocca astringente e secca, simile al sapore amaro. Gusto di tè forte non zuccherato o di masticare una buccia d'uva.";
$label_waxy = "Ceroso";
$descr_waxy = "Simile alla cera, sego, grasso.";
$label_medicinal = "Medicinale";
$label_spicy = "Speziato";
$label_vinegary = "Acetoso";
$label_plastic = "Plastica";
$label_smoky = "Affumicato";
$label_inappropriate = "Inappropriato";
$label_possible_points = "Punti Possibili";
$label_malt = "Malto";
$label_ferm_char = "Carattere di Fermentazione";
$label_body = "Corpo";
$label_creaminess = "Cremosità";
$label_astringency = "Astringenza";
$label_warmth = "Calore";
$label_appearance = "Aspetto";
$label_flavor = "Sapore";
$label_mouthfeel = "Sensazione in Bocca";
$label_overall_impression = "Impressione Generale";
$label_balance = "Equilibrio";
$label_finish_aftertaste = "Finale/Retrogusto";
$label_hoppy = "Luppolato";
$label_malty = "Maltato";
$label_comments = "Commenti";
$label_flaws = "Difetti per lo Stile";
$label_flaw = "Difetto";
$label_flawless = "Senza Difetti";
$label_significant_flaws = "Difetti Significativi";
$label_classic_example = "Esempio Classico";
$label_not_style = "Non in Stile";
$label_tech_merit = "Merito Tecnico";
$label_style_accuracy = "Accuratezza Stilistica";
$label_intangibles = "Intangibili";
$label_wonderful = "Meraviglioso";
$label_lifeless = "Senza Vita";
$label_feedback = "Feedback";
$label_honey = "Miele";
$label_alcohol = "Alcol";
$label_complexity = "Complessità";
$label_viscous = "Viscoso";
$label_legs = "Archetti"; // Usato per descrivere il liquido che aderisce al bicchiere
$label_clarity = "Limpidezza";
$label_brilliant = "Brillante";
$label_hazy = "Velato";
$label_opaque = "Opaco";
$label_fruit = "Frutta";
$label_acidity = "Acidità";
$label_tannin = "Tannino";
$label_white = "Bianco";
$label_straw = "Paglierino";
$label_yellow = "Giallo";
$label_gold = "Oro";
$label_copper = "Rame";
$label_quick = "Rapido";
$label_long_lasting = "Persistente";
$label_ivory = "Avorio";
$label_beige = "Beige";
$label_tan = "Abbronzato";
$label_lacing = "Merletto";
$label_particulate = "Particolato";
$label_black = "Nero";
$label_large = "Grande";
$label_small = "Piccolo";
$label_size = "Dimensione";
$label_retention = "Ritenzione";
$label_head = "Schiuma";
$label_head_size = "Dimensione della Schiuma";
$label_head_retention = "Ritenzione della Schiuma";
$label_head_color = "Colore della Schiuma";
$label_brettanomyces = "Brettanomyces";
$label_cardboard = "Cartone";
$label_cloudy = "Torbido";
$label_sherry = "Sherry";
$label_harsh = "Aspro";
$label_harshness = "Asprezza";
$label_full = "Pieno";
$label_suggested = "Suggerito";
$label_lactic = "Lattico";
$label_smoke = "Fumo";
$label_spice = "Spezia";
$label_vinous = "Vinoso";
$label_wood = "Legno";
$label_cream = "Crema";
$label_flat = "Piatto";
$label_descriptor_defs = "Definizioni dei Descrittori";
$label_outstanding = "Eccezionale";
$descr_outstanding = "Esempio di stile di livello mondiale.";
$label_excellent = "Eccellente";
$descr_excellent = "Esemplifica bene lo stile, richiede piccole messe a punto.";
$label_very_good = "Molto Buono";
$descr_very_good = "Generalmente entro i parametri dello stile, alcuni difetti minori.";
$label_good = "Buono";
$descr_good = "Manca il bersaglio sullo stile e/o difetti minori.";
$label_fair = "Discreto";
$descr_fair = "Sapori/aromi fuori posto o grandi carenze di stile. Sgradevole.";
$label_problematic = "Problematico";
$descr_problematic = "Sapori e aromi fuori posto dominanti. Difficile da bere.";
/**
 * ------------------------------------------------------------------------
 * Version 2.3.0 Additions
 * ------------------------------------------------------------------------
 */
$winners_text_006 = "Si prega di notare: i risultati di questa tabella potrebbero essere incompleti a causa di informazioni insufficienti sulle iscrizioni o sugli stili.";
$label_elapsed_time = "Tempo Trascorso";
$label_judge_score = "Punteggio/i del Giudice";
$label_judge_consensus_scores = "Punteggio/i di consenso del giudice";
$label_your_consensus_score = "Il tuo punteggio di consenso";
$label_score_range_status = "Stato Intervallo di Punteggio";
$label_consensus_caution = "Attenzione Consenso";
$label_consensus_match = "Corrispondenza Consenso";
$label_score_range_caution = "Attenzione Intervallo di Punteggio dei Giudici";
$label_score_range_ok = "Intervallo di Punteggio dei Giudici OK";
$label_auto_log_out = "Disconnessione Automatica tra";
$label_place_previously_selected = "Posizione Precedentemente Selezionata";
$label_entry_without_eval = "Iscrizione Senza Valutazione";
$label_entries_with_eval = "Iscrizioni Con Valutazione";
$label_entries_without_eval = "Iscrizioni Senza Valutazione";
$label_judging_close = "Chiusura Valutazione";
$label_session_expire = "Sessione in Scadenza";
$label_refresh = "Aggiorna Questa Pagina";
$label_stay_here = "Rimani Qui";
$label_bottle_inspection = "Ispezione Bottiglia";
$label_bottle_inspection_comments = "Commenti Ispezione Bottiglia";
$label_consensus_no_match = "I Punteggi di Consenso Non Corrispondono";
$label_score_below_courtesy = "Il Punteggio Inserito è Inferiore alla Soglia di Cortesia";
$label_score_greater_50 = "Il Punteggio Inserito è Maggiore di 50";
$label_score_out_range = "Il Punteggio è Fuori Intervallo";
$label_score_range = "Intervallo di Punteggio";
$label_ok = "OK";
$label_esters = "Esteri";
$label_phenols = "Fenoli";
$label_descriptors = "Descrittori";
$label_grainy = "Granoso";
$label_caramel = "Caramello";
$label_bready = "Panificato";
$label_rich = "Ricco";
$label_dark_fruit = "Frutta Scura";
$label_toasty = "Tostato";
$label_roasty = "Arrostito";
$label_burnt = "Bruciato";
$label_citrusy = "Agrumato";
$label_earthy = "Terroso";
$label_herbal = "Erbaceo";
$label_piney = "Resinoso";
$label_woody = "Legnoso";
$label_apple_pear = "Mela/Pera";
$label_banana = "Banana";
$label_berry = "Bacche";
$label_citrus = "Agrumi";
$label_dried_fruit = "Frutta Secca";
$label_grape = "Uva";
$label_stone_fruit = "Frutta a Nocciolo";
$label_even = "Uniforme";
$label_gushed = "Traboccato";
$label_hot = "Caldo";
$label_slick = "Liscio";
$label_finish = "Finale";
$label_biting = "Pungente";
$label_drinkability = "Bevibilità";
$label_bouquet = "Bouquet";
$label_of = "Di";
$label_fault = "Difetto";
$label_weeks = "Settimane";
$label_days = "Giorni";
$label_scoresheet = "Scheda di Valutazione";
$label_beer_scoresheet = "Scheda di Valutazione Birra";
$label_cider_scoresheet = "Scheda di Valutazione Sidro";
$label_mead_scoresheet = "Scheda di Valutazione Idromele";
$label_consensus_status = "Stato del Consenso";
$evaluation_info_044 = "Il tuo punteggio di consenso non corrisponde a quelli inseriti dagli altri giudici.";
$evaluation_info_045 = "Il punteggio di consenso inserito corrisponde a quelli inseriti dai giudici precedenti.";
$evaluation_info_046 = "La differenza di punteggio è maggiore di";
$evaluation_info_047 = "La differenza di punteggio rientra nell'intervallo accettabile.";
$evaluation_info_048 = "La posizione che hai specificato è già stata inserita per il tavolo. Per favore scegli un'altra posizione o nessuna posizione (Nessuna).";
$evaluation_info_049 = "Queste iscrizioni non hanno almeno una valutazione";
$evaluation_info_050 = "Per favore fornisci la posizione ordinale dell'iscrizione nel flight.";
$evaluation_info_051 = "Per favore fornisci il numero totale di iscrizioni nel flight.";
$evaluation_info_052 = "Dimensione appropriata, tappo, livello di riempimento, rimozione dell'etichetta, ecc.";
$evaluation_info_053 = "Il punteggio di consenso è il punteggio finale concordato da tutti i giudici che valutano l'iscrizione. Se il punteggio di consenso è sconosciuto in questo momento, inserisci il tuo punteggio. Se il punteggio di consenso inserito qui differisce da quelli inseriti dagli altri giudici, verrai avvisato.";
$evaluation_info_054 = "Questa iscrizione è avanzata a un round mini-BOS.";
$evaluation_info_055 = "Il punteggio di consenso che hai inserito non corrisponde a quelli inseriti dai giudici precedenti per questa iscrizione. Per favore consulta gli altri giudici che valutano questa iscrizione e rivedi il tuo punteggio di consenso se necessario.";
$evaluation_info_056 = "Il punteggio che hai inserito è inferiore a 13, <a href=\"https://www.bjcp.org/cep/GreatBeerJudging.pdf\" target=\"_blank\">una soglia di cortesia comunemente nota per i giudici BJCP</a>. Per favore consulta gli altri giudici e rivedi il tuo punteggio se necessario.";
$evaluation_info_057 = "I punteggi non dovrebbero essere inferiori a 5 e non superiori a 50.";
$evaluation_info_058 = "Il punteggio che hai inserito è superiore a 50, il punteggio massimo per qualsiasi iscrizione. Per favore rivedi e correggi il tuo punteggio di consenso.";
$evaluation_info_059 = "Il punteggio che hai fornito per questa iscrizione è al di fuori dell'intervallo di differenza di punteggio tra i giudici.";
$evaluation_info_060 = "caratteri massimo";
$evaluation_info_061 = "Per favore fornisci dei commenti.";
$evaluation_info_062 = "Per favore scegli un descrittore.";
$evaluation_info_063 = "Finirei questo campione.";
$evaluation_info_064 = "Berrei una pinta di questa birra.";
$evaluation_info_065 = "Pagherei per questa birra.";
$evaluation_info_066 = "Raccomanderei questa birra.";
$evaluation_info_067 = "Per favore fornisci una valutazione.";
$evaluation_info_068 = "Per favore fornisci il punteggio di consenso - minimo 5, massimo 50.";
$evaluation_info_069 = "Almeno due giudici del flight in cui è stata inserita la tua presentazione hanno raggiunto un consenso sul tuo punteggio finale assegnato. Non è necessariamente una media dei punteggi individuali.";
$evaluation_info_070 = "Basato sulla scheda di valutazione BJCP per";
$evaluation_info_071 = "Sono trascorsi più di 15 minuti.";
$evaluation_info_072 = "Per impostazione predefinita, la Disconnessione Automatica è estesa a 30 minuti per le valutazioni delle iscrizioni.";
$alert_text_090 = "La tua sessione scadrà tra due minuti. Puoi rimanere sulla pagina corrente per finire il tuo lavoro prima che il tempo scada, aggiornare questa pagina per continuare la tua sessione corrente (i dati del modulo non salvati potrebbero andare persi), o disconnetterti.";
$alert_text_091 = "La tua sessione scadrà tra 30 secondi. Puoi aggiornare per continuare la tua sessione corrente o disconnetterti.";
$alert_text_092 = "Deve essere definita almeno una sessione di valutazione per aggiungere un tavolo.";
$brewer_entries_text_026 = "Le schede di valutazione dei giudici per questa iscrizione sono in formati multipli. Ogni formato contiene una o più valutazioni valide di questa iscrizione.";
$qr_text_008 = "Per registrare le iscrizioni tramite codice QR, fornisci la password corretta. Dovrai fornire la password solo una volta per sessione - assicurati di mantenere aperto il browser o l'app di scansione del codice QR.";
$qr_text_015 = "Scansiona il prossimo Codice QR. Chiudi questa scheda del browser se lo desideri.

Per i sistemi operativi più recenti, accedi all'app della fotocamera del tuo dispositivo mobile. Per i sistemi operativi più vecchi, avvia/torna all'app di scansione.";
$qr_text_017 = "La scansione del codice QR è disponibile nativamente sulla maggior parte dei sistemi operativi mobili moderni. Basta puntare la fotocamera sul codice QR su un'etichetta della bottiglia e seguire le istruzioni. Per i sistemi operativi mobili più vecchi, è necessaria un'app di scansione del codice QR per utilizzare questa funzione.";
$qr_text_018 = "Scansiona un codice QR situato su un'etichetta della bottiglia, inserisci la password richiesta e registra l'iscrizione.";

/**
 * ------------------------------------------------------------------------
 * Version 2.3.2 Additions
 * ------------------------------------------------------------------------
 */

$label_select_state = "Seleziona o Cerca il Tuo Stato";
$label_select_below = "Seleziona Sotto";
$output_text_033 = "Quando invii il tuo rapporto al BJCP, è possibile che non tutti nell'elenco dello staff ricevano punti. Si suggerisce di assegnare prima i punti a coloro che hanno ID BJCP.";
$styles_entry_text_PRX3 = "Il partecipante deve specificare la varietà di uva o mosto d'uva utilizzato.";
$styles_entry_text_C1A = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (5 categorie). Se l'OG è sostanzialmente al di sopra dell'intervallo tipico, il partecipante dovrebbe spiegare, ad esempio, una particolare varietà di mela che dà un succo ad alta densità.";
$styles_entry_text_C1B = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (da secco a medio-dolce, 4 livelli). I partecipanti POSSONO specificare la varietà di mela per un sidro monovarietale; se specificato, ci si aspetterà il carattere varietale.";
$styles_entry_text_C1C = "I partecipanti DEVONO specificare il livello di carbonazione (3 livelli). I partecipanti DEVONO specificare la dolcezza (solo da medio a dolce, 3 livelli). I partecipanti POSSONO specificare la varietà di mela per un sidro monovarietale; se specificato, ci si aspetterà il carattere varietale.";
$winners_text_007 = "Non ci sono iscrizioni vincenti a questo tavolo.";

/**
 * ------------------------------------------------------------------------
 * Version 2.4.0 Additions
 * ------------------------------------------------------------------------
 */
$label_entries_to_judge = "Iscrizioni da Valutare";
$evaluation_info_073 = "Se hai modificato o aggiunto qualsiasi elemento o commento in questa scheda di valutazione, i tuoi dati potrebbero andare persi se navighi via da questa pagina.";
$evaluation_info_074 = "Se HAI apportato modifiche, chiudi questa finestra di dialogo, scorri fino in fondo alla scheda di valutazione e seleziona Invia Valutazione.";
$evaluation_info_075 = "Se NON hai apportato modifiche, seleziona il pulsante blu Pannello di Valutazione qui sotto.";
$evaluation_info_076 = "Commenta su malto, luppoli, esteri e altri aromi.";
$evaluation_info_077 = "Commenta su colore, limpidezza e schiuma (ritenzione, colore e consistenza).";
$evaluation_info_078 = "Commenta su malto, luppoli, caratteristiche di fermentazione, equilibrio, finale/retrogusto e altre caratteristiche del sapore.";
$evaluation_info_079 = "Commenta su corpo, carbonazione, calore, cremosità, astringenza e altre sensazioni al palato.";
$evaluation_info_080 = "Commenta sul piacere complessivo nel bere associato all'iscrizione, fornisci suggerimenti per il miglioramento.";
if ((isset($_SESSION['prefsStyleSet'])) && ($_SESSION['prefsStyleSet'] == "BJCP2021")) {
$styles_entry_text_21B = "Il partecipante DEVE specificare una forza (session, standard, doppia); se non viene specificata una forza, si presumerà standard. Il partecipante DEVE specificare il tipo specifico di IPA Speciale dall'elenco dei Tipi Attualmente Definiti identificati nelle Linee Guida dello Stile, o come modificato dagli Stili Provvisori sul sito web BJCP; OPPURE il partecipante DEVE descrivere il tipo di IPA Speciale e le sue caratteristiche chiave sotto forma di commento in modo che i giudici sappiano cosa aspettarsi. I partecipanti POSSONO specificare le varietà di luppolo specifiche utilizzate, se ritengono che i giudici potrebbero non riconoscere le caratteristiche varietali dei luppoli più nuovi. I partecipanti POSSONO specificare una combinazione di tipi di IPA definiti (ad esempio, Black Rye IPA) senza fornire descrizioni aggiuntive.";
$styles_entry_text_24C = "Il partecipante DEVE specificare Bière de Garde bionda, ambrata o bruna.";
$styles_entry_text_25B = "Il partecipante DEVE specificare la forza (table, standard, super) e il colore (chiaro, scuro). Il partecipante PUÒ identificare i cereali caratterizzanti utilizzati.";
$styles_entry_text_27A = "Categoria generale per altre birre storiche che NON sono state definite dal BJCP. Il partecipante DEVE fornire una descrizione per i giudici dello stile storico che NON è uno degli esempi di stile storico attualmente definiti forniti dal BJCP. Esempi attualmente definiti: Kellerbier, Kentucky Common, Lichtenhainer, London Brown Ale, Piwo Grodziskie, Pre-Prohibition Lager, Pre-Prohibition Porter, Roggenbier, Sahti. Se una birra viene iscritta con solo un nome di stile e nessuna descrizione, è molto improbabile che i giudici capiscano come valutarla.";
$styles_entry_text_28A = "Il partecipante DEVE specificare uno Stile di Base, o fornire una descrizione degli ingredienti, specifiche o carattere desiderato. Il partecipante PUÒ specificare i ceppi di Brett utilizzati.";
$styles_entry_text_28B = "Il partecipante DEVE specificare una descrizione della birra, identificando il lievito o i batteri utilizzati e uno Stile di Base, o gli ingredienti, le specifiche o il carattere target della birra.";
$styles_entry_text_28C = "Il partecipante DEVE specificare qualsiasi Ingrediente di Tipo Speciale (ad esempio, frutta, spezie, erbe o legno) utilizzato. Il partecipante DEVE specificare una descrizione della birra, identificando il lievito o i batteri utilizzati e uno Stile di Base, o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_29A = "Il partecipante DEVE specificare il tipo/i di frutta utilizzata. Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti. Le Birre alla Frutta basate su uno Stile Classico dovrebbero essere iscritte in questo stile, ad eccezione del Lambic.";
$styles_entry_text_29B = "Il partecipante deve specificare il tipo di frutta e il tipo di SHV utilizzato; gli ingredienti SHV individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (ad esempio, spezie per torta di mele). Il partecipante deve specificare una descrizione della birra, uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_29C = "Il partecipante DEVE specificare il tipo di frutta utilizzata. Il partecipante DEVE specificare il tipo di ingrediente aggiuntivo (come da introduzione) o il processo speciale impiegato. Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_29D = "Il partecipante DEVE specificare il tipo di uva utilizzata. Il partecipante PUÒ fornire informazioni aggiuntive sullo stile di base o gli ingredienti caratteristici.";
$styles_entry_text_30A = "Il partecipante DEVE specificare il tipo di spezie, erbe o verdure utilizzate, ma gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (ad esempio, spezie per torta di mele, curry in polvere, polvere di peperoncino). Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
 $styles_entry_text_30B = "Il partecipante DEVE specificare il tipo di spezie, erbe o verdure utilizzate; gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (ad esempio, spezie per torta di zucca). Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_30C = "Il partecipante DEVE specificare il tipo di spezie, zuccheri, frutti o fermentabili aggiuntivi utilizzati; gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (ad esempio, spezie per vin brulé). Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_30D = "Il partecipante DEVE specificare il tipo di SHV utilizzati, ma gli ingredienti individuali non devono essere specificati se viene utilizzata una miscela di spezie ben nota (ad esempio, spezie per torta di mele, curry in polvere, peperoncino in polvere). Il partecipante DEVE specificare il tipo di ingrediente aggiuntivo (come da introduzione) o il processo speciale impiegato. Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_31A = "Il partecipante deve specificare il tipo di cereale alternativo utilizzato. Il partecipante deve specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_31B = "Il partecipante DEVE specificare il tipo di zucchero utilizzato. Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_32A = "Il partecipante DEVE specificare uno Stile di Base. Il partecipante DEVE specificare il tipo di legno o fumo se è percepibile un carattere di fumo varietale.";
$styles_entry_text_32B = "Il partecipante DEVE specificare il tipo di legno o fumo se è percepibile un carattere di fumo varietale. Il partecipante DEVE specificare gli ingredienti aggiuntivi o i processi che rendono questa una birra affumicata speciale. Il partecipante DEVE specificare una descrizione della birra, identificando uno stile di base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_33A = "Il partecipante DEVE specificare il tipo di legno utilizzato e il livello di tostatura o carbonizzazione (se utilizzato). Se viene utilizzato un legno varietale insolito, il partecipante DEVE fornire una breve descrizione degli aspetti sensoriali che il legno aggiunge alla birra. Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_33B = "Il partecipante DEVE specificare il carattere alcolico aggiuntivo, con informazioni sulla botte se rilevanti per il profilo di sapore finale. Se è stato utilizzato un legno o un ingrediente insolito, il partecipante DEVE fornire una breve descrizione degli aspetti sensoriali che gli ingredienti aggiungono alla birra. Il partecipante DEVE specificare una descrizione della birra, identificando uno Stile di Base o gli ingredienti, le specifiche o il carattere target della birra. Una descrizione generale della natura speciale della birra può coprire tutti gli elementi richiesti.";
$styles_entry_text_34A = "Il partecipante DEVE specificare il nome della birra commerciale, le specifiche (statistiche vitali) della birra e una breve descrizione sensoriale o un elenco degli ingredienti utilizzati nella produzione della birra. Senza queste informazioni, i giudici che non conoscono la birra non avranno una base per il confronto.";
$styles_entry_text_34B = "Il partecipante DEVE specificare lo Stile o gli Stili di Base utilizzati e qualsiasi ingrediente speciale, processo o variazione coinvolti. Il partecipante PUÒ fornire una descrizione aggiuntiva del profilo sensoriale della birra o delle statistiche vitali della birra risultante.";
$styles_entry_text_PRX3 = "Il partecipante DEVE specificare il tipo di uva utilizzata. Il partecipante PUÒ fornire informazioni aggiuntive sullo stile di base o gli ingredienti caratteristici.";
}

/**
 * ------------------------------------------------------------------------
 * Version 2.5.0 Additions
 * ------------------------------------------------------------------------
 */
$register_text_047 = "La tua domanda di sicurezza e/o risposta è stata modificata.";
$register_text_048 = "Se non hai avviato questa modifica, il tuo account potrebbe essere stato compromesso. Dovresti immediatamente accedere al tuo account e cambiare la tua password oltre ad aggiornare la tua domanda e risposta di sicurezza.";
$register_text_049 = "Se non riesci ad accedere al tuo account, dovresti contattare immediatamente un amministratore del sito per aggiornare la tua password e altre informazioni vitali dell'account.";
$register_text_050 = "La risposta alla tua domanda di sicurezza è criptata e non può essere letta dagli amministratori del sito. Deve essere inserita se scegli di modificare la tua domanda e/o risposta di sicurezza.";
$register_text_051 = "Informazioni dell'Account Aggiornate";
$register_text_052 = "È richiesta una risposta \"Sì\" o \"No\" per ogni località qui sotto.";
$brewer_text_044 = "Desideri modificare la tua domanda e/o risposta di sicurezza?";
$brewer_text_045 = "Non sono stati registrati risultati.";
$brewer_text_046 = "Per l'inserimento libero del nome del club, alcuni simboli non sono consentiti, inclusi la e commerciale (&), gli apostrofi ('), le virgolette (\") e il segno di percentuale (%).";
$brewer_text_047 = "Se non sei disponibile per nessuna delle sessioni elencate quando selezioni \"Sì\" sopra, ma sei ancora in grado di servire come membro dello staff in un'altra capacità, per favore mantieni \"Sì\" come tua risposta.";
$brewer_text_048 = "Spedizione Iscrizioni";
$brewer_text_049 = "Seleziona \"Non Applicabile\" se non hai intenzione di inviare iscrizioni alla competizione in questo momento.";
$brewer_text_050 = "Seleziona \"Spedizione Iscrizioni\" se hai intenzione di imballare e inviare le tue iscrizioni alla Sede di Spedizione fornita.";
$label_change_security = "Cambiare Domanda/Risposta di Sicurezza?";
$label_semi_dry = "Semi-Secco";
$label_semi_sweet = "Semi-Dolce";
$label_shipping_location = "Sede di Spedizione";
$label_allergens = "Allergeni";
$volunteers_text_010 = "Lo staff può indicare la propria disponibilità per le seguenti sessioni non di valutazione:";
$evaluation_info_081 = "Commenta sull'espressione del miele, l'alcol, gli esteri, la complessità e altri aromi.";
$evaluation_info_082 = "Commenta su colore, limpidezza, archetti e carbonazione.";
$evaluation_info_083 = "Commenta su miele, dolcezza, acidità, tannino, alcol, equilibrio, corpo, carbonazione, retrogusto e qualsiasi ingrediente speciale o sapore specifico dello stile.";
$evaluation_info_084 = "Commenta sul piacere complessivo nel bere associato all'iscrizione, fornisci suggerimenti per il miglioramento.";
$evaluation_info_085 = "Colore (2), limpidezza (2), livello di carbonazione (2).";
$evaluation_info_086 = "Espressione di altri ingredienti se appropriato.";
$evaluation_info_087 = "Equilibrio di acidità, dolcezza, forza alcolica, corpo, carbonazione (se appropriata) (14), Altri ingredienti se appropriato (5), Retrogusto (5).";
$evaluation_info_088 = "Commenta sul piacere complessivo nel bere associato all'iscrizione, fornisci suggerimenti per il miglioramento.";
$evaluation_info_089 = "Conteggio minimo di parole raggiunto o superato.";
$evaluation_info_090 = "Grazie per aver fornito la valutazione più completa possibile. Totale parole: ";
$evaluation_info_091 = "Parole minime richieste per i tuoi commenti: ";
$evaluation_info_092 = "Conteggio parole finora: ";
$evaluation_info_093 = "Il requisito minimo di parole non è stato raggiunto nel campo Feedback dell'Impressione Generale sopra.";
$evaluation_info_094 = "Il requisito minimo di parole non è stato raggiunto in uno o più campi di feedback/commento sopra.";


/**
 * ------------------------------------------------------------------------
 * Version 2.6.0 Additions
 * ------------------------------------------------------------------------
 */
$label_regional_variation = "Variazione Regionale";
$label_characteristics = "Caratteristiche";
$label_intensity = "Intensità";
$label_quality = "Qualità";
$label_palate = "Palato";
$label_medium = "Media";
$label_medium_dry = "Media Secca";
$label_medium_sweet = "Media Dolce";
$label_your_score = "Il Tuo Punteggio";
$label_summary_overall_impression = "Riepilogo della Valutazione e Impressione Generale";
$label_medal_count = "Conteggio Gruppo Medaglie";
$label_best_brewer_place = "Posizione Miglior Birraio";
$label_industry_affiliations = "Affiliazioni a Organizzazioni del Settore";
$label_deep_gold = "Oro Intenso";
$label_chestnut = "Castano";
$label_pink = "Rosa";
$label_red = "Rosso";
$label_purple = "Viola";
$label_garnet = "Granato";
$label_clear = "Limpido";
$label_final_judging_date = "Data Valutazione Finale";
$label_entries_judged = "Iscrizioni Valutate";
$label_results_export = "Esporta Risultati";
$label_results_export_personal = "Esporta Risultati Personali";
$brew_text_041 = "Opzionale – specifica una variazione regionale (es. Lager Messicana, Lager Olandese, Lager Giapponese al Riso, ecc.).";
$evaluation_info_095 = "Prossima sessione di valutazione assegnata aperta:";
$evaluation_info_096 = "Per assistere nella preparazione, i tavoli/flight assegnati e le relative iscrizioni sono disponibili dieci minuti prima dell'inizio di una sessione.";
$evaluation_info_097 = "La tua prossima sessione di valutazione è ora disponibile.";
$evaluation_info_098 = "Aggiorna per visualizzare.";
$evaluation_info_099 = "Sessioni di valutazione passate o attuali:";
$evaluation_info_100 = "Prossime sessioni di valutazione:";
$evaluation_info_101 = "Per favore fornisci un altro descrittore di colore.";
$evaluation_info_102 = "Inserisci il tuo punteggio totale - massimo 50. Usa la guida di punteggio sotto se necessario.";
$evaluation_info_103 = "Per favore fornisci il tuo punteggio - minimo 5, massimo 50.";
$brewer_text_051 = "Seleziona le organizzazioni del settore a cui sei affiliato come dipendente, volontario, ecc. Questo serve per assicurarsi che non ci siano conflitti di interesse nell'assegnare giudici e steward per valutare le iscrizioni.";
$brewer_text_052 = "<strong>Se qualche organizzazione del settore <u>non</u> è elencata nel menu a tendina sopra, inseriscila qui.</strong> Separa il nome di ogni organizzazione con una virgola (,) o un punto e virgola (;). Alcuni simboli non sono consentiti, incluse le virgolette doppie (\") e il segno di percentuale (%).";


/**
 * ------------------------------------------------------------------------
 * Version 2.6.0 Additions
 * ------------------------------------------------------------------------
 */
$evaluation_info_104 = "Non tutti i giudici hanno indicato che questa iscrizione è avanzata al round Mini-BOS. Per favore verifica e seleziona Sì o No sopra.";
$evaluation_info_105 = "Le seguenti iscrizioni hanno indicazioni Mini-BOS discordanti dai giudici:";
$label_non_judging = "Sessioni Non di Valutazione";

/**
 * ------------------------------------------------------------------------
 * Version 2.6.2 Additions
 * ------------------------------------------------------------------------
 */
$label_mhp_number = "Numero di Iscrizione al Programma Master Homebrewer";
$brewer_text_053 = "Il Programma Master Homebrewer è un'organizzazione no-profit istituita per promuovere la padronanza della birrificazione amatoriale.";
$best_brewer_text_015 = "I punti per ogni iscrizione piazzata sono calcolati utilizzando la seguente formula, basata su quella utilizzata dal Programma Master Homebrewer per il <a href='https://www.masterhomebrewerprogram.com/circuit-of-america' target='_blank'>Circuit of America</a>:";

/**
 * ------------------------------------------------------------------------
 * Version 2.7.0 Additions
 * ------------------------------------------------------------------------
 */
$label_abv = "Alcol Per Volume (ABV)";
$label_final_gravity = "Densità Finale";
$label_juice_source = "Fonte(i) di Frutta o Succo";
$label_select_all_apply = "Seleziona Tutto Ciò che si Applica";
$label_pouring = "Versamento";
$label_pouring_notes = "Note sul Versamento";
$label_rouse_yeast = "Risvegliare il Lievito";
$label_fast = "Veloce";
$label_slow = "Lento";
$label_normal = "Normale";
$label_brewing_partners = "Partner di Birrificazione";
$label_entry_edit_deadline = "Scadenza Modifica Iscrizione";
$brew_text_042 = "Per favore fornisci l'alcol per volume fino al centesimo.";
$brew_text_043 = "Solo numeri - decimali accettabili fino al centesimo (es. 5.2, 12.84, ecc.).";
$brew_text_044 = "Per favore fornisci la densità finale specifica fino al millesimo (es. 0.991, 1.000, 1.007, ecc.).";
$brew_text_045 = "Per favore fornisci la/e fonte(i) applicabile(i).";
$brew_text_046 = "Per favore specifica l'origine di tutte le aggiunte di frutta in questo sidro. Le aggiunte di frutta sono tutta la frutta/succo aggiunto alla bevanda che non è la base di mela o pera.";
$brew_text_047 = "Come dovrebbe essere versata la tua iscrizione per i giudici?";
$brew_text_048 = "Dovrebbe essere risvegliato del lievito prima di versare?";
$brew_text_049 = "Fornisci ulteriori informazioni su come dovrebbe essere versata la tua iscrizione o altri elementi correlati (es. possibile gorgogliamento, ecc.).";
$brewer_text_055 = "Seleziona i partner di birrificazione con cui sei affiliato. Questo serve per assicurarsi che non ci siano conflitti di interesse nell'assegnare giudici e steward per valutare le iscrizioni.";
$brewer_text_054 = "<strong>Se il nome di qualche persona <u>non</u> è elencato nel menu a tendina sopra, inserisci il loro nome COMPLETO qui (es. Mario Rossi, Luca Bianchi, Giulia Verdi, ecc.). Aggiungi anche qui i nomi dei team di birrificazione.</strong> Separa ogni team o nome di persona con una virgola (,) o punto e virgola (;). Alcuni simboli non sono consentiti, incluse le virgolette doppie (\") e il segno di percentuale (%).";
$brew_text_050 = "Alcuni stili sono disabilitati poiché è stato raggiunto il limite per il loro tipo di stile corrispondente (es. birra, idromele, sidro, ecc.).";
$entry_info_text_053 = "Limiti di iscrizione per tipo di stile:";
$alert_text_093 = "Alcuni limiti di iscrizione raggiunti!";
$alert_text_094 = "Non vengono più accettate iscrizioni per i seguenti tipi di stile";
$label_limit = "Limite";
$label_beer = "Birra";
$label_mead = "Idromele";
$label_cider = "Sidro";
$label_mead_cider = "Idromele/Sidro";
$label_wine = "Vino";
$label_rice_wine = "Vino di Riso";
$label_spirits = "Distillati";
$label_kombucha = "Kombucha";
$label_pulque = "Pulque";
$form_required_fields_00 = "Non tutti i campi obbligatori sono stati compilati o selezionati.";
$form_required_fields_01 = "I campi obbligatori mancanti di valori sono indicati con una stella <i class=\"fa fa-sm fa-star\"></i> e/o in <strong class=\"text-danger\">rosso</strong> sopra. Per favore scorri verso l\'alto se necessario.";
$form_required_fields_02 = "Questo campo è obbligatorio.";
$entry_info_text_054 = "Conteggio attuale delle iscrizioni per tipo di stile e limiti associati:";
$maintenance_text_002 = "Solo gli Amministratori di Alto Livello possono accedere quando il sito è in Modalità Manutenzione.";
$brew_text_054 = "Da dove proviene la frutta o il succo di mela/pera? Per favore seleziona tutto ciò che si applica per la bevanda base.";
$label_packaging = "Confezionamento";
$label_bottle = "Bottiglia";
$label_other_size = "Altra Dimensione";
$label_can = "Lattina";
$label_fruit_add_source = "Fonte(i) di Aggiunta di Frutta";
$label_yearly_volume = "Volume Annuale";
$label_gallons = "Galloni";
$label_barrels = "Barili";
$label_hectoliters = "Ettolitri";

/**
 * ------------------------------------------------------------------------
 * Version 2.7.1 Additions
 * ------------------------------------------------------------------------
 */
$sidebar_text_027 = "applicato fino al";
$entry_info_text_055 = "Nessun metodo di pagamento è specificato nel sistema in questo momento. Controlla le regole della competizione o contatta l'organizzatore.";
/**
 * ------------------------------------------------------------------------
 * Version 2.7.2 Additions
 * ------------------------------------------------------------------------
 */
$brew_text_055 = "Tornare qui per aggiungere un'altra iscrizione?";
$brewer_info_015 = "<p>Sembra che ti sia registrato per servire come giudice o steward, ma non hai indicato di essere disponibile per alcuna sessione di valutazione per nessuno dei due ruoli.</p><p>Per favore seleziona il pulsante qui sotto per modificare il tuo account e poi seleziona \"Sì\" per ciascuna delle sessioni in cui sei disponibile a giudicare nella sezione Disponibilità Sessioni di Valutazione e quelle in cui sei disponibile come steward nella sezione Disponibilità Sessioni di Stewarding.</p><p>Se non sei disponibile per alcuna sessione per uno o entrambi i ruoli, per favore seleziona \"No\" nella sezione Valutazione e/o Stewarding.</p>";
$brewer_info_016 = "<p>Sembra che ti sia registrato per servire come giudice, ma non hai indicato di essere disponibile per alcuna sessione di valutazione.</p><p>Per favore seleziona il pulsante qui sotto per modificare il tuo account e poi seleziona \"Sì\" per ciascuna delle sessioni in cui sei disponibile a giudicare nella sezione Disponibilità Sessioni di Valutazione.</p><p>Se non sei disponibile per alcuna sessione, per favore seleziona \"No\" nella sezione Valutazione.</p>";
$brewer_info_017 = "<p>Sembra che ti sia registrato per servire come steward, ma non hai indicato di essere disponibile per alcuna sessione di valutazione.</p><p>Per favore seleziona il pulsante qui sotto per modificare il tuo account e poi seleziona \"Sì\" per ciascuna delle sessioni in cui sei disponibile a servire come steward nella sezione Disponibilità Sessioni di Stewarding.</p><p>Se non sei disponibile per alcuna sessione, per favore seleziona \"No\" nella sezione Valutazione.</p>";
$brewer_info_018 = "<strong>Hai indicato che sei disposto a servire come giudice ma non hai indicato di essere disponibile per alcuna sessione di valutazione elencata.</strong> Per favore modifica le informazioni del tuo account e seleziona \"Sì\" per una o più sessioni di valutazione.";
$brewer_info_019 = "<strong>Hai indicato che sei disposto a servire come steward ma non hai indicato di essere disponibile per alcuna sessione di stewarding elencata.</strong> Per favore modifica le informazioni del tuo account e seleziona \"Sì\" per una o più sessioni di stewarding.";
$brewer_info_020 = "<strong>Sei già stato assegnato a un tavolo come giudice o steward</strong>. Se desideri modificare la tua disponibilità, per favore contatta l'organizzatore della competizione o il coordinatore dei giudici.";

/**
 * ----------------------------------------------------------------------------------
 * END TRANSLATIONS
 * ----------------------------------------------------------------------------------
 */

/**
 * ----------------------------------------------------------------------------------
 * Various conditionals
 * No translations below this line
 * ----------------------------------------------------------------------------------
 */

if (strpos($section, "step") === FALSE) $alert_text_032 = $alert_text_032; else $alert_text_032 = "";
if (strpos($section, "step") === FALSE) $alert_text_033 = $alert_text_033; else $alert_text_033 = "";
if (strpos($section, "step") === FALSE) $alert_text_036 = $alert_text_036; else $alert_text_036 = "";
if (strpos($section, "step") === FALSE) $alert_text_039 = $alert_text_039; else $alert_text_039 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_043 = $alert_text_043; else $alert_text_043 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_047 = $alert_text_047; else $alert_text_047 = "";
if (strpos($section, "step") === FALSE) $alert_text_050 = $alert_text_050; else $alert_text_050 = "";
if (strpos($section, "step") === FALSE) $alert_text_053 = $alert_text_053; else $alert_text_053 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_060 = $alert_text_060; else $alert_text_060 = "";
if (strpos($section, "step") === FALSE) $alert_text_068 = $alert_text_068; else $alert_text_068 = "";
if (strpos($section, "step") === FALSE) $alert_text_070 = $alert_text_070; else $alert_text_070 = "";
if (strpos($section, "step") === FALSE) $label_character_limit = $label_character_limit; else $label_character_limit = "";
if (strpos($section, "step") === FALSE) $header_text_031 = $header_text_031; else $header_text_031 = "";
if (strpos($section, "step") === FALSE) $beerxml_text_007 = $beerxml_text_007; else $beerxml_text_007 = "";

?>