<?php

require_once('../include/config.inc.php');

$system = $db->execute_dql('SELECT *  FROM setting WHERE id=1;');
$system = $system[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $system['title'];?></title>
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <link href="common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css" />
</head>

<body>