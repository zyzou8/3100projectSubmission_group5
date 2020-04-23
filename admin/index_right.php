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
    <title></title>
    <link href="common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css" />
</head>

<body>

<div class="default-main">

    <h3>
		Welcome Back - <?php if($_SESSION['usertype']==1) echo 'User';else echo 'Admin'; ?>
	</h3>
    <?php if($_SESSION['usertype']==2){ ?>
        <p>Welcome Back<strong class="text-info"> <?php echo $system['title'];?>Background Management System <small>v1.0</small></strong> Thank You!</p>
    <?php }else{ ?>
        <p>Dear <strong class="text-info"><?php echo $_SESSION['username'];?></strong> User, Welcome to the personal center</p>
    <?php } ?>
    <hr/>

    <div class="row text-center">
        <?php if($_SESSION['usertype']==2) {?>
        <div class="col-xs-4">
            <a target="main" href="settings.php" class="thumbnail">
                <img src="images/default01.png">
                <div class="caption">
                    <h4>System Setting</h4>
                </div>
            </a>
        </div>
        <div class="col-xs-4">
            <a target="main" href="list_category.php" class="thumbnail">
                <img src="images/default02.png">
                <div class="caption">
                    <h4>Classfication</h4>
                </div>
            </a>
        </div>
        <div class="col-xs-4">
            <a target="main" href="list_article.php" class="thumbnail">
                <img src="images/default03.png">
                <div class="caption">
                    <h4>Article Management</h4>
                </div>
            </a>
        </div>
        <?php }?>
    </div>
</div>

<script src="common/js/jquery.min.js"></script>
<script src="common/js/bootstrap.js"></script>

</body>
</html>
