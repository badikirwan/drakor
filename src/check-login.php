<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/7/17
 * Time: 11:18 AM
 */

if (isset($_POST)) {

    $username = ( isset($_POST['username']) && !empty($_POST['username']) ) ? $_POST['username'] : FALSE;
    $password = ( isset($_POST['password']) && !empty($_POST['password']) ) ? $_POST['password'] : FALSE;

    $error_msg = '';
    if (empty($username)) {
        $error_msg = 'username tidak boleh kosong';

    } elseif (empty($password)) {
        $error_msg = 'password tidak boleh kosong';

    } else {

        $username = $koneksi->escape_string($username);
        $password = $koneksi->escape_string($password);
        $password = md5($password);

        $query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
        $result = $koneksi->query($query);

        if ($result->num_rows > 0) {

            $_SESSION['login'] = 'logged in';
            $_SESSION['nama'] = ucfirst($username);

            header('location:'.$url. 'modul/admin');
            exit();
        } else {
            $error_msg = 'username dan password tidak dikenal';
        }
    }

    if ($error_msg != '') {
        $_SESSION['error-login'] = $error_msg;
        header('location:'.$url.'login.php');
        exit();
    }
}