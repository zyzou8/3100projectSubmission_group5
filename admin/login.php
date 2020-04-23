<?php

include('header.php');

require_once '../include/config.inc.php';

$system = $db->execute_dql('SELECT *  FROM setting WHERE id=1;');
$system = $system[0];

if (isset($_SESSION['login_user'])) {
    echo '<script>location.href = "index.php";</script>';
}

else {

    if ($_POST) {

        $sql = 'SELECT * FROM members WHERE username="' . $_POST['username'] . '" AND password="' . md5($_POST['password']) . '"';
        $data = $db->execute_dql($sql);

        if (count($data)==1) {

            $row = $data[0];
            $_SESSION['login_user'] = $row;
            $_SESSION['username'] = $row['username'];
            $_SESSION['userid'] = $row['id'];
            $_SESSION['usertype'] = $row['type'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['tel'] = $row['tel'];

            echo '<script>location.href = "index.php";</script>';
        }
        else {
            echo '<script> alert("The user name or password is entered incorrectly, please re-enter!"); window.location.href = "login.php";</script>';
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
        <h3 class="text-center"><strong><?php echo $system['title'];?></strong>Log in</h3>
        <hr>
        <form method="post" class="login-form">
          <div class="form-group">
            <label for="exampleInputEmail1">Account</label>
            <input type="text" name="username" placeholder="Username" class="form-username form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-password form-control">
          </div>
          <button type="submit" class="btn btn-primary">Log in</button>
        </form>
        <hr>
        <p><a href="register.php">Don't have an account yet? Register a new account now ></a></p>
    </div>
</div>

<?php include('footer.php');?>