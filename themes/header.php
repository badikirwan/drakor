<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/8/17
 * Time: 2:34 AM
 */
?>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $url?>">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome, Brad</a></li>
                <div class="col-md-4 text-right">
                    <a href="http://localhost/login/login-page.php" class="btn btn-sm btn-danger"><i class="fa fa-user"></i>  Login</a>
                </div>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
