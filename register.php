<?php
    require_once("dal/dal_api.php");
	$user_id  = $_POST['nick_name'];
    $username = "未知";
    $passwd   = $_POST['pwd'];
    $type     = "s";
    $tel      = "未知";
    $qq       = "未知";
    // 入库
    $dal_api  = new nc_dal_adapter();
    $ret      = $dal_api ->get_user_name($user_id);
    if($ret != "err"){
        echo '<html>'; 
        echo '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>'; 
        echo "<script type='text/javascript'>alert('注册失败，该用昵称已被使用!');</script>";
        echo "<script type='text/javascript'>window.location.href='index.php'</script>";
        echo '</html>'; 
    }else{
        $reg_ret = $dal_api -> reg_user($user_id, $username, $passwd, $tel, $qq, $type);
        if($reg_ret == True){
            echo '<html>';  
            echo '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>'; 
            echo "<script type='text/javascript'>alert('注册成功!');</script>";
            echo "<script type='text/javascript'>window.location.href='index.php'</script>";
            echo '</html>'; 
        }else{
            echo '<html>'; 
            echo '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>'; 
            echo "<script type='text/javascript'>alert('注册失败，系统错误，请联系客服!');</script>";
            echo "<script type='text/javascript'>window.location.href='index.php'</script>";
            echo "<script type='text/javascript'></script>";
            echo '</html>'; 
        }
    }

?>