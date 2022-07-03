<?php

include("funcs1.php");
$pdo = db_conn();

    $redirect[1] = "menu1.php";
    if( isset($_GET['kanri_flg']) ){
        $id = intval($_GET['kanri_flg']);
        header("Location:$redirect[$kanri_flg]");
    }
    exit();
?>