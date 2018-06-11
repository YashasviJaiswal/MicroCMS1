<?php
    // Setup File

    error_reporting(0);

    # Database Connection:
    include('../config/connection.php');

    # Constants:
    DEFINE('D_TEMPLATE', 'template');

    # Functions:
    include('functions/data.php');
    include('functions/template.php');
    include('functions/sandbox.php');

    # Site Setup:
    $debug = data_setting_value($dbc, 'debug-status');

    $site_title = 'MicroCMS 1';

    if(isset($_GET['page'])){
        $page = $_GET['page']; // Set $pageid to equal the value given in the URl
    } else{
        $page = 'dashboard'; // Set $pageid equal to 1 or the Home Page
    }

    # Page Setup:
    include('config/queries.php');

    # User Setup:
    $user = data_user($dbc, $_SESSION['username']);
?>

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
