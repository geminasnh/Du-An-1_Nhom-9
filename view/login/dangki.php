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
    <form action="index.php?act=dangki" method="POST">
      <h5>ĐĂNG KÍ</h5>
      <div class="lo1">
        <input type="text" name="email" placeholder="Email" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="lo1">
        <input type="text" name="user" placeholder="Tên đăng nhập" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="lo1">
        <input type="password" name="pass" placeholder="Mật khẩu" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
   

    <div class="lo3">
      <input type="submit" value="Đăng kí" name="dangky">
      </div>
      <div class="lo2">
        <p>Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a></p>
      </div>
    </form>
    <h1 class="thongbao">
<?php 
if(isset($thongbao)&&($thongbao!="")){
  echo $thongbao;
}
?>
</h1>
  </div>
  
</html>
</body>
</html>