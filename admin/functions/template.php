<?php
    function nav_main($dbc, $pageid){
        $q = "SELECT * FROM pages";
        $r = mysqli_query($dbc, $q);

        while($nav = mysqli_fetch_assoc($r)){ ?>

            <li<?php if($pageid == $nav['id']){echo' class="active"';} ?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label']; ?></a></li>

        <?php }
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
