<?php
    $pattern = '/[a-z]/';
    $subject = 'hello la xin chao';
    if (preg_match_all($pattern, $subject, $matches)){
        echo 'Khớp';
    }else{
        echo 'Không khớp';
    }
    echo '<br>';
    echo "<pre>";
    print_r($matches);
    echo "</pre>";
?>