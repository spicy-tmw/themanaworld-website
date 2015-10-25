<?php
# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
#
require_once( "$IP/extensions/GoogleSiteSearch/GoogleSiteSearch.php" );

require_once( "$IP/extensions/Spoilers/Spoilers.php" );

require_once( "$IP/extensions/tmwa/tmwa.php" );

require_once "$IP/extensions/ConfirmEdit/ConfirmEdit.php";

require_once "$IP/extensions/ConfirmAccount/ConfirmAccount.php";

$wgTMWAccountEmail = "validemail@domain.com";
$wgTMWNews = "$IP/news.html";
$wgTMWAccountLib = 'dbLadmin';

$wgTMWAccountLib = 'phpLadmin';
$wgLadminHost = '127.0.0.1';
$wgLadminPort = '6901';


require_once "$IP/extensions/ParserFunctions/ParserFunctions.php";

// MetaDescriptionTag -----
require_once "$IP/extensions/MetaDescriptionTag/MetaDescriptionTag.php";

// WikiEditor ------
require_once "$IP/extensions/WikiEditor/WikiEditor.php";
# Enables use of WikiEditor by default but still allows users to disable it in preferences
$wgDefaultUserOptions['usebetatoolbar'] = 1;
# Enables link and table wizards by default but still allows users to disable them in preferences
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
# Displays the Preview and Changes tabs
$wgDefaultUserOptions['wikieditor-preview'] = 1;
# Displays the Publish and Cancel buttons on the top right side
$wgDefaultUserOptions['wikieditor-publish'] = 0;


// Cite
require_once "$IP/extensions/Cite/Cite.php";




// $wgShowExceptionDetails = true;
