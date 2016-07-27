<?php
/**
 * IPAddressWhitelist extension - Implements a by IP Address whitelist.
 * @version 1.0 - 2016/07/27
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 * @author Ben McFadden
 * @copyright © 2016 Ben McFadden
 * @licence MIT
 *
 * add the following line to localsettinge.php to use
 * require_once("$IP/extensions/IPAddressWhitelist/IPAddressWhitelist.php");
 * // allow all users from these IP Addresses to read all pages
 * $wgIPAddressWhitelistRead =  array ( '127.0.0.1' );
 *
 */

if( !defined( 'MEDIAWIKI' ) ) {
  echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
  die( 1 );
}

$wgExtensionCredits['other'][] = array(
  'name' => 'IPAddressWhitelist',
  'author' => 'Ben McFadden',
        'version' => '1.0',
  'url' => '',
  'description' => 'Allows whitelisting READ access for requests from specifc IP addresses',
);

$wgIPAddressWhitelistRead = array();

$wgHooks['TitleReadWhitelist'][] = 'IPAddressWhitelistHooks::onTitleReadWhitelist';

$wgAutoloadClasses[ 'IPAddressWhitelistHooks' ] = __DIR__ . '/IPAddressWhitelistHooks.php';