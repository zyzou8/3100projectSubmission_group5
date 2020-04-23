<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

 	$sql = 'UPDATE category SET title="'.$_POST["title"].'",updated='.time().' WHERE id='.$_POST['id'].';';

    if($db->execute_dml($sql)){
		echo '<script> alert("Successful!"); </script>';
	}
}

$detail = $db->execute_dql("SELECT * FROM category WHERE id=".$_GET['id']);
$detail = $detail[0];

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Edit Classfication</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
        <div class="form-group">
            <label>Title</label>
            <input value="<?php echo $detail['title'];?>" name="title" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="type" class="form-control category">
                <option <?php if($detail['type']==1) echo 'selected';?> value="1">Article</option>
                <option <?php if($detail['type']==2) echo 'selected';?> value="2">Commodity</option>
                <option <?php if($detail['type']==3) echo 'selected';?> value="3">Picture</option>
                <option <?php if($detail['type']==4) echo 'selected';?> value="4">Media</option>
                <option <?php if($detail['type']==5) echo 'selected';?> value="5">Q&A</option>
                <option <?php if($detail['type']==6) echo 'selected';?> value="6">Books</option>
            </select>
        </div>
        <div class="form-group">
            <label>Cover</label>
            <p>
                <a target="_blank" href="<?php if(!empty($detail['thumb'])){ echo '../'.$detail['thumb'];}else{?>images/default.png<?php }?>"><img class="thumbContent" src="<?php if(!empty($detail['thumb'])){ echo '../'.$detail['thumb'];}else{?>images/default.png<?php }?>" />
                </a>
            </p>
            <input value="<?php echo $detail['thumb'];?>" name="old_thumb" type="hidden" />
            <input name="thumb" type="file" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>