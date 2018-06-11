<?php
    include('../../config/connection.php');

    $id = $_GET['id'];

    $q = "DELETE FROM posts WHERE id = $id";
    $r = mysqli_query($dbc, $q);

    if($r){
        echo "Page deleted!";
    } else{
        echo "There was an error...<br>";
        echo $q.'<b>';
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
