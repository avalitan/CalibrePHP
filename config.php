<?php
//require_once dirname(__FILE__) . '/vendor/autoload.php';

require dirname(__FILE__) . '/config/default.php';

if (file_exists(dirname(__FILE__) . '/config/local.php') && (php_sapi_name() !== 'cli')) {
	require dirname(__FILE__) . '/config/local.php';
}

$remote_host = array_key_exists('PHP_HOST', $_SERVER) ? $_SERVER['PHP_HOST'] : '';
// Clean hostname, only allow a-z, A-Z, 0-9, -_ chars
$remote_host = preg_replace( '/[^a-zA-Z0-9_-]/', '', $remote_host);
$host_config_file = 'config/.' . $remote_host . '.php';
if (file_exists(dirname(__FILE__) . '/' . $host_config_file) && (php_sapi_name() !== 'cli')) {
	require dirname(__FILE__) . '/' . $host_config_file;
}

$remote_user = array_key_exists('PHP_AUTH_USER', $_SERVER) ? $_SERVER['PHP_AUTH_USER'] : '';
// Clean username, only allow a-z, A-Z, 0-9, -_ chars
$remote_user = preg_replace( '/[^a-zA-Z0-9_-]/', '', $remote_user);
$user_config_file = 'config/.' . $remote_user . '.default.php';
if (file_exists(dirname(__FILE__) . '/' . $user_config_file) && (php_sapi_name() !== 'cli')) {
	require dirname(__FILE__) . '/' . $user_config_file;
}

$user_config_file = 'config/.' . $remote_user . '.' . $remote_host . '.php';
if (file_exists(dirname(__FILE__) . '/' . $user_config_file) && (php_sapi_name() !== 'cli')) {
	require dirname(__FILE__) . '/' . $user_config_file;
}