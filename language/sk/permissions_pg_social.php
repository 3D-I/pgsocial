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
	'ACL_CAT_PG_SOCIAL'		=> 'Môže používať PG Social',
	'ACL_U_PAGE_CREATE'		=> 'Môže vytvárať stránky',
	'ACL_A_PAGE_MANAGE'		=> 'Môže spravovať stránku',
	
	'ACL_M_PAGE_MANAGE'		=> 'Môže moderovať stránku',
));