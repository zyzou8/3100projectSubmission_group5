<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

 	$sql = 'UPDATE messages SET content="'.$_POST["content"].'",updated='.time().' WHERE id='.$_POST['id'].';';

	if($db->execute_dml($sql)){
		echo '<script> alert("Successful!"); </script>';
	}
}

$detail = $db->execute_dql("SELECT * FROM messages WHERE id=".$_GET['id']);
$detail = $detail[0];

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Edit Comment</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
        <div class="form-group">
            <label>Message content</label>
            <textarea type="text" name="content" rows="5" class="form-control"><?php echo $detail['content'];?></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>