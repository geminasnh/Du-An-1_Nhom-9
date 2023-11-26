<?php 
session_start();
include ("header.php");
include ("../model/taikhoan.php");
include ("../model/pdo.php");
// controller
if(isset($_GET['act'])){
$act = $_GET['act'];
switch ($act){
  case 'dangki':
   if(isset($_POST['dangky'])&&($_POST['dangky'])){
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    insert_taikhoan($email, $user, $pass);
    $thongbao = "Bạn đã đăng ký thành công";
   }
    include ("login/dangki.php");
    break;
    case 'dangnhap':
      if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $check_user=check_user($user, $pass);
        if(is_array($check_user)){
          $_SESSION['user'] = $check_user;
          // $thongbao = "Bạn đã đăng nhập thành công";
        
        }else{
          $thongbao = "Tai khoản không tồn tại vui lòng kiểm tra lại";
        }
      }
      include ("login/dangnhap.php");
      break;
      case 'edit_tk':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $tel = $_POST['tel'];
          $idtk = $_POST['idtk'];
          update_taikhoan($idtk,$email, $user, $pass,$tel,$address);
          $_SESSION['user'] = check_user($user,$pass);
        
       
            $thongbao = "Bạn đã cập nhập thành công";
          
       
        }
        include ("login/edit_tk.php");
        break;
        case 'quenmk':
          if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
            $email = $_POST['email'];
            $check_email=check_email($email);
         if(is_array($check_email)){
$thongbao = "Mật khẩu của bạn là: ".$check_email['pass'];
         }else{
          $thongbao = "Email này không tồn tại";
         }
             
          }
          include ("login/quenmk.php");
          break;
    default:
    include ("home.php");
    break;
}
}else{
  include ("home.php");
  include ("login/dangnhap.php");
  include ("login/dangki.php");
}



include ("footer.php");
?>