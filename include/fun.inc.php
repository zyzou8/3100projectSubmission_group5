<?php

if (!function_exists('post')) {
    function post($key){
        return $_POST[$key] ? $_POST[$key] : null;
    }
}

function todate($time){
    return date('Y/m/d H:i:s',$time);
}
