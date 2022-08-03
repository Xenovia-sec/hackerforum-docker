<?php
require_once("DBconnect.php");

session_start();

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
  if ($_POST['username'] <> '' && $_POST['password'] <> '' && $_POST['email'] <> '') {
    $q = $db->prepare("INSERT INTO forum_users(username,password,email,role) VALUES (:username,:password,:email,:role)");
    $creds = array(
      "username" => htmlspecialchars($_POST['username']),
      "password" => md5($_POST['password']),
      "email" => htmlspecialchars($_POST['email']),
      "role" => 'rookie',
    );
    if ($result = $q->execute($creds)) {
      header("Location: login.php");
      exit;
    } else {
      echo '<h1>wrong username or pass</h1>';
    }
  }else {
    echo '<h1>Empty Inputs</h1>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Black Sea Forum</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="assets/fonts/Cracked Code.ttf" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="assets/style.css">

</head>

<body>
  <div class="container">
    <div id="login-box" style=" border-radius:5%;border-color:red; background-color:rgb(20,20,20) ;">
      <div class="logo">
        <img height="250px" width="250px" src="assets/img/jabami.gif" class="img img-responsive center-block" style="border-radius:25px;" />
        <img src="assets/img/forum-logo.gif" class="img img-responsive center-block" style="margin-top: 2rem;">
      </div>
      <div class="controls">
        <form action="" method="post">
          <input type="text" name="username" placeholder="Username" class="form-control inp" />
          <input type="email" name="email" placeholder="E-Mail" class="form-control inp" />
          <input type="password" name="password" placeholder="Password" class="form-control inp" />
          <button type="submit" class="btn btn-default btn-block btn-custom">Register</button>
          <a href="flag.html" class="forgot-password">Forgot password?</a>
        </form>
      </div>
      <div class="txt">
        <p>© 2022 BLACK SEA FORUM ALL RIGHT RESERVED.</p>
      </div>
    </div>
  </div>
  <div id="particles-js"></div>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
  <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
  <script src="assets/script.js"></script>

</body>

</html>
