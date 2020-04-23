<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

    $thumbExt = pathinfo($_FILES['thumb']['name'],PATHINFO_EXTENSION);
    $thumb = 'uploads/'.time().'.'.$thumbExt;
    move_uploaded_file($_FILES['thumb']['tmp_name'], '../' . $thumb);
    $thumb = empty($_FILES['thumb']['size']) ? $_POST['old_thumb'] : $thumb;

    $sql = 'UPDATE article SET title="'.$_POST['title'].'", description="'.$_POST["description"].'",thumb="'.$thumb.'",category="'.$_POST["category"].'",content="'.htmlspecialchars($_POST["content"]).'",updated='.time().' WHERE id='.$_POST['id'].';';

    if($db->execute_dml($sql)){
        echo '<script> alert("Successful!"); </script>';
    }
}

$detail = $db->execute_dql("SELECT * FROM article WHERE id=".$_GET['id']);
$detail = $detail[0];

$category=$db->execute_dql("SELECT * FROM category WHERE type=1");

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Edit Article</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
        <div class="form-group">
            <label>标题</label>
            <input value="<?php echo $detail['title'];?>" name="title" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>分类</label>
            <select name="category" class="form-control category">
                <?php if(empty($category)) { ?>
                    <option>There is no data, please add</option>
                <?php }else { ?>
                    <?php foreach($category as $cate) {?>
                        <option value="<?php echo $cate['id'];?>" <?php echo $detail['category'] == $cate['id'] ? 'selected' : '' ?>>
                            <?php echo $cate['title'];?>
                        </option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>描述</label>
            <textarea name="description" type="text" class="form-control" ><?php echo $detail['description'];?></textarea>
        </div>
        <div class="form-group">
            <label>封面</label>
            <p>
                <a target="_blank" href="<?php if(!empty($detail['thumb'])){ echo '../'.$detail['thumb'];}else{?>images/default.png<?php }?>"><img class="thumbContent" src="<?php if(!empty($detail['thumb'])){ echo '../'.$detail['thumb'];}else{?>images/default.png<?php }?>" />
                </a>
            </p>
            <input value="<?php echo $detail['thumb'];?>" name="old_thumb" type="hidden" />
            <input name="thumb" type="file" />
        </div>
        <div class="form-group">
            <label>内容</label>
            <textarea name="content" type="text" class="form-control" ><?php echo $detail['content'];?></textarea>
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