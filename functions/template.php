<?php
    function nav_main($dbc, $path){
        $q = "SELECT * FROM navigation ORDER BY position ASC";
        $r = mysqli_query($dbc, $q);

        while($nav = mysqli_fetch_assoc($r)){
            $nav['slug'] = get_slug($dbc, $nav['url']);
        ?>

            <li<?php selected($path['call_parts'][0], $nav['slug'], ' class="active"'); ?>><a href="<?php echo $nav['url']; ?>"><?php echo $nav['label']; ?></a></li>

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
