
<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .mb {
        margin-bottom: 20px;
    }

    .boxtrai {
        
        margin-right: 20px;
    }

    .boxphai {
        
    }

    .boxtitle {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border-radius: 8px 8px 0 0;
        text-align: center;
        margin-bottom: 10px;
    }

    .boxcontent {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        box-sizing: border-box;
    }

    .billform {
        width: 50%;
    }

    .billform input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .table1,
    .table2,
    .table3 {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table1 th,
    .table1 td,
    .table2 th,
    .table2 td,
    .table3 th,
    .table3 td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    .table1 th,
    .table2 th,
    .table3 th {
        background-color: #4caf50;
        color: white;
    }

    .boxcontent3 {
        display: flex;
        justify-content: space-between;
    }

    .boxcontent3 input {
        margin-right: 10px;
    }

    .bill input {
        background-color: #4caf50;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .bill input:hover {
        background-color: #45a049;
    }
</style>


<div class="row mb">
<div class="boxtrai mr">
<form action="index.php?act=billcomfirm" method="post"> 
<div class="row mb">
<div class="boxtitle">THÔNG TIN ĐẶT HÀNG </div>
<div class="row boxcontent billform">
<table  class="table1" >
<?php
if(isset($_SESSION['user'])){
$name=$_SESSION['user']['user'];
$address=$_SESSION['user']['address'];
$email=$_SESSION['user']['email'];
$tel=$_SESSION['user']['tel'];
}else{
$name="";
$address="";
$email="";
$tel="";
}
?>
<tr>
<td> Người đặt hàng </td>
<td><input type="text" name="name" value="<?=$name?>"></td>
</tr>
<tr>
<td>Địa chỉ</td>
<td><input type="text" name="address" value="<?=$address?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?=$email?>"></td>
</tr>
<tr>
<td> Điện thoại </td>
<td><input type="text" name="tel" value="<?=$tel?>"></td>
</tr>
</table>
</div>
</div>
<div class="row mb">
<div class="boxtitle"> PHƯƠNG THỨC THANH TOÁN </div>
<div class="row boxcontent3 ">
<table  class="table2">
<tr>
<td><input type="radio" name="pttt" checked> Trả tiền khi nhận hàng </td>
<td><input type="radio" name="pttt"> Chuyển khoản ngân hàng </td> 
<td><input type="radio" name="pttt"> Thanh toán online </td>
</tr>
</table>
</div>
</div>
<div class="row mb">
<div class="boxtitle"> THÔNG TIN GIỎ HÀNG </div>
<div class="row boxcontent cart">
<table class="table3">
<tr>
<th>Hình </th>
<th>Sản phẩm </th>
<th> Đơn giá</th>
<th> Số lượng </th>
<th>Thành tiền </th>
</tr>
<?php viewcart2();?>
</table>
</div>
</div>
<div class="row mb bill">
<input type="submit" value="DồNG Ý ĐẶT HÀNG" name="dongydathang">
</div>
</form>
</div>
<div class="boxphai">
</div>
</div>

