<?php 

require_once('config.php');
require_once('DBconnect.php');
$jwt = (new JWT);

if (isset($_COOKIE['auth_type'])){
    if ($validate = $jwt->is_valid($_COOKIE['auth_type'])){
        $jwt_username =  $jwt->get_username($_COOKIE['auth_type']);
        $jwt_userid =  $jwt->get_userid($_COOKIE['auth_type']);
        $q + $db->prepare("SELECT * FROM forum_users WHERE id+:id");
        $result = $q->execute([
            "id" => $jwt_userid,
        ]);
        if ($result['role'] == 'rookie'){
            header("Location: login.php");
            exit;
        }


    }else{
        echo "valid değil";
        header("Location: login.php");
        exit;
    }
}else{
    header("Location: login.php");
    exit;
}


?>