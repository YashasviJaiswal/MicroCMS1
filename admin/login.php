<?php
    # Start Session:
    session_start();

    # Database Connection:
    include('../config/connection.php');

    if($_POST){
        $q = "SELECT * FROM users where email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
        $r = mysqli_query($dbc, $q);

        if(mysqli_num_rows($r) == 1){
            $_SESSION['username'] = $_POST['email'];
            header('Location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Admin Login</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>
    </head>

    <body>
        <div id="wrap">
            <?php //include('template/navigation.php'); // Main Navigation ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <strong>Login</strong>
                            </div><!-- End panel-heading -->

                            <div class="panel-body">
                                <form action="login.php" method="post" role="form">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                    </div>

                                    <!--
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div>
                                    -->

                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div><!-- End panel-body -->
                        </div><!-- End panel -->
                    </div><!-- End column -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End wrap -->

        <?php //include('template/footer.php'); // Page Footer ?>

        <?php
            /*if($debug == 1){
                include('widgets/debug.php');
            }*/
        ?>
    </body>

</html>

<!--
<footer>
    <p>
        &copy;
        <span id="copyright">
            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
        </span>
        | MicroCMS 1 is created by <a href="https://about.me/YashasviJaiswal" target="_blank">Yashasvi Jaiswal</a>.
    </p>
</footer>
-->
