<?php
# This file was automatically generated by the MediaWiki 1.38.4
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}



## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "KTH Formula Student";
$wgMetaNamespace = "KTH_Formula_Student";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs


$wgServer = getenv("DOMAIN");

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/images/logo.png",
	'icon' => "$wgResourceBasePath/images/logo.png",
];

## UPO means: this is also a user preference option

$wgEnableEmail = false;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "admin@wiki.kthformulastudent.se";
$wgPasswordSender = "admin@wiki.kthformulastudent.se";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

# Email settings
$wgSMTP = [
    'host'     => getenv("EMAL_HOST"), // could also be an IP address. Where the SMTP server is located
    'IDHost'   => getenv("EMAIL_HOST_ID"),      // Generally this will be the domain name of your website (aka mywiki.org)
    'port'     => getenv("EMAIL_PORT"),                 // Port to use when connecting to the SMTP server
    'auth'     => true,               // Should we use SMTP authentication (true or false)
    'username' => getenv("EMAIL_USERNAME"),     // Username to use for SMTP authentication (if being used)
    'password' => getenv("EMAIL_PASSWORD")       // Password to use for SMTP authentication (if being used)
];

## Database settings

$wgDBtype =  getenv("DB_TYPE");
$wgDBserver =  getenv("DB_HOST");
$wgDBuser = getenv("DB_USER");
$wgDBpassword = getenv("DB_PASSWORD");
$wgDBname = getenv("DB_NAME");


# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = getenv("SECRET_KEY");

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = getenv("UPGRADE_SECRET_KEY");

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";


$wgWhitelistRead = array( 'Special:RequestAccount');  #, 'Main Page' );

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "vector";

# File uploads
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'doc',
    'xls', 'mpp', 'pdf', 'ppt', 'tiff', 'bmp', 'docx', 'xlsx',
    'pptx', 'ps', 'odt', 'ods', 'odp', 'odg', 'mp3', 'mp4',
	'webm', 'mov', 'ogv', 'svg' , 'zip' , 'rar' , '7z',
	'm', 'py'
);
$wgMaxUploadSize = 100 * 1024 * 1024;  // 100MB

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );

# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'WikiEditor' );

//$wgReadOnly = 'Dumping Database, Access will be restored shortly';

# SyntaxHighlight
wfLoadExtension( 'SyntaxHighlight_GeSHi' );

# Math Equation Extension
wfLoadExtension( 'SimpleMathJax' );

# Visual Editor Extension
wfLoadExtension( 'VisualEditor' );


$wgGroupPermissions['*']['read'] = false;
$wgGroupPermissions['*']['edit'] = false;

$wgGroupPermissions['user']['read'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['user']['writeapi'] = true;


#Parasoid server 
if ( $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ) {
	$wgGroupPermissions['*']['read'] = true;
	$wgGroupPermissions['*']['edit'] = true;
	$wgGroupPermissions['*']['writeapi'] = true;

}
wfLoadExtension( 'Parsoid', '/var/www/html/vendor/wikimedia/parsoid/extension.json' );
$wgVirtualRestConfig['modules']['parsoid'] = array(
	'url' => "http://localhost/rest.php"
);

# Maximum numbers of pixels a source image can have
$wgMaxImageArea = 3.6e7;

# Html5mediator extension
require_once "$IP/extensions/Html5mediator/Html5mediator.php";

# ConfirmAccount extension
require_once "$IP/extensions/ConfirmAccount/ConfirmAccount.php";
$wgHooks['PersonalUrls'][] = 'onPersonalUrls';

function onPersonalUrls( array &$personal_urls, Title $title, SkinTemplate $skin  ) {
    // Add a link to Special:RequestAccount if a link exists for login
    if ( isset( $personal_urls['login'] ) || isset( $personal_urls['anonlogin'] ) ) {
            $personal_urls['createaccount'] = array(
                'text' => wfMessage( 'requestaccount' )->text(),
                'href' => SpecialPage::getTitleFor( 'RequestAccount' )->getFullURL()
            );
    }
    return true;
}

$wgGroupPermissions['bureaucrat']['confirmaccount-notify'] = true;

$wgMakeUserPageFromBio = false;
$wgAutoWelcomeNewUsers = false;
$wgConfirmAccountRequestFormItems = array(
	'UserName'        => array( 'enabled' => true ),
	'RealName'        => array( 'enabled' => true ),
	'Biography'       => array( 'enabled' => false, 'minWords' => 50 ),
	'AreasOfInterest' => array( 'enabled' => false ),
	'CV'              => array( 'enabled' => false ),
	'Notes'           => array( 'enabled' => true ),
	'Links'           => array( 'enabled' => false ),
	'TermsOfService'  => array( 'enabled' => false ),
);

// Load SimpleRadiusAuth
wfLoadExtension( 'SimpleRadiusAuth' );

$wgSimpleRadiusAuthServer = getenv("RADIUS_HOST");
$wgSimpleRadiusAuthSecret = getenv("RADIUS_SECRET");

// (Recommended) Allows auto account creation by the extension which bypasses the
// need for manual account creation. The extension only creates the account if the RADIUS
// authentication is successful. If this isn't set to 'true', accounts for each
// RADIUS user will need to be manually created before the user will be able to log in.
$wgGroupPermissions['*']['autocreateaccount'] = true;

// Debug
$wgShowExceptionDetails = true;
