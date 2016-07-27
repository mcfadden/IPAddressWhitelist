# IPAddressWhitelist

This is an extension for MediaWiki designed for situations where you restrict read access to your Wiki to logged in users, but wish to allow anonymous read access for requests from a specific set of IP Addresses.

## Prerequisites
This assumes you have a line similar to the following in your `LocalSettings.php` file:

    $wgGroupPermissions['*']['read'] = false;

If there are pages you wish to whitelist to _all_ users (regardless of IP address) you should do that as well. Example:

    $wgWhitelistRead = array(
        "Main Page", "MediaWiki:Common.css", "MediaWiki:Common.js"
       );

## Installation
Clone this repo into `$IP/extensions/` directory (where `$IP` is your WikiMedia directory):

    git clone https://github.com/mcfadden/IPAddressWhitelist.git

This will create a directory called IPAddressWhitelist with some files in it.

Modify your `LocalSettings.php` file and add the following lines:

    require_once "$IP/extensions/IPAddressWhitelist/IPAddressWhitelist.php";
    $wgIPAddressWhitelistRead = array( '127.0.0.1' );

Edit the IPAddresses in the array to match the IPAddresses you wish to whitelist

## License
[MIT](LICENSE)

## Known Limitations

This only accepts IP addresses, and not IP address ranges. If you'd like to add this feature, feel free to open a pull request.