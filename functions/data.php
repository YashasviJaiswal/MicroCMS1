<?php
    function data_setting_value($dbc, $id){
        $q = "SELECT * FROM settings WHERE id = '$id'";
        $r = mysqli_query($dbc, $q);

        $data = mysqli_fetch_assoc($r);

        return $data['value'];
    }

    function data_post_type($dbc, $id){
        $q = "SELECT * FROM post_types WHERE id = '$id'";
        $r = mysqli_query($dbc, $q);

        $data = mysqli_fetch_assoc($r);

        return $data;
    }

    # Page Setup:
    function data_post($dbc, $id){
        if(is_numeric($id)){
            $cond = "WHERE id = '$id'";
        } else{
            $cond = "WHERE slug = '$id'";
        }

        $q = "SELECT * FROM posts $cond";
        $r = mysqli_query($dbc, $q);

        $data = mysqli_fetch_assoc($r);

        $data['body_nohtml'] = strip_tags($data['body']);

        if($data['body'] == $data['body_nohtml']){
            $data['body_formatted'] = '<p>'.$data['body'].'</p>';
        } else{
            $data['body_formatted'] = $data['body'];
        }

        return $data;
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
