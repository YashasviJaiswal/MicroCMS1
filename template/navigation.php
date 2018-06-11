<nav class="navbar navbar-default" role="navigation">
    <?php if($debug == 1){ ?>
        <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
    <?php } ?>

    <div class="container">
        <ul class="nav navbar-nav">
            <?php nav_main($dbc, $path); ?>

            <!--<li><a href="#">FAQs</a></li>
            <li><a href="#">Contact</a></li>-->
        </ul>
    </div>
</nav><!-- End nav -->

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
