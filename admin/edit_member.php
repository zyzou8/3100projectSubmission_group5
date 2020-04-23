<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

 	$sql = 'UPDATE members SET username="'.$_POST["username"].'", email="'.$_POST["email"].'", updated='.time().' WHERE id='.$_POST['id'].';';

	if($db->execute_dml($sql)){
		echo '<script> alert("Successful!"); </script>';
	}
}

$detail = $db->execute_dql("SELECT * FROM members WHERE id=".$_GET['id']);
$detail = $detail[0];

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Edit User Information</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
        <div class="form-group">
            <label>Account</label>
            <input value="<?php echo $detail['username'];?>" name="username" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input value="<?php echo $detail['email'];?>" name="email" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submint</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>
