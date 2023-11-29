<div class="row mb">
<div class="boxtrai mr">
<form action="index.php?act=billcomfirm" method="post"> 
<div class="row mb">
<div class="boxtitle">THÔNG TIN ĐẶT HÀNG </div>
<div class="row boxcontent billform">
<table>
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
<table>
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
<table>
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
<input type="submit" value="DONG Y ĐẶT HÀNG" name="dongydathang">
</div>
</form>
</div>
<div class="boxphai">
</div>
</div>
