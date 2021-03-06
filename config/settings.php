<?php
/**
* Either some parts of ATK14 system (i.e. mailing subsystem) or some third party libs
* could be configured by constants or variables.
* 
* This file is the right place to do such configuration.
*
* You can inspect all ATK14 system`s constants in sys/src/default_settings.inc
*/

define("ATK14_APPLICATION_NAME","Markdown Manual");
define("ATK14_HTTP_HOST",PRODUCTION ? "markdown.plovarna.cz" : "markdown-manual.localhost");
define("DEFAULT_EMAIL","your@email");

date_default_timezone_set('Europe/Prague');

definedef("USING_BOOTSTRAP4",true);
definedef("USING_FONTAWESOME",true);

if(DEVELOPMENT || TEST){
	// a place for development and testing environment settings

	ini_set("display_errors","1");
}

if(TEST){
	// place for test environment settings

}


