<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.

$IP = "/home/groups/n/ns/nsis/htdocs/mediawiki";
ini_set( "include_path", ".:$IP:$IP/includes:$IP/languages" );
#ini_set( "register_globals", "off" );
#ini_set( "upload_max_filesize", "102400" );
require_once( "includes/DefaultSettings.php" );

# If PHP's memory limit is very low, some operations may fail.
ini_set( 'memory_limit', '20M' );

if (!is_dir('/tmp/persistent/nsiswikisessions'))
	mkdir('/tmp/persistent/nsiswikisessions', 0777);
session_save_path('/tmp/persistent/nsiswikisessions');

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
} elseif ( empty( $wgConfiguring ) ) {
	## Compress output if the browser supports it
	if( !ini_get( 'zlib.output_compression' ) ) @ob_start( 'ob_gzhandler' );
}

$wgAllowExternalImages = true;

$wgSitename         = "NSIS Wiki";

$wgScriptPath	      = "/mediawiki";
$wgScript           = "$wgScriptPath/index.php";
$wgRedirectScript   = "$wgScriptPath/redirect.php";

## If using PHP as a CGI module, use the ugly URLs
$wgArticlePath      = "/$1";
# $wgArticlePath      = "$wgScriptPath/$1";
# $wgArticlePath      = "$wgScript?title=$1";

$wgStylePath        = "$wgScriptPath/skins";
$wgStyleDirectory   = "$IP/skins";
$wgLogo             = "/images/logo.gif";

$wgUseSiteCss       = false;

$wgDefaultSkin      = "nsis";

$wgUploadPath       = "$wgScriptPath/images";
$wgUploadDirectory  = "$IP/images";

$wgFileExtensions   = array( 'png', 'gif', 'jpg', 'jpeg', 'zip' );

$wgEmergencyContact = "kichik@users.sourceforge.net";
$wgPasswordSender	= "kichik@users.sourceforge.net";

include_once("/home/groups/n/ns/nsis/nsisweb.cfg.php");

$wgDBserver         = NSISWEB_MYSQL_HOST;
$wgDBname           = NSISWEB_DB_PREFIX."wiki";
$wgDBuser           = NSISWEB_MYSQL_USER;
$wgDBpassword       = NSISWEB_MYSQL_PASSWORD;
$wgDBprefix         = "wiki_";

## To allow SQL queries through the wiki's Special:Askaql page,
## uncomment the next lines. THIS IS VERY INSECURE. If you want
## to allow semipublic read-only SQL access for your sysops,
## you should define a MySQL user with limited privileges.
## See MySQL docs: http://www.mysql.com/doc/en/GRANT.html
#
# $wgAllowSysopQueries = true;
# $wgDBsqluser        = "sqluser";
# $wgDBsqlpassword    = "sqlpass";

# If you're on MySQL 3.x, this next line must be FALSE:
$wgDBmysql4 = $wgEnablePersistentLC = true;

## Shared memory settings
$wgUseMemCached = false;
$wgMemCachedServers = array();
$wgUseTurckShm = function_exists( 'mmcache_get' ) && php_sapi_name() == 'apache';

## To enable image uploads, make sure the 'images' directory
## is writable, then uncomment this:
$wgEnableUploads		= true;
$wgUseImageResize		= true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
# $wgUseTeX			= true;
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";
$wgUseLatin1 = false;


$wgProxyKey = "5bb6fe31f8842453211af510317a08a061bb7d35d2188136fd858c7bf39d1efd";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
# $wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = "License";
$wgRightsUrl = "";
$wgRightsText = "zlib/libpng license";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

# Cool features
$wgLivePreview = true;

# no section [edit] links
$wgDefaultUserOptions ['editsection'] = 0;

# Google search
$wgDisableTextSearch = true;
$wgForwardSearchUrl = 'http://www.google.com/cse?q=$1' .
                      '&sa=Search&cof=FORID:1' .
                      '&cx=013152803417979916569:ziywxtw6b6m';
        

# have Google follow links, we'll remove spam
$wgNoFollowLinks = false;

# anti-spam
$wgEnableSorbs = true;

$wgSpamRegex = '/\<(div|u|p|span)[^\>]*style\="[^"]*display\:\s*none\s*;+[^"]*"[^\>]*\>|\<(div|u|p|span)[^\>]*style\="[^"]*(display\:\s*none\s*|(position\:\s*absolute\s*|overflow\:\s*auto\s*);+[^\>]*height\:\s*1\w\w\s*;+)[^"]*"[^\>]*\>|(I liked your site|You have made a cool site|Your site is very good|Good design on your site|Hey I like your site|You have an exelent site|Keep up a good work on the site|You have a top notch site|(viagra|cialis) (online|cheap)|Very good web site Great work and thank you for your service Bob)\s*\<a href\="|(\<a href\="[^"]*">[^\<]*\<\/a\>\s*){2,}|(\[http:\/\/[^\]]+\] ){4,}|(^|\n)(http:\/\/[\w\d\/\.\-]+ [\w\d ]+( . )?){1,3}\d{6}($|\n)|\[url=.*?\]|((^|\n ?| \. )(http:\/\/[\w\d\/\.\-]+ [\w\d ]{5,40})){3,}|OutFile \"MeuVirus\.exe\"/i';

require_once( "$IP/extensions/SpamBlacklist.php" );
if (is_readable("$IP/spam_blacklist")) {
	$wgSpamBlacklistFiles = array(
		"$IP/spam_blacklist",
		"DB: $wgDBname Spam_Blacklist"
	);
} else {
	$wgSpamBlacklistFiles = array(
		"DB: $wgDBname Spam_Blacklist"
	);
}

# extensions
include("extensions/GeSHiHighlight.php");
include("extensions/attachments.php");
include("extensions/ForumRSS.php");
include("extensions/NewsRSS.php");
include("extensions/NSISDev.php");
include("extensions/NiceCategoryList.php");
include("extensions/NavImg.php");
include("extensions/NewUserLog.php");
include("extensions/SimpleUpdate.php");
include("extensions/ExtendedProtection.php");

?>
