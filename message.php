<?php
require_once('include/config.inc.php');

//commenting system message
if(count($_POST)){

    $result = array();

    if($_SESSION['userid']){

        if(!empty($_POST['name'])&&!empty($_POST['content'])){

            $sql = 'INSERT INTO messages(uid,name,content,created,status) VALUES("'.$_SESSION['userid'].'","'.$_POST['name'].'","'.$_POST['content'].'",'.time().',1);';
            $db->execute_dql($sql);
			$result['status'] = 1;
            $result['msg'] = 'Your comment has been sent！';
            echo json_encode($result);
            exit();

        }else{
            $result['msg'] = 'Please fill in all the required message before submitting！';
            echo json_encode($result);
            exit();
        }

    } else{
        $result['msg'] = 'Please login before commenting！';
        echo json_encode($result);
    }

}

?>