<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/7/17
 * Time: 11:02 AM
 */

if (!defined('index')) die('Halaman ini dilindungi');

$paging = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

switch ($paging) {
    case 'check-login';
        require SRC_DIR . '/check-login.php';
        break;
    case 'logout';
        session_destroy();
        header('location:'.$url.'login.php');
        break;
    case 'ok';
        include '../modul/admin/pages.php';
        break;
    default:
        header('location:'.$url.'modul/admin');
        break;
}