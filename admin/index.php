<?php

include('header.php');

session_start();

if(!isset($_SESSION['login_user'])){
     echo '<script> window.location.href="login.php"; </script>';
     exit();
}

?>
<link rel="stylesheet" href="css/index.css" />

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../admin/index.php">
				<span>Website Background Management System</span>
			</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a><?php if($_SESSION['usertype']==1) echo '<span class="badge">member</span>';else echo '<span class="badge">Admin</span>'; ?></a></li>
                <li><a href="/">Website Front Desk</a></li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span>Welcome,<?php echo $_SESSION['username'];?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if($_SESSION['usertype']==2){?>
                            <li><a target="main" href="settings.php">Website settings</a></li>
                        <?php }?>
                        <li><a target="main" href="profile.php"></i>Personal Information</a></li>
                        <li><a target="main" href="password.php"></i>Security Settings</a></li>
                        <li><a id="logoutBtn" href="logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main-container">
    <div class="sidebar">
        <ul class="nav nav-list nav-admin">
            <?php if($_SESSION['usertype']==2) {?>
                <li class="info"><a href="javascript:;"><i class="icon-box"><img src="images/icon01.png" /></i><span class="menu-text">Classfication</span></a></li>
                <ul class="small_tabs">
                    <li>
                        <a target="main" href="list_category.php"><i class="icon-box"></i>Data Class</a>
                    </li>
                    <li>
                        <a target="main" href="add_category.php"><i class="icon-box"></i>New Class</a>
                    </li>
                </ul>
                <li class="info"><a href="javascript:;"><i class="icon-box"><img src="images/icon02.png" /></i><span class="menu-text">Article Management</span></a></li>
                <ul class="small_tabs">
                    <li>
                        <a target="main" href="list_article.php"><i class="icon-box"></i>Article List</a>
                    </li>
                    <li>
                        <a target="main" href="add_article.php"><i class="icon-box"></i>Add Article</a>
                    </li>
                </ul>
                <li class="info"><a href="javascript:;"><i class="icon-box"><img src="images/icon06.png" /></i><span class="menu-text">User Management</span></a></li>
                <ul class="small_tabs">
                    <li>
                        <a target="main" href="list_member.php"><i class="icon-box"></i>User List</a>
                    </li>
                </ul>
				<li class="info"><a href="javascript:;"><i class="icon-box"><img src="images/icon05.png" /></i><span class="menu-text">Manage Message</span></a></li>
				<ul class="small_tabs">
				    <li>
				        <a target="main" href="list_message.php"><i class="icon-box"></i>Message List</a>
				    </li>
				</ul>
                <li class="info"><a href="javascript:;"><i class="icon-box"><img src="images/icon08.png" /></i><span class="menu-text">Handle Picture</span></a></li>
                <ul class="small_tabs">
                    <li>
                        <a target="main" href="list_ads.php"><i class="icon-box"></i>Picture List</a>
                    </li>
                    <li>
                        <a target="main" href="add_ads.php"><i class="icon-box"></i>Add Picture</a>
                    </li>
                </ul>
            <?php }?>
        </ul>
        <ul class="nav nav-list nav-user">
            <?php if($_SESSION['usertype']==1) {?>
                <li class="info"><a target="main" href="my_message.php"><i class="icon-box"><img src="images/icon05.png" /></i><span class="menu-text">My Comment</span></a></li>
            <?php }?>
        </ul>
    </div>

    <div class="main-content">
        <iframe name="main" style="width:100%; height:100%;" src="index_right.php" frameborder="0"></iframe>
    </div>

</div>

<?php include('footer.php');?>

<script>
    $(document).ready(function(){
        $(".info").click(function() {
            $(this).siblings().removeClass("intro");
            $(this).siblings().find(".glyphicon").removeClass("glyphicon-chevron-down");
            $(this).toggleClass("intro");
            $(this).find(".glyphicon").toggleClass("glyphicon-chevron-down");
            $(".small_tabs").not($(this).next()).stop(true).slideUp(0);
            $(this).next().stop(true).slideToggle(0);
        });
    });
</script>