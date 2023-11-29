<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";


include "header.php";

//controler danh muc
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
      /*   danhmuccha */
        case 'adddmcha':
            //kiem tra xem nguoi dung co click vao nut add hay khong
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendmcha=$_POST['tendmcha'];
                insert_danhmuc_cha($tendmcha);
                $thongbao="Them thanh cong";
            }
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list.php";
            break;
        case 'listdm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tendmcha=$_POST['tendmcha'];
                insert_danhmuc_cha($tendmcha);
                $thongbao="Them thanh cong";
            }
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list.php";
            break;
        case 'xoadmcha':
            if (isset($_GET['iddmcha'])&&($_GET['iddmcha']>0)) {
                delete_sanpham_danhmuc_danhmuc_cha($_GET['iddmcha']);
                delete_danhmuc_cha($_GET['iddmcha']);
               
                
            }
                $listdanhmuccha=loadall_danhmuc_cha();
                include "danhmuc/list.php";
                break;
        case 'suadmcha':
        if (isset($_GET['iddmcha'])&&($_GET['iddmcha']>0)) {
            $dmcha=loadone_danhmuc_cha($_GET['iddmcha']);
        }
            include "danhmuc/updatecha.php";
            break;
         case 'updatedmcha':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                
                $tendmcha=$_POST['tendmcha'];
                $iddmcha=$_POST['iddmcha'];
                update_danhmuc_cha($iddmcha,$tendmcha); 
                $thongbao="cap thanh cong";
            }
            
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/list.php";
            break;
           /*  danhmuccon */
        case 'adddm':
            //kiem tra xem nguoi dung co click vao nut add hay khong
            if(isset($_POST['themmoib'])&&($_POST['themmoib'])){
                $iddmcha=$_POST['iddmcha'];  
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai,$iddmcha);
                $thongbao="Them thanh cong";
            }
            $listdanhmuc=loadall_danhmuc();
            $listdanhmuccha=loadall_danhmuc_cha();
            include "danhmuc/add.php";
            break;
        /* case 'listdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break; */
        case 'xoadm':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_sanpham_danhmuc($_GET['id']);
                delete_danhmuc($_GET['id']);
                
            }
                $listdanhmuc=loadall_danhmuc();
                $listdanhmuccha=loadall_danhmuc_cha();
                include "danhmuc/add.php";
                break;
        case 'suadm':
        if (isset($_GET['id'])&&($_GET['id']>0)) {
            $dm=loadone_danhmuc($_GET['id']);
        }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                
                $thongbao="cap thanh cong";
            }
            $listdanhmuccha=loadall_danhmuc_cha();
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/add.php";
            break;
        //controler san pham
        case 'addsp':
          //kiem tra xem nguoi dung co click vao nut add hay khong
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
              $iddm=$_POST['iddm'];  
              $tensp=$_POST['tensp'];
              $giasp=$_POST['giasp'];
              $mota=$_POST['mota'];
              $hinh=$_FILES['hinh']['name'];
              $target_dir ="../upload/";
              $target_file =$target_dir. basename($_FILES["hinh"]["name"]); 
              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) { 
              }else { 
              }
              insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
              $thongbao="Them thanh cong";
          }
          $listdanhmuc=loadall_danhmuc();
         /*  var_dump($listdanhmuc); */
          include "sanpham/add.php";
          break;
      case 'listsp':
        if(isset($_POST['listok'])&&($_POST['listok'])){
            $kyw=$_POST['kyw'];
            $iddm=$_POST['iddm'];

        }else{
            $kyw='';
            $iddm=0;
        }
          $listdanhmuc=loadall_danhmuc();
          $listsanpham=loadall_sanpham($kyw,$iddm);
          include "sanpham/list.php";
          break;
      case 'xoasp':
          if (isset($_GET['id'])&&($_GET['id']>0)) {
              delete_sanpham($_GET['id']);
              
          }
              $listsanpham=loadall_sanpham();
              include "sanpham/list.php";
              break;
      case 'suasp':
      if (isset($_GET['id'])&&($_GET['id']>0)) {
          $sp=loadone_sanpham($_GET['id']);
      }
          $listdanhmuc=loadall_danhmuc();
          include "sanpham/update.php";
          break;
      case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tensp=$_POST['tensp'];
                $id=$_POST['id'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $iddm=$_POST['iddm']; 
              $hinh=$_FILES['hinh']['name'];
              $target_dir ="../upload/";
              $target_file =$target_dir. basename($_FILES["hinh"]["name"]); 
              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) { 
              }else { 
              }
                update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm,);
                $thongbao="cap thanh cong";
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham();
            include "sanpham/list.php";
            break;
//TAI KHOAN CONTROLER
   
            case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
            case 'xoatk':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                            delete_taikhoan($_GET['id']);
                            
                        }
                            $listtaikhoan=loadall_taikhoan();
                            include "taikhoan/list.php";
                            break;
            case 'suatk':
                        if (isset($_GET['id'])&&($_GET['id']>0)) {
                                    $tk=loadone_taikhoan($_GET['id']);
                                }
                                    include "taikhoan/update.php";
                                    break;
            case 'updatetk':
                                   if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                        $user=$_POST['user'];
                                        $id=$_POST['id'];
                                        $pass=$_POST['pass'];
                                        $email=$_POST['email'];
                                        $address=$_POST['address'];
                                        $tel=$_POST['tel'];
                                        $role=$_POST['role'];
                                        update_taikhoan($id,$user,$pass,$email,$address,$tel,$role);
                                        $thongbao="cap thanh cong";
                                    }
                                    
                                    $listtaikhoan=loadall_taikhoan();
                                    include "taikhoan/list.php";
                                    break;
                                        
            break;
            case 'dsbl':
                $listbinhluan=loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                    if (isset($_GET['idbl'])&&($_GET['idbl']>0)) {
                        delete_binhluan($_GET['idbl']);
                        
                    }
                    $listbinhluan=loadall_binhluan(0);
                    include "binhluan/list.php";
                        break;
            case 'xoabill':
                            if (isset($_GET['idbill'])&&($_GET['idbill']>0)) {
                                delete_cart_bill($_GET['idbill']);
                            }
                            include "bill/listbill.php"; 
                                break;
            case 'dsbl':
                            $listbinhluan=loadall_binhluan(0);
                            include "binhluan/list.php";
                            break;
        case 'thongke':
                 $listthongke=loadall_thongke();
                include "thongke/list.php";
                break;
        case 'listbill':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){ 
                $kyw=$_POST['kyw']; 
            }else{
                    $kyw="";
                }
            $listbilladmin=loadall_bill_admin($kyw,0); 
            include "bill/listbill.php"; 
            break;
        case 'bieudo':
                $listthongke=loadall_thongke();
                include "thongke/bieudo.php";
                break;


        default:
            include "home.php";
            break;
    }
}else{ 
    include "home.php";
}
include "footer.php";

?>