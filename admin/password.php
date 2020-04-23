<?php

include('header.php');

require_once '../include/config.inc.php';

if($_POST){
    $sql = 'UPDATE members SET password="'.md5($_POST['password']).'" WHERE id='.$_SESSION['userid'];
    $db->execute_dml($sql);
    echo '<script> alert("The password is changed successfully!！"); window.location.href="password.php"; </script>';
}

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Change password</li>
</ul>

<div class="container">
    <form method="post">
        <div class="form-group">
            <label>New password</label>
            <input name="password" type="password" class="form-control" required />
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i>Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i>Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>
