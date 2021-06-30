<?php

/**
 * Config APP.
 */
require_once 'config/config.php';

/**
 * Creates a queue of autoloading functions and loops through them in the order they were defined.
 */
spl_autoload_register(function ($name) {
	$path = 'util/' . $name . '.php';
	$path_real = ROOT_APP_PATH_APP . '/' . $path;
	if (file_exists($path_real)) {
		require_once $path;
	}
});

/**
 * Init.
 */
$globalDataBase = new DataBase;
$globalDataBase->init();
$globalCore  = new Core;
