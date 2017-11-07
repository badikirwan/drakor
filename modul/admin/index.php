<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/7/17
 * Time: 12:37 PM
 */

session_start();
require '../../config.php';

if (!isset($_SESSION['login'])) header('location: ../../login.php');
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Drakor Admin</title>
    <link href="<?php echo $url?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php require '../../themes/header.php';?>
<section id="main">
    <div class="container">
        <div class="row">
            <?php require '../../themes/menu.php';?>
            <?php include '../../ok.php';?>
        </div>
    </div>
</section>
<footer id="footer">
    <p>Copyright AdminStrap, &copy; 2017</p>
</footer>


</body>
</html>