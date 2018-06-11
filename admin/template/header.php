<?php
    # Start Session:
    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
?>

<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title><?php echo $page['title'].' | '.$site_title; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>
    </head>

    <body>
        <div id="wrap">
            <?php include('template/navigation.php'); // Main Navigation ?>

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
