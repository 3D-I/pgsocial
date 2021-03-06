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
	'ACL_CAT_PG_SOCIAL'		=> 'PG Social',
	
	'ACL_U_PAGE_CREATE'		=> 'Crea una pagina',
	
	'ACL_A_PAGE_MANAGE'		=> 'Abilitare pagine',	
	'ACL_A_STATUS_MANAGE'	=> 'Segnalazione attività',
	
	'ACL_M_PAGE_MANAGE'		=> 'Abilitare pagine',
	'ACL_M_STATUS_MANAGE'	=> 'Segnalazione attività',
));
