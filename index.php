<?php 
include 'model/pdo.php';
if(isset($_GET['act'])){
  $act = $_GET['act'];
}else{
  $act = '';
  
}
switch ($act){
  case 'danh-sach':{
  require_once("view/index.php");
  break;
  }
  case 'san-pham':{
    require_once("view/sanpham.php");
    break;
    } 
  case 'tin-tuc':{
    require_once("view/tintuc.php");
    break;
    }
}
?>