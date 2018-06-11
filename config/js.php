<?php // JavaScript File ?>

<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $("#console-debug").hide();

        $("#btn-debug").click(function(){
            $("#console-debug").toggle();
        });
    });
</script>

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
