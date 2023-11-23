<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>Document</title> <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="login">
    <form action="index.php?act=edit_tk" method="POST">
      <h5>Cập Nhật Tài Khoản</h5>
      <?php 
          if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
             extract($_SESSION['user']);
          }      
      ?>
      <div class="lo1">
        <input type="text" name="email" placeholder="Email" required value = "<?=$email?>">
        <i class='bx bxs-user'></i>
      </div>
      <div class="lo1">
        <input type="text" name="user" placeholder="Tên đăng nhập" required value = "<?=$user?>">
        <i class='bx bxs-user'></i>
      </div>
      <div class="lo1">
        <input type="password" name="pass" placeholder="Mật khẩu" required value = "<?=$pass?>">
        <i class='bx bxs-lock-alt' ></i>
      </div>
   
      <div class="lo1">
        <input type="text" name="address" placeholder="Địa chỉ" required value = "<?=$address?>">
        <i class='bx bxs-user'></i>
      </div>
      <div class="lo1">
        <input type="text" name="tel" placeholder="Điện thoại" required value = "<?=$tel?>"> 
        <i class='bx bxs-user'></i>
      </div>
    <div class="lo3">
      <input type="hidden" name="idtk" value="<?=$idtk?>">
      <input type="submit" value="Cập nhật" name="capnhat">
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