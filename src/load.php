<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/7/17
 * Time: 11:02 AM
 */

if (!defined('index')) die('halaman di lindungikk');

define('MAIN_DIR', dirname(dirname(__FILE__)));
define('SRC_DIR', MAIN_DIR . '/src');
define('THEME_DIR', MAIN_DIR . '/themes');
define('MODUL_DIR', MAIN_DIR . '/admin');

if (!file_exists(MAIN_DIR . '/config.php')) die('Maaf.. file config.php tidak ada');
require MAIN_DIR . '/config.php';

if (empty($dbhost)) die();
if (empty($dbuser)) die();
if (empty($dbpass)) die();
if (empty($dbname)) die();

$koneksi = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($koneksi->connect_error) {
    die('Oops.. terjadi kesalahan:'. $koneksi->connect_error);
}