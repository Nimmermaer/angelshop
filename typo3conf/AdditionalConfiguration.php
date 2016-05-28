<?php
if((PHP_SAPI =='cli' ) && ($_SERVER['argc']>= 3)){
	$APPLICATION_ENV = $_SERVER['argv'][2]; 
	unset($_SERVER['argv'][2]); 
}else {
	$APPLICATION_ENV = getenv("APPLICATION_ENV");
}

if (file_exists(realpath(dirname(__FILE__)).'/AdditionalConfiguration.local.'.$APPLICATION_ENV.'.php')==true) {
	include realpath(dirname(__FILE__)).'/AdditionalConfiguration.local.' .$APPLICATION_ENV.'.php';
} elseif (file_exists(realpath(dirname(__FILE__)).'/AdditionalConfiguration.server.'.$APPLICATION_ENV.'.php')==true) {
    include realpath(dirname(__FILE__)).'/AdditionalConfiguration.server.' .$APPLICATION_ENV.'.php';
}

?> 
