<?php

/**
 *
 * PGreca Social extension for phpBB.
 *
 * @copyright (c) 2018 pgreca <https:/pgreca.it>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if(!defined('IN_PHPBB'))
{
	exit;
}
if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ABOUT_HOUR'						=> array(
		1				=> 'ora',
		2				=> 'ore',
	),
	'ABOUT_ME'							=> 'Su di me',
	'ABOUT_MONTH'						=> '1 mese',
	'ABOUT_MONTHS'						=> 'mesi',
	'ACTIVITY'							=> 'Attività',
	'ACTIVITY_PAGE'						=> 'Attività',
	'AGO'								=> 'fa',
	'ALBUM_CREATE'						=> 'Crea un album',
	'ALBUM_CREATE_EXPLAIN'				=> 'Ci vorranno solo pochi secondi',
	'ALBUM_CREATE_TITLE'				=> 'Inserisci un nome per l\'album',
	'ALBUM_CREATE_NOW'					=> 'Crealo subito!',
	'ALBUM_NO_PHOTO'						=> 'Nessuna foto in quest\' album',
	'ALL'								=> 'Tutti',
	'APPROVE_PAGE'						=> 'Approva',
	'ARE_YOU_SURE'						=> 'Questo stato sarà eliminato e non potrai trovarlo più. Confermi?',
	'ARE_YOU_SURE_PHOTO'				=> 'Questa foto sarà eliminata e non potrai trovarla più. Confermi?',
	'ATTACH_PICTURE'					=> 'Allega immagine',
	'PG_SOCIAL_AVATAR'					=> 'Immagine di profilo',
	'COMMENT'							=> array(
		0				=> 'Nessun commento',
		1				=> 'Commento',
		2				=> 'Commenti',
	),
	'COMMENT_THIS_ACTIVITY'				=> 'Commenta questo stato!',
	'CREATE'							=> 'Crea',
	'CREATED'							=> 'Creata il',
	'PG_SOCIAL_COVER'					=> 'Immagine di copertina',
	'PG_SOCIAL_DAY'								=> array(
		1	=> 'giorno',
		2	=> 'giorni',
	),
	'DO_YOU_WANT_SHARE'					=> 'Vuoi condividere questo stato?',
	'EDIT'								=> 'Modifica',
	'EDIT_PROFILE'						=> 'Modifica profilo',
	'FAVORITE_BOOK'						=> array(
		1				=> 'Libro preferito',
		2				=> 'Libri preferiti',
	),
	'FAVORITE_GAME'						=> array(
		1				=> 'Gioco preferito',
		2				=> 'Giochi preferiti',
	),
	'FAVORITE_MOVIE'					=> array(
		1				=> 'Film preferito',
		2				=> 'Film preferiti',
	),
	'FAVORITE_MUSIC'					=> array(
		1				=> 'Musica / Canzone / Cantante / Band preferite',
		2				=> 'Musiche / Canzoni / Cantanti / Band preferiti',
	),

	'FAVORITE_TVSHOW'					=> array(
		1				=> 'Serie tv preferita',
		2				=> 'Serie tv preferite',
	),
	'FRIEND'							=> array(
		1				=> 'Amico',
		2				=> 'Amici',
	),
	'FRIENDS_NO_REQUEST'				=> 'Nessuna richiesta d\' amicizia',
	'FRIENDS_REQUEST'					=> 'Richieste di amicizia',
	'FRIENDS_SUGGESTION'				=> 'Amici suggeriti',
	'GALLER'							=> 'Galleria',
	'GENDER'							=> 'Sesso',
	'GENDER_FEMALE'						=> 'Femmina',
	'GENDER_MALE'						=> 'Maschio',
	'GENDER_UNKNOWN'					=> 'Sconosciuto',
	'HAS_COMMENT_POST'					=> '%s ha commentato uno <a href="%s">stato</a> di %s',
	'HAS_COMMENT_HER_POST'				=> '%s ha commentato un suo <a href="%s">stato</a>',
	'HAS_COMMENT_YOUR_POST'				=> '%s ha commentato un tuo <a href="%s">stato</a>',	
	'NOTIFICATION_SOCIAL_COMMENT_ADD'	=> '%s ha commentato il tuo stato',
	'HAS_LIKE_POST'						=> 'A %s piace uno <a href="%s">stato</a> di %s',
	'HAS_LIKE_HER_POST'					=> 'A %s piace un suo <a href="%s">stato</a>',
	'HAS_LIKE_YOUR_POST'				=> 'A %s piace un tuo stato',
	'NOTIFICATION_SOCIAL_LIKE_ADD'		=> 'A %s piace un tuo stato', 
	'HAS_PUBLISHED_PHOTO'				=> 'ha pubblicato una foto',
	'HAS_PUBLISHED_PHOTO_ALBUM'			=> 'ha pubblicato una foto in %s',
	'HAS_REG'							=> '%s si è registrato',
	'HAS_SHARED_STATUS'					=> 'ha condiviso uno %s',
	'HAS_UPLOADED_AVATAR'				=> 'ha caricato una nuovo foto di profilo',
	'HAS_UPLOADED_COVER'				=> 'ha caricato una nuova foto di copertina',
	'HAS_TAGGED_YOU'					=> '%s ti ha taggato in uno stato',
	'HAS_WRITE_IN'						=> ' ha scritto sulla bacheca di',
	'HAS_WRITE_IN_YOUR'					=> '%s ha scritto sulla tua bacheca',
	'NOTIFICATION_SOCIAL_STATUS_ADD'	=> '%s ha scritto sulla tua bacheca',
	'HAS_WRITED_ARTICLE'				=> 'ha scritto un articolo',
	'HAS_WRITED_POST_ON'				=> 'ha scritto un post in %s',
	'HAS_WRITED_POST_ON_CANCEL'			=> 'ha scritto un post in una discussione',
	'HIDE_ONLINE'						=> 'Accedi come utente nascosto',
	'HOBBY'								=> array(
		1				=> 'Hobby',
		2				=> 'Hobbies',
	),
	'HOBBIES_INTERESTS'					=> 'Hobbies e Interessi',
	'HOUR'								=> array(
		1				=> 'ora',
		2				=> 'ore',
	),
	'INFO'								=> 'Informazioni',
	'YOU_SEE_ACTIVITY'					=> 'Stai vedendo uno stato di %s',
	'LAST_PHOTO'						=> array(
		1				=> 'Ultima foto',
		2				=> 'Ultime foto',
	),
	'LESS'								=> 'meno di',
	'LIKE'								=> array(
		1				=> 'Mi Piace',
		2				=> 'Ti piace già',
	),
	//'LIKE_ACTIVE'  						=> 'Ti piace già',
	'LIKE_TO'							=> 'Piace a',
	'MINUTE'							=> array(
		1				=> 'minuto',
		2				=> 'minuti',
	),
	'NOBODY_ONLINE'						=> 'Nessuno online',
	'NOTIFICATION_PG_SOCIAL'			=> 'Notifiche social',
	'NOTIFICATION_TYPE_SOCIAL_STATUS'	=> 'Qualcuno scrive uno stato nella tua bacheca',
	'NOTIFICATION_TYPE_SOCIAL_COMMENTS'	=> 'Qualcuno scrive un commento in un tuo stato',
	'NOTIFICATION_TYPE_SOCIAL_LIKES'	=> 'Qualcuno mette un like ad un tuo stato',
	'NOTIFICATION_TYPE_SOCIAL_TAG'		=> 'Qualcuno ti tagga in uno stato',
	'NOTIFICATION_TYPE_SOCIAL_ZEBRA'	=> 'Qualcuno ti aggiunge agli amici',
	'ONLY_YOU'							=> 'Solo tu',
	'OPTIONS'							=> 'Opzioni',
	'OTHER_SOCIALNETWORK'				=> 'Altri Social Network',
	'PAGE_CREATE'						=> 'Crea pagina',
	'PAGE_INSERT_NAME'					=> 'Nome della nuova pagina',
	'PAGE_MAY_LIKE'						=> 'Pagine che potrebbero piacerti',
	'PAGE_USERNAME'						=> 'Nome pagina',
	'PAGES'								=> 'Pagine',
	'PERSONAL_INFO'						=> 'Info Personali',
	'PG_SOCIAL_CHAT_DISABLE'			=> 'Disattiva chat',
	'PG_SOCIAL_CHAT_SOUND_DISABLE'		=> 'Disattiva suono alla ricezione di nuovi messaggi',
	'PG_SOCIAL_COMMENT_NEW_LOG'			=> '<strong>Ha commentato uno stato</strong><br />» %s',
	'PG_SOCIAL_COMMENT_REMOVE_LOG'		=> '<strong>Ha rimosso un suo commento da uno stato</strong>',
	'PG_SOCIAL_FRIENDS'					=> 'Amici',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Accetta richiesta d\' amicizia',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ_SHORT'	=> 'Accetta',
	'PG_SOCIAL_FRIENDS_ADD'				=> 'Aggiungi agli amici',
	'PG_SOCIAL_FRIENDS_CANCEL_REQ'		=> 'Cancella richiesta d\' amicizia',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ'		=> 'Rifiuta richiesta d\' amicizia',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ_SHORT'		=> 'Rifiuta',
	'PG_SOCIAL_FRIENDS_REMOVE'			=> 'Rimuovi dagli amici',
	'PG_SOCIAL_STATUS_DELETE'			=> 'Cancella stato',
	'PG_SOCIAL_DISLIKE_NEW_LOG'			=> '<strong>Non piace più uno stato</strong><br />» %s',
	'PG_SOCIAL_LIKE_NEW_LOG'			=> '<strong>Piace uno stato</strong><br />» %s',
	'PG_SOCIAL_STATUS_NEW_LOG'			=> '<strong>Ha pubblicato uno stato</strong><br />» %s',
	'PG_SOCIAL_STATUS_SHARE_LOG'		=> '<strong>Ha condiviso uno stato</strong><br />» %s',
	'PG_SOCIAL_STATUS_REMOVE_LOG'		=> '<strong>Ha cancellato uno stato</strong>',
	'PG_SOCIAL_STATUS_MOD_LOG'			=> '<strong>Ha moderato uno stato</strong>',
	'PG_SOCIAL_WRITE_A_MESSAGE'			=> 'Scrivi un messaggio',
	'PG_SOCIAL_WRITE_SOMETHING'			=> 'Scrivi qualcosa',
	'PG_SOCIAL_VERSION'					=> 'Versione',
	'PHOTO_DELETE'						=> 'Elimina questa foto',
	'PHOTO'								=> array(
		1				=> 'Foto',
		2				=> 'Foto',
	),
	'PRIVACY_ALL'						=> 'Tutti',
	'PRIVACY_ONLY_FRIENDS'				=> 'Amici',
	'PRIVACY_ONLY_ME'					=> 'Solo io',
	'PRIVACY_VISIBLE_FOR'				=> 'Visibile per',
	'PROFILE_AVATAR_UPDATE'				=> 'Cambia immagine di Profilo',
	'PROFILE_COVER_UPDATE'				=> 'Cambia immagine di Copertina',
	'PROFILE_NO_FRIEND'					=> 'Nessun amico',
	'PROFILE_UPDATE'					=> 'Aggiorna profilo',
	'PUBLIC'							=> 'Pubblica',
	'QUOTE'								=> 'Citazione',
	'RECENT_DISCUSSIONS'				=> 'Discussioni recenti',
	'RENAME'							=> 'Rinomina',
	'SOCIAL_STATU'						=> 'Stato',
	'SOCIAL_STATUS_UNKNOW'				=> 'Sconosciuto',
	'SOCIAL_STATUS_SINGLE'				=> 'Single',
	'SOCIAL_STATUS_ENGAGED'				=> 'Impegnato',
	'SOCIAL_STATUS_MARRIED'				=> 'Sposato',
	'SOCIAL_STATUS_COMPLICATED'			=> 'Complitato',
	'SOCIAL_STATUS_RELATIONSHIP'		=> 'Relazione aperta',
	'SECONDS'							=> 'secondi',
	'SHARE'								=> 'Condividi',
	'STATUS'							=> 'stato',
	'PG_SOCIAL_SUPPORT_EXT_KOFI'		=> 'Supporta PG SOCIAL NETWORK su Ko-fi',
	'PG_SOCIAL_WALL'				=> 'Bacheca',
	'WALL_TIME_AGO'						=> '%1$u %2$s fa',
	'WALL_TIME_FROM_NOW'				=> '%1$u %2$s fa',
	'WALL_TIME_PERIODS'					=> array(
		1	 		=> 'secondi',
		2	 		=> 'minuto',
		'SECOND'	 => 'secondo',
		'SECONDS'	 => 'secondi',
		'MINUTE'	 => 'minuto',
		'MINUTES'	 => 'minuti',
		'HOUR'		 => 'ora',
		'HOURS'		 => 'ore',
		'DAY'		 => 'giorno',
		'DAYS'		 => 'giorni',
		'WEEK'		 => 'settimana',
		'WEEKS'		 => 'settimane',
		'MONTH'		 => 'mese',
		'MONTHS'	 => 'mesi',
		'YEAR'		 => 'anno',
		'YEARS'		 => 'anni',
		'DECADE'	 => 'decade',
		'DECADES'	 => 'decadi',
	),
));
