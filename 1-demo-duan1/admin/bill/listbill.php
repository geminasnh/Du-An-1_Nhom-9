<div class="row">
       <div class="row frmtitle mb"> <h1> DANH SÁCH ĐƠN HÀNG </h1></div>
       <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng"> 
            <button type="submit" name="listok"><i class="bi bi-search"></i></button>
       </form>
<div class="row frmcontent">
<div class="row mb10 frmdsloai">
<table>
    <tr>
        <th></th>
       <th> MÃ ĐƠN HÀNG </th>
       <th> KHÁCH HÀNG </th>
       <th> SỐ LƯỢNG HÀNG </th>
       <th> GIÁ TRỊ ĐƠN HÀNG </th>
       <th>TÌNH TRẠNG ĐƠN HÀNG</th>
       <th>NGAY DAT HÀNG</th>
       <th>THAO TÁC </th>
    </tr>
    <?php
        foreach ($listbilladmin as $bill) {
        extract ($bill);
        $suabill="index.php?act=suabill&idbill=".$id;
        $xoabill="index.php?act=xoabill&idbill=".$id;
        $kh=$bill["bill_name"].'
        <br>'.$bill["bill_email"].'
        <br>'.$bill["bill_address"].'
        <br>'.$bill["bill_tel"];
        $ttdh=get_ttdh($bill["bill_status"]);
        $countsp=loadall_cart_count($bill["id"]);
        echo '<tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>DAM- '.$bill['id'].'</td>
        <td>'.$kh.'</td>
        <td>'.$countsp.'</td>
        <td><strong>'.$bill["total"].'</strong> VNĐ</td>
        <td>'.$ttdh. '</td>
        <td>'.$bill["ngaydathang"].'</td>
        <td><a href="'.$suabill.'"><input type="button" value="sửa" class="gr"></a>  <a href="'.$xoabill.'"><input type="button" value="xóa" class="re"></a></td>
        </tr>';
        }
    ?>
</table>
</div>
</div>

<div class=" mb10">
                <input type="button" value="Chọn tất cả" class="blu mrbut">
                <input type="button" value="Bỏ chọn tất cả" class="we mrbut">
                <input type="button" value="Xóa các mục đã chọn"class="re mrbut">
               
            </div>

</div>