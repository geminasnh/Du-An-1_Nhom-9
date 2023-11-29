<div class="boxtrai mr">
<div class="row mb ">
<div class="boxtitle">CAM ON</div>
<div class="row boxcontent" style="text-align:center">
<h2>Cám ơn quý khách đã đặt hàng! </h2>
</div>
</div>
<?php
if(isset($bill)&&(is_array($bill))){
    extract($bill);
}
?>
<div class="row mb ">
<div class="boxtitle"> THÔNG TIN ĐƠN HÀNG </div> 
<div class="row boxcontent" style="text-align:center">
<li> - Mã đơn hàng: DAM-<?=$bill['id'];?></li>
<li> - Ngày đặt hàng:  <?=$bill['ngaydathang'];?> </li>
<li> - Tổng đơn hàng:  <?=$bill[ 'total' ];?></li>
<il> - Phương thức thanh toán: <?=$bill['bill_pttt'];?></li>
</div>
</div>
<div class="row mb">
<div class="boxtitle"> THÔNG TIN ĐẶT HÀNG </div>
<div class="row boxcontent billform">
<table>
<tr>
<td >Người đặt hàng </td>
<td><?=$bill['bill_name'];?> </td>
</tr>
<tr>
<td>Dia chi</td>
<td><?=$bill['bill_address'];?></td>
</tr>
<tr>
<td>Email</td>
<td><?=$bill['bill_email'];?></td>
</tr>

<tr>
<td>phone</td>
<td><?=$bill['bill_tel'];?></td>
</tr>
</table>
</div>

<div class="row mb">
<div class="boxtitle">CHI TIẾT GIỎ HÀNG </div>
<div class="row boxcontent cart">
<table>
<tr>
<th>Hình </th>
<th>Sản phẩm </th>
<th> Đơn giá</th>
<th> Số lượng </th>
<th>Thành tiền </th>
</tr>
<?php
bill_chi_tiet($billct);
?>
</table>
</div>
</div>
</div>
</div>
<div class="boxphai">

</div>
</div>
</div>