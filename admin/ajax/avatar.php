<?php
    include('../../config/connection.php');

    $id = $_GET['id'];

    $q = "SELECT avatar FROM users WHERE id = $id";
    $r = mysqli_query($dbc, $q);

    $data = mysqli_fetch_assoc($r);
?>

<img src="../uploads/<?php echo $data['avatar']; ?>">

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
