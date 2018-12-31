<?php
    require_once 'function.php';
    $type = $_POST['type'];
    $result = '';
    if($type == 'vnexpress'){
        $result = getContent('https://vnexpress.net/the-thao');
    }
    if($type == 'dantri'){
        $result = getContent2('https://dantri.com.vn/the-thao.rss');
    }
    echo $result;
?>