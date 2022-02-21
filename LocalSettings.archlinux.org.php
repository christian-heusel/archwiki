<?php
# This file was automatically generated by the MediaWiki 1.19.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

##
## LocalSettings.php
##

#$wgDBname     = "XXX";
#$wgDBuser     = "XXX";
#$wgDBpassword = "XXX";
#$wgSecretKey  = "XXX";
#$wgUpgradeKey = "XXX";


##
## General settings
##

$wgSitename      = "ArchWiki";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "https://wiki.archlinux.org";

$wgLocaltimezone = 'UTC';

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

# Allow to change the page language
$wgPageLanguageUseDB = true;
$wgGroupPermissions['sysop']['pagelang'] = true;

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath	    = "";
# $wgArticlePath      = "$wgScript/$1";
$wgUsePathInfo = true;
$wgScriptExtension  = ".php";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.
## Set to an empty string so no logo is loaded by default.
$wgLogos = ["1x" => ""];

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "http://www.gnu.org/copyleft/fdl.html";
$wgRightsText = "GNU Free Documentation License 1.3 or later";
$wgRightsIcon = "$wgScriptPath/resources/assets/licenses/gnu-fdl.png";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
# TODO: -1 is the default
$wgResourceLoaderMaxQueryLength = -1;

$wgGitRepositoryViewers['.+projects\.archlinux\.org/vhosts/wiki\.archlinux\.org\.git(.*)'] = 'https://projects.archlinux.org/vhosts/wiki.archlinux.org.git/commit/?id=%H';

$wgJobRunRate = 0;
$wgRunJobsAsync = 1;

# Enable support for userscripts and user-stylesheets (FS#46699)
$wgAllowUserJs = true;
$wgAllowUserCss = true;

# Section anchors: use HTML5-style anchors as primary, legacy as fallbback
$wgFragmentMode = [ 'html5', 'legacy' ];


##
## Database settings
##

$wgDBtype           = "mysql";
$wgDBserver         = "localhost";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;


##
## Email settings
##

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "webmaster@archlinux.org";
$wgPasswordSender   = "webmaster@archlinux.org";

$wgEnotifUserTalk      = true; # UPO
$wgEnotifWatchlist     = true; # UPO
$wgEmailAuthentication = true;

# avoid bouncing of user-to-user emails (FS#26737)
$wgUserEmailUseReplyTo = true;


##
## Cache and performance settings
##

## Shared memory settings
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "$IP/../cache/data";
$wgShowIPinHeader = false;
$wgEnableSidebarCache = true;
$wgUseFileCache = true;
$wgFileCacheDirectory = "$IP/../cache/html";
$wgUseGzip = true;
$wgUseETag = true;

# CSS-based preferences supposedly cause about 20 times slower page loads
# https://phabricator.wikimedia.org/rSVN63707
$wgAllowUserCssPrefs = false;

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;


##
## Media settings
##

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;


##
## Skin settings
##

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );
$wgVectorResponsive = true;
$wgVectorDefaultSkinVersion = '2';
$wgVectorDefaultSkinVersionForNewAccounts = '2';
wfLoadExtension( 'ArchLinux' );
$wgDefaultSkin = 'vector';
$wgDefaultUserOptions['skin'] = 'vector';
$wgArchHome = 'https://www.archlinux.org/';
$wgArchNavBar = array(
			'Home' => 'https://www.archlinux.org/',
			'Packages' => 'https://www.archlinux.org/packages/',
			'Forums' => 'https://bbs.archlinux.org/',
			'Wiki' => 'https://wiki.archlinux.org/',
			'Bugs' => 'https://bugs.archlinux.org/',
			'Security' => 'https://security.archlinux.org/',
			'AUR' => 'https://aur.archlinux.org/',
			'Download' => 'https://www.archlinux.org/download/'
		);
$wgArchNavBarSelectedDefault = 'Wiki';
$wgFooterIcons = ['copyright' => ['copyright' => '']];

##
## User roles
##
## User roles are groups without permissions: they only serve to clarify the
## main function of the user in the wiki, and they must be associated to
## specific access levels (see below) as needed.
##

$wgGroupPermissions['maintainer'] = array();
$wgGroupPermissions['translator'] = array();
$wgGroupPermissions['archdev'] = array();
$wgGroupPermissions['archtu'] = array();
$wgGroupPermissions['archstaff'] = array();
$wgGroupPermissions['administrator_fellow'] = array();


##
## Access levels
##
## These groups shouldn't be used to define the _role_ of users, but only the
## extent of the permissions that they have in the wiki; if a user is given
## an access level greater than 'user', their role (see above) must be
## specified as well.
##

# disable anonymous editing
$wgEmailConfirmToEdit = true;
$wgDisableAnonTalk = true;
$wgGroupPermissions['*']['edit'] = false;

# extra rights for sysop
$wgGroupPermissions['sysop']['deleterevision']  = true;
$wgGroupPermissions['sysop']['deletelogentry']  = true;
if ( isset( $wgGroupPermissions['interface-admin'] ) ) {
    $wgGroupPermissions['sysop'] += $wgGroupPermissions['interface-admin'];
}
if ( isset( $wgGroupPermissions['suppress'] ) ) {
    $wgGroupPermissions['sysop'] += $wgGroupPermissions['suppress'];
}

# disable uploads by normal users
$wgGroupPermissions['user']['upload']          = false;
$wgGroupPermissions['user']['reupload']        = false;
$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['autoconfirmed']['upload'] = false;

# co-sysop's rights
$wgGroupPermissions['cosysop']['autopatrol'] = true;
$wgGroupPermissions['cosysop']['patrol'] = true;
$wgGroupPermissions['cosysop']['noratelimit'] = true;
$wgGroupPermissions['cosysop']['suppressredirect'] = true;
$wgGroupPermissions['cosysop']['rollback'] = true;
$wgGroupPermissions['cosysop']['browsearchive'] = true;
$wgGroupPermissions['cosysop']['apihighlimits'] = true;
$wgGroupPermissions['cosysop']['unwatchedpages'] = true;
$wgGroupPermissions['cosysop']['deletedhistory'] = true;
$wgGroupPermissions['cosysop']['deletedtext'] = true;

# privileged's rights
$wgGroupPermissions['privileged']['patrolmarks'] = true;
$wgGroupPermissions['privileged']['noratelimit'] = true;
$wgGroupPermissions['privileged']['suppressredirect'] = true;

# additional page-protection levels
$wgRestrictionLevels[] = 'editprotected2';
$wgGroupPermissions['sysop']['editprotected2'] = true;
$wgGroupPermissions['cosysop']['editprotected2'] = true;
$wgGroupPermissions['privileged']['editprotected2'] = true;

$wgEnableWriteAPI = true;
# disable user account creation via API
$wgAPIModules['createaccount'] = 'ApiDisabled';
# remove 'writeapi' right from users
$wgGroupPermissions['*']['writeapi'] = false;
$wgGroupPermissions['user']['writeapi'] = false;
# add 'writeapi' to autoconfirmed users
$wgGroupPermissions['autoconfirmed']['writeapi'] = true;
# stricter conditions for 'autoconfirmed' promotion
$wgAutoConfirmAge = 86400*3; // three days
# require at least 20 normal edits before granting the 'writeapi' right
$wgAutoConfirmCount = 20;

# Enforce basic editing etiquette (FS#46190)
# We set the defaults for "minordefault" (disabled), "forceeditsummary"
# (enabled) and "showrollbackconfirmation" (enabled) options and hide them
# from the user preferences dialog. Note that hiding the user preferences with
# $wgHiddenPrefs results in everybody using the defaults, regardless of the
# users' earlier preference.
$wgDefaultUserOptions["minordefault"] = 0;
$wgDefaultUserOptions["forceeditsummary"] = 1;
$wgDefaultUserOptions["showrollbackconfirmation"] = 1;
$wgHiddenPrefs[] = "minordefault";
$wgHiddenPrefs[] = "forceeditsummary";
$wgHiddenPrefs[] = "showrollbackconfirmation";


##
## Namespaces
##

# Main
# Enable subpages in the main namespace (FS#39668)
$wgNamespacesWithSubpages[NS_MAIN] = true;

# Template
# Restrict editing to autoconfirmed users
$wgNamespaceProtection[NS_TEMPLATE] = array( 'editsemiprotected' );

# DeveloperWiki
define("NS_DEVELOPERWIKI", 3000);
define("NS_DEVELOPERWIKI_TALK", 3001);
$wgExtraNamespaces[NS_DEVELOPERWIKI] = "DeveloperWiki";
$wgExtraNamespaces[NS_DEVELOPERWIKI_TALK] = "DeveloperWiki_talk";
$wgNamespacesWithSubpages[NS_DEVELOPERWIKI] = true;
$wgNamespacesWithSubpages[NS_DEVELOPERWIKI_TALK] = true;
$wgContentNamespaces[] = NS_DEVELOPERWIKI;
$wgNamespacesToBeSearchedDefault[NS_DEVELOPERWIKI] = true;
$wgNamespaceProtection[NS_DEVELOPERWIKI] = array( 'editprotected2' );


##
## Additional extensions
##

wfLoadExtension( 'Nuke' );

# AbuseFilter extension
wfLoadExtension( 'AbuseFilter' );
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-privatedetails'] = true;
$wgGroupPermissions['sysop']['abusefilter-privatedetails-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

# filter groups
$wgAbuseFilterValidGroups = array( 'default', 'proofed' );
$wgAbuseFilterEmergencyDisableThreshold = array(
    'default' => 0.5,
    'proofed' => 1.0,
);
$wgAbuseFilterEmergencyDisableCount = array(
    'default' => 10,
    'proofed' => 65535,
);

# CheckUser extension
wfLoadExtension( 'CheckUser' );
$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['sysop']['checkuser-log'] = true;

# ParserFunctions extension
wfLoadExtension( 'ParserFunctions' );

# Interwiki extension
wfLoadExtension( 'Interwiki' );
$wgGroupPermissions['sysop']['interwiki'] = true;

# TitleKey extension
wfLoadExtension( 'TitleKey' );

# BounceHandler extension
wfLoadExtension( 'BounceHandler' );
$wgVERPprefix = "wiki-bounce";
$wgVERPdomainPart = "archlinux.org";

# CAPTCHA
# The dynamic $wgCaptchaQuestions is defined in the infrastructure repository
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/QuestyCaptcha' ]);
$wgCaptchaTriggers['edit'] = false;
$wgCaptchaTriggers['create'] = false;
$wgCaptchaTriggers['addurl'] = false;
$wgCaptchaTriggers['createaccount'] = true;
$wgCaptchaTriggers['badlogin'] = true;

# Restrict expensive actions to logged in users
wfLoadExtension( 'Lockdown' );
$wgSpecialPageLockdown['Recentchanges'] = [ 'user' ];
$wgSpecialPageLockdown['Newpages'] = [ 'user' ];
$wgSpecialPageLockdown['Recentchangeslinked'] = [ 'user' ];
$wgSpecialPageLockdown['Log'] = [ 'user' ];
$wgSpecialPageLockdown['Diff'] = [ 'user' ];
$wgActionLockdown['history'] = ['user'];


# Renameuser extension
wfLoadExtension( 'Renameuser' );
$wgGroupPermissions['sysop']['renameuser'] = true;

# UserMerge extension
wfLoadExtension( 'UserMerge' );
$wgGroupPermissions['sysop']['usermerge'] = true;
# Allow merging users with "Anonymous" (user_id 0)
$wgReservedUsernames[] = 'Anonymous';

# Improved interface for editing wikitext
wfLoadExtension( 'WikiEditor' );

# Syntax highlighting in WikiEditor
wfLoadExtension( 'CodeMirror' );
$wgDefaultUserOptions['usecodemirror'] = 1;

# Syntax highlighting for JavaScript, CSS and Lua
wfLoadExtension( 'CodeEditor' );

##
## Temporary settings for maintenance
##

# temporary disable registration; reverted 2016-6-26 bluewind
#$wgGroupPermissions['*']['createaccount'] = false;

# $wgShowSQLErrors = true;
# $wgReadOnly = 'Database migration in progress. We`ll be back in a few minutes.';
