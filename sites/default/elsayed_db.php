<?php

/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */
ini_set('max_execution_time', 0);
define('DS', DIRECTORY_SEPARATOR);
$http_string = "http://";
if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
    $http_string = "https://";
}
$conf['site_offline'] = 0;
$conf['maintenance_mode'] = 0;
$http_host = $_SERVER['HTTP_HOST'];
$base_url = $http_string . $http_host;
if ($dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/')) {
    $base_path = $dir;
    $base_url .= $base_path;
}
$database = 'mohamedelsayed';
$db_host = 'localhost';
$username = 'root';
$password = 'root';
$conf['error_level'] = 0;
if (strpos($http_host, 'mohamedelsayed.net') !== FALSE) {
    $conf['css_gzip_compression'] = TRUE;
    $conf['js_gzip_compression'] = TRUE;
    $database = 'elsayed_mohamedelsayed';
    $username = 'elsayed_mohamede';
    $password = 'vTJep5pfyesE';
} elseif (strpos($http_host, 'localhost') !== FALSE) {
    $conf['css_gzip_compression'] = FALSE;
    $conf['js_gzip_compression'] = FALSE;
    if (PHP_OS == 'Linux') {
        $conf['error_level'] = 2;
    } else {
        $password = '';
        $conf['maintenance_mode'] = 0;
    }
}
$databases = array(
    'default' =>
    array(
        'default' =>
        array(
            'database' => $database,
            'username' => $username,
            'password' => $password,
            'host' => $db_host,
            'port' => '',
            'driver' => 'mysql',
            'prefix' => '',
        ),
    ),
);
