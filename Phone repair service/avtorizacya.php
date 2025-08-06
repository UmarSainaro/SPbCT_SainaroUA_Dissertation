<?php
$_POST['login'];
$_POST['password'];
      if($_POST['login'] && $_POST['password'] == "admin"){
        require 'users.php';
      }else {
        require 'admin.php';
        echo "Логин или пароль неправильный";
      }

?>
