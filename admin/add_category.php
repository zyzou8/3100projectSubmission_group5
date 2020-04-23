<?php

include('header.php');

require_once('../include/config.inc.php');

if($_POST){

    $check = $db->execute_dql('SELECT * FROM category WHERE title="'.$_POST['title'].'"');
    if($check) {
        echo '<script> alert("the classfication is already exit"); </script>';
    }
    else{
        $sql = 'INSERT INTO category(title,status,created)
        VALUES("'.$_POST['title'].'",1,'.time().');';

        if($db->execute_dml($sql)){
            echo '<script> alert("Successful!"); </script>';
        }
  }
}
?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">Add Class</li>
</ul>

<div class="container">
    <form enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" require class="form-control" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>