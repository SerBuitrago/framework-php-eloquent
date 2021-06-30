<?php

/**
 * App.
 */
define('ROOT_APP_NAME', 'framework-php-eloquent');

/**
 * Name.
 */
define('ROOT_APP_NAME_MODEL', '');
define('ROOT_APP_NAME_CONTROLLER', 'Controller');
define('ROOT_APP_NAME_VIEW', '');

/**
 * PHP.
 */
define('ROOT_APP_PHP_VERSION', '5.4.0');

/**
 * Namespace.
 */
define('ROOT_APP_NAMESPACE_MODEL', 'App\Model');
define('ROOT_APP_NAMESPACE_CONTROLLER', 'App\Controller');
define('ROOT_APP_NAMESPACE_VIEW', '');

/**
 * Date.
 */
define('ROOT_APP_DATE_ZONE', 'America/Bogota');
define('ROOT_APP_DATE_FORMAT', 'Y-m-d');
define('ROOT_APP_DATE_TIME_FORMAT', ROOT_APP_DATE_FORMAT . ' h:i:s');

/**
 * DataBase.
 */
define('ROOT_APP_DB_HOST', 'localhost');
define('ROOT_APP_DB_DRIVER', 'mysql');
define('ROOT_APP_DB_USER', 'root');
define('ROOT_APP_DB_PASSWORD', '');
define('ROOT_APP_DB_NAME', 'megapelis');
define('ROOT_APP_DB_CHARSET', 'utf8');
define('ROOT_APP_DB_COLLATION', 'utf8_unicode_ci');
define('ROOT_APP_DB_PREFLIX', '');

/**
 * Path.
 */
define('ROOT_APP_PATH_APP', dirname(dirname(__FILE__)));
define('ROOT_APP_PATH_DOMINIO', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ?
    'https://' . $_SERVER['HTTP_HOST'] . '/' :
    'http://' . $_SERVER['HTTP_HOST'] . '/');
define('ROOT_APP_PATH_PROJECT', ROOT_APP_PATH_DOMINIO . ROOT_APP_NAME . '/');

/**
 * Encryption.
 */
define('ROOT_APP_ENCRYPTION_METHOD', "aes-256-cbc");
define('ROOT_APP_ENCRYPTION_BASE', "C9fBxl1EWtYTL1/M8jfstw==");

/**
 * Default.
 */
define('ROOT_APP_DEFAULT_CONTROLLER', 'Home');
define('ROOT_APP_DEFAULT_METHOD', "index");
define('ROOT_APP_DEFAULT_PARAMETERS', []);

/**
 * Escape.
 */
define('ROOT_APP_ESPACE', '-');
define('ROOT_APP_ESPACE_VALUE', '_');

/**
 * View.
 */
define('ROOT_APP_VIEW_PATH_TEMPLATE', ROOT_APP_PATH_APP . "/view/template");

/**
 * Session.
 */
define('ROOT_APP_SESSION_USER', "user");
