<?php
    # Start Session:
    session_start();

    unset($_SESSION['username']); // Delete the username key

    //session_destroy(); // This would delete all of the session keys

    header('Location: login.php'); // Redirect to login.php
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
