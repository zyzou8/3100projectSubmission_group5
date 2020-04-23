<?php

// 关闭错误报告
error_reporting(0);
//缓存
session_start();


require_once('SqlHelper.class.php');

//（网址，数据库名称，数据库密码，数据库账号）
$db = new SqlHelper('localhost','db','root','root');
//中文乱码
$db->execute_dml('SET NAMES UTF8');


include('fun.inc.php');