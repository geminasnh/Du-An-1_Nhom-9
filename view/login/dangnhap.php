<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>Document</title> <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="login">
    <form action="index.php?act=dangnhap" method="POST">
      <h5>ĐĂNG NHẬP</h5>
      <?php 
        if(isset($_SESSION['user'])){
          extract($_SESSION['user']);
       
?>
<div class="lo1">
    xinchao </br>
    <?=$user?>
      </div>
      <div class="lo1">
       
      <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
      <li><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li>
      
      <li><a href="">Đăng nhập admin</a></li>
      <li><a href="index.php?act=thoat">Thoát</a></li>  
      </div>

<?php

        } else{

           
      ?>
      <div class="lo1">
        <input type="text" name="user"  placeholder="Tên đăng nhập" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="lo1">
        <input type="password" name="pass" placeholder="Mật khẩu" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember">
        <label><input type="checkbox">Ghi nhớ tôi  </label>
        <a href="#">Quên mật khẩu</a>
      </div>
      <div class="lo3">
      <input type="submit" value="Đăng nhập" name="dangnhap">
      </div>
      <div class="lo2">
        <p>Bạn chưa có tài khoản? <a href="index.php?act=dangki">Đăng kí</a></p>
      </div>
    </form>
    <?php }  ?>
  </div>
</html>
</body>
</html>