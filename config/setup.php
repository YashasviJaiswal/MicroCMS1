<?php
    // Setup File
    error_reporting(0);

    # Database Connection:
    include('config/connection.php');

    # Constants:
    DEFINE('D_TEMPLATE', 'template');
    DEFINE('D_VIEW', 'views');

    # Functions:
    include('functions/sandbox.php');
    include('functions/data.php');
    include('functions/template.php');

    # Site Setup:
    $debug = data_setting_value($dbc, 'debug-status');

    $path = get_path();

    $site_title = 'MicroCMS 1';

    if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == ''){
        //$path['call_parts'][0] = 'home'; // Set $path['call_parts'][0] to equal the value given in the URl
        header('Location: home');
    }

    # Page Setup:
    $page = data_post($dbc, $path['call_parts'][0]);
    $view = data_post_type($dbc, $page['type']);
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
