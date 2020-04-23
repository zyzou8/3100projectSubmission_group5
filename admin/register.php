<?php

include('header.php');

require_once '../include/config.inc.php';

$system = $db->execute_dql('SELECT *  FROM setting WHERE id=1;');
$system = $system[0];


if (isset($_SESSION['login_user'])) {
    echo '<script> location.href = "index.php"; </script>';
}
else {
    if ($_POST) {
        if ($_POST['password']  != $_POST['password2']) {
            echo '<script> alert("The two passwords are different!"); window.location.href = "register.php"; </script>';
        }
        else {
            $check = $db->execute_dql('SELECT * FROM members WHERE username="'.$_POST['username'].'"');
            $thumb = 'admin/images/headpic.png';
            if($check) {
                echo '<script> alert("This user name already exists！"); window.location.href = "register.php"; </script>';
            }else{
                $sql = 'INSERT INTO members(type,username,password,thumb,created)
                VALUES(1,"'.$_POST['username'].'","'.md5($_POST['password']).'","'.$thumb.'","'.time().'")';

                $db->execute_dql($sql);
                echo '<script> alert("registration success!!"); window.location.href = "login.php";</script>';
            }

        }
    }
}

?>

<style>
    html,body {
        height: 100%;
        background-image: url(../images/reg-bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100%;
        min-width: 100%;
        background-position: 50%;
        position: absolute;
        z-index: 1;}
</style>

<div class="container login-box">
    <div class="box">
        <p class="text-center"><a href="/">Return</a></p>
        <h3 class="text-center"><strong><?php echo $system['title'];?></strong> User registration</h3>
        <hr>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">account</label>
                <input type="text" required name="username" class="form-control" placeholder="account" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">password</label>
                <input type="password" required name="password" class="form-control" placeholder="password" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">check password</label>
                <input type="password" required name="password2" class="form-control" placeholder="check password" />
            </div>
            <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i> Submit</button>
            <button class="btn btn-default" type="reset"><i class="glyphicon glyphicon-remove"></i> Reset</button>
        </form>
        <hr>
        <p><a href="login.php">Already have an account? Please log in ></a></p>
    </div>
</div>

<?php include('footer.php');?>
