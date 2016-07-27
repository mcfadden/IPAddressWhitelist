<?php
/**
 * Body file for extension IPAddressWhitelist.
 *
 * @file
 * @ingroup Extensions
 */

# hooks class
class IPAddressWhitelistHooks
  {
  /**
   * check for a whitelisted IP Address
   */
  public static function onTitleReadWhitelist( $title, $user, &$whitelisted)
    {
    global $wgIPAddressWhitelistRead;
    $requestIPAddress = $_SERVER['REMOTE_ADDR'];

    // Check for user logged in
    if( $user->getId()>0 )
      {
        return true;
      }
    // Not logged in.. Check IP Address
    else if( in_array ( $requestIPAddress, $wgIPAddressWhitelistRead ) )
      {
        $whitelisted = true;
      }
    return true;
    }

  }