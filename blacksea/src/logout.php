<?php
setcookie("auth_type", "", time() - 3600);
header("Location: login.php");
?>