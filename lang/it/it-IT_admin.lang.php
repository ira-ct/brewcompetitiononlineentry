<?php
/**
 * Module:      it-IT_admin.lang.php
 * Description: This module houses all display text in the Italian language.
 *
 */

/*

--------------------------------------------------------------------------------------------------

To translate this file, first make a copy of it and rename it with the language name in the title.

==============================

Use ISO 169-2 Standards for and WWW3C Language Tag Standards for naming of language files. Use the
ALPHA-2 letter code whenever possible.

ISO 169-2:
https://www.loc.gov/standards/iso639-2/php/code_list.php

WWW3 Language Tags:
https://www.w3.org/International/articles/language-tags/

WWW3 Choosing a Language Tag:
https://www.w3.org/International/questions/qa-choosing-language-tags

According to the WWW3:

"Always bear in mind that the golden rule is to keep your language tag as short as possible. Only
add further subtags to your language tag *if they are needed to distinguish the language from
something else in the context where your content is used...*

"Unless you specifically need to highlight that you are talking about Italian as spoken in Italy
you should use it for Italian, and not it-IT. The same goes for any other possible combination."

To determine a subtag, go to the IANA Language Subtag Registry:
http://www.iana.org/assignments/language-subtag-registry

==============================

Items that need translation into other languages are housed here in PHP variables - each start with
a dollar sign ($). The words, phrases, etc. (called strings) that need to be translated are housed
between double-quotes ("). Please, ONLY alter the text between the double quotes!

For example, a translated PHP variable would look like this:

English (US) before translation:
$label_volunteer_info = "Volunteer Info";

Spanish translated:
$label_volunteer_info = "Información de Voluntarios";

Portuguese translated:
$label_volunteer_info = "Informações Voluntário";

==============================

Please note: the strings that need to be translated MAY contain HTML code. Please leave this code
intact! For example:

English (US):
$beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and select <em>Upload</em>.";

Spanish:
$beerxml_text_008 = "Buscar su archivo compatible BeerXML en su disco duro y haga clic en <em>Cargar</em>.";

Note that the <em>...</em> tags were not altered. Just the word "Upload" to "Cargar" betewen those tags.

==============================

*/

// -------------------- Archive --------------------

$archive_text_000 = "A causa delle limitazioni di archiviazione del server, l'archiviazione dei dati dell'account BCOE&M ospitato non è disponibile. Per utilizzare il software per una nuova competizione o semplicemente per cancellare il database dei dati, usa i pulsanti qui sotto.";
$archive_text_001 = "I dati delle categorie personalizzate, dei tipi di stile personalizzati, delle sedi di consegna, delle sedi di valutazione e degli sponsor <strong class=\"text-success\">non verranno eliminati</strong>. Gli amministratori dovranno aggiornare questi dati per le future edizioni della competizione.";
$archive_text_002 = "Opzione 1";
$archive_text_003 = "Sei sicuro di voler cancellare i dati della competizione attuale? Questa azione NON può essere annullata.";
$archive_text_004 = "Cancella Tutti i Dati dei Partecipanti, delle Iscrizioni, delle Valutazioni e dei Punteggi";
$archive_text_005 = "Questa opzione cancella tutti gli account dei partecipanti non amministratori e tutti i dati delle iscrizioni, delle valutazioni e dei punteggi, incluse tutte le schede di valutazione caricate. Fornisce una tabula rasa.";
$archive_text_006 = "Opzione 2";
$archive_text_007 = "Sei sicuro di voler cancellare i dati della competizione attuale? Questa azione NON può essere annullata.";
$archive_text_008 = "Cancella Solo i Dati delle Iscrizioni, delle Valutazioni e dei Punteggi";
$archive_text_009 = "Questa opzione cancella tutti i dati delle iscrizioni, delle valutazioni e dei punteggi, incluse tutte le schede di valutazione caricate, ma mantiene i dati dei partecipanti. Utile se non vuoi che i partecipanti creino nuovi profili account.";
$archive_text_010 = "Per archiviare i dati attualmente memorizzati nel database, fornisci un nome per l'archivio. Si suggerisce di scegliere un nome che sia unico per questo set di dati. Ad esempio, se organizzi la tua competizione annualmente, il nome potrebbe essere l'anno in cui si è svolta. Se ospiti competizioni successive su una singola installazione, il nome della competizione e l'anno potrebbero servire come nome.";
$archive_text_011 = "Solo caratteri alfanumerici - tutti gli altri verranno omessi.";
$archive_text_012 = "Seleziona le informazioni che vorresti conservare per l'uso nelle future edizioni della competizione.";
$archive_text_013 = "Sei sicuro di voler archiviare i dati attuali?";
$archive_text_014 = "Poi, scegli quali dati vorresti conservare.";
$archive_text_015 = "Questo eliminerà l'archivio chiamato";
$archive_text_016 = "Anche tutti i record associati verranno rimossi.";

/*
 * --------------------- v 2.2.0 -----------------------
 */
$archive_text_017 = "Modifica le informazioni del tuo archivio con cautela. Cambiare uno qualsiasi dei seguenti elementi potrebbe causare un comportamento imprevisto quando si tenta di accedere ai dati archiviati.";
$archive_text_018 = "I file verranno spostati in una sotto-cartella con lo stesso nome del tuo archivio nella directory user_docs.";
$archive_text_019 = "Elenco/i dei vincitori archiviati disponibili per la visualizzazione pubblica.";
$archive_text_020 = "In generale, questo dovrebbe essere modificato solo se l'elenco dei vincitori di questo archivio viene visualizzato in modo non corretto.";
$archive_text_021 = "Le schede di valutazione PDF sono state salvate per questo archivio. Questa è la convenzione di denominazione di ciascun file utilizzata dal sistema quando vi accede.";
$archive_text_022 = "Disabilitato. Non esistono dati sui risultati per questo archivio.";
$archive_text_023 = "Non è specificato un set di stili. I dati archiviati delle iscrizioni, dei punteggi e delle scatole potrebbero non essere visualizzati correttamente.";
$label_uploaded_scoresheets = "Schede di Valutazione Caricate (File PDF)";
$label_admin_comp_type = "Tipo di Competizione";
$label_admin_styleset = "Set di Stili";
$label_admin_winner_display = "Visualizzazione Vincitori";
$label_admin_enable = "Abilita";
$label_admin_disable = "Disabilita";
$label_admin_winner_dist = "Metodo di Distribuzione dei Posti dei Vincitori";
$label_admin_archive = "Archivio";
$label_admin_scoresheet_names = "Nomi dei File delle Schede di Valutazione Caricate";
$label_six_char_judging = "Numero di Valutazione a 6 Caratteri";
$label_six_digit_entry = "Numero di Iscrizione a 6 Cifre";
$label_not_archived = "Non Archiviato";

// -------------------- Barcode Check-In --------------------



// -------------------- Navigation --------------------

?>