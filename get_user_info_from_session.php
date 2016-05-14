<?php
    session_start();
    $user_id     = $_SESSION['user_id'];
    $user_type   = $_SESSION['user_type'];
    // 入库
    $name = "";
    if(strlen($_SESSION["user_id"]) >= 6){
        $name=substr($user_id, 0, 6)."...";
    }
    echo $name."#".$user_type;
?>