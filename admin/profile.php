<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST) {

    $sql = 'UPDATE members SET username="'.$_POST['username'].'", email="'.$_POST['email'].'" WHERE id='.$_SESSION['userid'];
    $db->execute_dml($sql);
    echo '<script>location.href = "profile.php";</script>';
}

$user = $db->execute_dql('SELECT * FROM members WHERE id='.$_SESSION['userid']);
$user = $user[0];

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Personal Information</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $user['username'];?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $user['email'];?>">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i>Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i>Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>
