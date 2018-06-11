<?php
    include('../../config/connection.php');

    $list = $_GET['list'];

    //print_r($list);

    foreach($list as $position => $id){
        $q = "UPDATE navigation SET position = $position WHERE id = $id";
        $r = mysqli_query($dbc, $q);

        echo mysqli_error($dbc);
    }
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
