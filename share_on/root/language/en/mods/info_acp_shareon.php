<?php

/**
*
* @package - Share On
* @version $Id: info_acp_shareon.php 2010-03-12 02:40 Saske1 $
* @copyright (c) Saske1 ( http://www.phpbbsaske.com )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'Share On MOD',
    'SO_TITLE'		=> 'SHARE ON MOD Settings',
	'SO_EXPLAIN'	=> 'Configure in which sites you want to share your topics',	
	'SHARE_ON_MOD'	=> 'MOD "Share On"',	
	'SO_CONFIG'		=> 'Settings',
	'SO_VERSION_OLD'	=> 'Current version of the MOD:',
	'SO_VERSION_NEW'	=> 'Latest version of the MOD:',
	'SO_SAVED'		=> 'Changes Saved.',
	'SO_SELECT'		=> 'Share On:',
	'SO_STATUS'		=> 'Enable MOD "Share On"',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_ORKUT'		=> 'Orkut',
	'SO_DIGG'		=> 'Digg',
	'SO_MYSPACE'	=> 'MySpace',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_TECHNORATI'	=> 'Technorati',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_SONICO'		=> 'Sonico',
	'SO_FRIENDFEED'	=> 'FriendFeed',
	'SO_TUMBLR'		=> 'Tumblr',
	
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Share on Facebook',
	'SHARE_ON_TWITTER'		=> 'Share on Twitter',
	'SHARE_ON_TUENTI'		=> 'Share on Tuenti',
	'SHARE_ON_SONICO'		=> 'Share on Sonico',
	'SHARE_ON_FRIENDFEED'	=> 'Share on FriendFeed',
	'SHARE_ON_ORKUT'		=> 'Share on Orkut',
	'SHARE_ON_DIGG'			=> 'Share on Digg',
	'SHARE_ON_MYSPACE'		=> 'Share on MySpace',
	'SHARE_ON_DELICIOUS'	=> 'Share on Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Share on Technorati',
	'SHARE_ON_TUMBLR'		=> 'Share on Tumblr',
));

?>