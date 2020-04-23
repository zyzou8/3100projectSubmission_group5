<?php

    header('content-type:text/html;charset=utf8');
    require_once('include/config.inc.php');

    $router = 'index';

    if(isset($_GET['m']))
    $router = $_GET['m'];
    include('website/'.$router.'.html');

?>