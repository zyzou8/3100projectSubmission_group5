<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

    if(!empty($_FILES['thumb']['name'])) {
        $thumbExt = pathinfo($_FILES['thumb']['name'], PATHINFO_EXTENSION);
        $thumb = 'uploads/' . time() . '.' . $thumbExt;
        move_uploaded_file($_FILES['thumb']['tmp_name'], '../' . $thumb);
    }

 	$sql = 'INSERT INTO article(title,description,thumb,content,category,status,created) 
    VALUES("'.$_POST['title'].'","'.$_POST['description'].'","'.$thumb.'","'.htmlspecialchars($_POST['content']).'","'.$_POST['category'].'",1,'.time().');';

 	if($db->execute_dml($sql)){
		echo '<script> alert("Successful!"); </script>';
	}
}

$category=$db->execute_dql('SELECT * FROM category WHERE type=1');

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Add Article</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" required class="form-control" />
        </div>
        <div class="form-group">
            <label>Type</label>
            <select class="form-control category" name="category">
                <?php if(empty($category)) { ?>
                    <option>There is no data, please add</option>
                <?php }else { ?>
                    <?php foreach($category as $cate) {?>
                        <option value="<?php echo $cate['id'];?>"><?php echo $cate['title'];?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" type="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Cover</label>
            <input name="thumb" type="file" />
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="content" type="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>

<script src="common/kindeditor-4.1.10/kindeditor-min.js"></script>

<script>
    var editor;
    KindEditor.ready(function (K) {
        editor = K.create('textarea[name="content"]', {
            uploadJson: 'common/kindeditor-4.1.10/php/upload_json.php',
            fileManagerJson: 'common/kindeditor-4.1.10/php/file_manager_json.php',
            allowFileManager: true,
            items : [
                'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', '|', 'emoticons', 'image', 'link','fullscreen'],
            afterBlur: function () {
                this.sync();
            }
        });
    });
</script>

