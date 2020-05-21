<?php

$rand = rand(1,100);
$url = 'https://cdn.jsdelivr.net/gh/dateolive/images/images/'.$rand.'.jpg';
header("Location:".$url);
?>
