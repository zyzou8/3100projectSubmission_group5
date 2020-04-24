<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

    $thumbExt = pathinfo($_FILES['thumb']['name'],PATHINFO_EXTENSION);
    $thumb = 'uploads/'.time().'.'.$thumbExt;
    move_uploaded_file($_FILES['thumb']['tmp_name'], '../' . $thumb);
    $thumb = empty($_FILES['thumb']['size']) ? $_POST['old_thumb'] : $thumb;

 	$sql = 'UPDATE ads SET title="'.$_POST["title"].'",link_url="'.$_POST["link_url"].'",thumb="'.$thumb.'",content="'.$_POST["content"].'" WHERE id='.$_POST['id'].';';

    if($db->execute_dml($sql)){
		echo '<script> alert("Successful!"); </script>';
	}
}

$detail = $db->execute_dql("SELECT * FROM ads WHERE id=".$_GET['id']);
$detail = $detail[0];

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Edit picture</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
        <div class="form-group">
            <label>Title</label>
            <input value="<?php echo $detail['title'];?>" name="title" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>url</label>
            <input value="<?php echo $detail['link_url'];?>" name="link_url" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Picture Address</label>
            <p>
                <a target="_blank" href="<?php if(!empty($detail['thumb'])){ echo '../'.$detail['thumb'];}else{?>images/default.png<?php }?>">
                    <img class="thumbContent" src="<?php if(!empty($detail['thumb'])){ echo '../'.$detail['thumb'];}else{?>images/default.png<?php }?>" />
                </a>
            </p>
            <input value="<?php echo $detail['thumb'];?>" name="old_thumb" type="hidden" />
            <input name="thumb" type="file" />
        </div>
        <div class="form-group">
            <label>Ads Description</label>
            <textarea type="text" name="content" class="form-control" rows="3"><?php echo $detail['content'];?></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>