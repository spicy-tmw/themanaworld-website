<?php
# Global Settings
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if (!defined('MEDIAWIKI')) {
    exit;
}

$wgSitename      = "The Mana World (Testing)";
$wgMetaNamespace = "TheManaWorld";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "http://www.gnu.org/copyleft/fdl.html";
$wgRightsText = "Licencia de documentación libre de GNU 1.3 o posterior";
$wgRightsIcon = "{$wgStylePath}/common/images/gnu-fdl.png";




// Global pretty url (may be override in env-settings, should not)
## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath      = "";
$wgArticlePath     = "/view/$1";
$wgScriptExtension = ".php";
$wgUsePathInfo     = true;




// Select the enviroment-dependant settings
if (!file_exists("$IP/env/selector.php")) {
    throw new Exception("'$IP/env/selector.php' file not found. You can copy the '$IP/env/selector.php.dist' file to '$IP/env/selector.php' and customize settings.");
}
require_once "$IP/env/selector.php";


# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once "$IP/ExtensionsSettings.php";

# End of automatically generated settings.
# Add more configuration options below.
