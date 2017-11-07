<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/7/17
 * Time: 5:07 AM
 */
session_start();
require 'config.php';

if ($_SESSION['login']) {
    header('location:'.$url.'modul/admin');
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Drakor Admin</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please sign in</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $url ?>/?page=check-login" method="post" role="form">
                            <fieldset>
                                <?php if (isset($_SESSION['error-login'])) {
                                    echo '<div class="alert alert-danger">'.$_SESSION['error-login'].'</div>';
                                    unset($_SESSION['error-login']);
                                }?>
                                <div class="form-group">
                                    <input class="form-control" name="username" placeholder="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" placeholder="password" type="password">
                                </div>
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
