<?php
require_once('config.php');
$jwt = (new JWT());
require_once("DBconnect.php");

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

  $q = $db->prepare("SELECT * FROM forum_users WHERE username=:user AND password=:pass");
  $q->execute(array(
    'user' => $_POST['username'],
    'pass' => md5($_POST['password'])
  ));
  $_select = $q->fetch();
  if (isset($_select['id'])) {
    $_SESSION['username'] = $_select['username'];
    $_SESSION['id'] = $_select['id'];

    // JWT İMP
    $payload = [
      'id' => $_select['id'],
      'username' => $_select['username'],
      'iss' => 'blacksea.cor',
      'aud' => 'blacksea.onion'
    ];
    $token = $jwt->generate($payload);
    setcookie("auth_type", $token);

    header("Location: index.php");
    exit;
  } else {
    echo '<h1>wrong username or pass</h1>';
    echo md5("admin");
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
          <input type="password" name="password" placeholder="Password" class="form-control inp" />
          <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>
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