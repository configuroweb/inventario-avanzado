<?php
$dev_data = array('id' => '1', 'firstname' => 'Mauricio', 'lastname' => 'Sevilla', 'username' => 'configuroweb', 'password' => '0192023a7bbd73250516f069df18b500', 'last_login' => '', 'date_updated' => '', 'date_added' => '');
if (!defined('base_url')) define('base_url', 'http://localhost/inventario/');
if (!defined('base_app')) define('base_app', str_replace('\\', '/', __DIR__) . '/');
if (!defined('dev_data')) define('dev_data', $dev_data);
if (!defined('DB_SERVER')) define('DB_SERVER', "localhost");
if (!defined('DB_USERNAME')) define('DB_USERNAME', "root");
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', "");
if (!defined('DB_NAME')) define('DB_NAME', "inventario");
