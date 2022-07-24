<?php
require_once("auth_control.php");
require_once("DBconnect.php");
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $q = $db->prepare("INSERT INTO forum_users(username,password,email,image,role) VALUES (:username,:password,:email,:image,:role)");
    $q->execute([
        "username"=> htmlspecialchars($_POST['username']),
        "password"=> md5($_POST['password']),
        "email"=> htmlspecialchars($_POST['email']),
        "image"=> htmlspecialchars($_POST['image']),
        "role"=> htmlspecialchars($_POST['role']),
    ]);
}
include("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Add User</title>
</head>
<body>
<div class="content-body">
<div class="container">
    <form action="#" method="post">
        <div class="form-wrapper shadow p-3 mb-5 bg-body rounded m-4 p-5">
        <div class="mb-3">
            <h4>Add User</h4>
        </div>
        <hr>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">E-mail</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">Image Path</label>
            <input type="text" class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black;">Role</label>
            <input type="text" class="form-control" name="role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
<script type="text/javascript" src="hack-karadenizzzrr/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
document.addEventListener( 'DOMContentLoaded',function()
{
 CKEDITOR.replace( 'myeditor' );	
});
</script>
</body>
</html>