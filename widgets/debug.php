<div id="console-debug">
    <?php
        $all_vars = get_defined_vars();
    ?>

    <?php //print_r($all_vars); ?>

    <h1>Path Array</h1>
    <pre>
        <?php print_r($path); ?>
    </pre>

    <h1>GET</h1>
    <pre>
        <?php print_r($_GET); ?>
    </pre>

    <h1>POST</h1>
    <pre>
        <?php print_r($_POST); ?>
    </pre>

    <h1>Page Array:</h1>
    <pre>
        <?php print_r($page); ?>
    </pre>

    <h1>View Array:</h1>
    <pre>
        <?php print_r($view); ?>
    </pre>
</div>

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
