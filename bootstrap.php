<?php

Autoloader::add_core_namespace('Cloudfiles');

Autoloader::add_classes(array(

	'Cloudfiles\\CF_Authentication'           => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\CF_Connection'               => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\CF_Container'                => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\CF_Object'                   => __DIR__.'/classes/cloudfiles.php',
	
	'Cloudfiles\\CF_Http'                     => __DIR__.'/classes/cloudfiles_http.php',

	'Cloudfiles\\SyntaxException'             => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\AuthenticationException'     => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\InvalidResponseException'    => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\NonEmptyContainerException'  => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\NoSuchObjectException'       => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\NoSuchContainerException'    => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\NoSuchAccountException'      => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\MisMatchedChecksumException' => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\IOException'                 => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\CDNNotEnabledException'      => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\BadContentTypeException'     => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\InvalidUTF8Exception'        => __DIR__.'/classes/cloudfiles.php',
	'Cloudfiles\\ConnectionNotOpenException'  => __DIR__.'/classes/cloudfiles.php',

));