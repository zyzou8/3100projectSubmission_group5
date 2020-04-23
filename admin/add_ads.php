<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

    if(!empty($_FILES['thumb']['name'])) {
        $thumbExt = pathinfo($_FILES['thumb']['name'], PATHINFO_EXTENSION);
        $thumb = 'uploads/' . time() . '.' . $thumbExt;
        move_uploaded_file($_FILES['thumb']['tmp_name'], '../' . $thumb);
    }

 	$sql = 'INSERT INTO ads(title,link_url,thumb,content,status,created)
    VALUES("'.$_POST['title'].'","'.$_POST['link_url'].'","'.$thumb.'","'.$_POST['content'].'",1,'.time().');';

	if($db->execute_dml($sql)){
		echo '<script> alert("Successful!!"); </script>';
	}
}

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Add Picture</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>url</label>
            <input name="link_url" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Picture</label>
            <input name="thumb" type="file" required />
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="content" type="text" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>