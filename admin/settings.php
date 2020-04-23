<?php

include('header.php');

require_once('../include/config.inc.php');

if ($_POST) {
    $title = post('title');
    $keywords = post('keywords');
    $description = post('description');
    $email = post('email');
    $tel = post('telephone');
    $copy = post('copy');
    $address = post('address');
    $master = post('master');
    $url = post('url');

    $sql = 'UPDATE setting SET title="' . $title . '",keywords="' . $keywords . '",description="' . $description . '",email="' . $email . '",tel="' . $tel . '",copyright="' . $copy . '",address="' . $address . '", url="' . $url . '" WHERE id=1';

    if($db->execute_dml($sql)){
        echo'<script> alert("Successful!!"); </script>';
    }
}

$config = $db->execute_dql('SELECT * FROM setting WHERE id=1');
$config = $config[0];

?>

<ul class="breadcrumb">
    <li><a href="#">Homepage</a></li>
    <li class="active">System information</li>
</ul>

<div class="container">
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label>Website name</label>
            <input name="title" type="text" class="form-control" placeholder="Website name" value="<?php echo $config['title'];?>">
        </div>
        <div class="form-group">
            <label>Admin</label>
            <input name="master" type="text" class="form-control" placeholder="Admin" value="<?php echo $config['master'];?>">
        </div>
        <!--<div class="form-group">
            <label>key word </label>
            <input type="text" name="keywords" class="form-control" value="<?php echo $config['keywords'];?>" placeholder="key word">
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="text" name="description" class="form-control" value="<?php echo $config['description'];?>" placeholder="description">
        </div>-->
        <div class="form-group">
            <label>Copyright</label>
            <input type="text" name="copy" class="form-control" value="<?php echo $config['copyright'];?>" placeholder="Copyright">
        </div>
        <!--<div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $config['address'];?>" placeholder="Address">
        </div>
        <div class="form-group">
            <label>Tel</label>
            <input type="text" name="telephone" class="form-control" value="<?php echo $config['tel'];?>" placeholder="Tel">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $config['email'];?>" placeholder="Email">
        </div>
        <div class="form-group">
            <label>url</label>
            <input type="text" name="url" class="form-control" value="<?php echo $config['url'];?>" placeholder="url">
        </div>-->
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i>Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </div>
    </form>
</div>

<?php include('footer.php');?>
