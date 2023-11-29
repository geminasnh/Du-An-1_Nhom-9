<?php
if(is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE DANH MỤC</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
        <div class="row mb10">
         <br>
        <input type="text" name="maloai" disabled>
        </div>
        <div class="row mb10">
        TÊN DANH MỤC <br>
        <input type="text" name="tenloai" value="<?php if (isset($namedm)&&($namedm !="")) {echo $namedm;}?>">
        </div>
        <div class="row mb10">
        <input type="hidden" name="id" value="<?php if (isset($id)&&($id >0)) {echo $id;}?>">
        <input type="submit" value="CAP NHAT" name="capnhat">
        <input type="reset" value="NHAP LAI">
        <a href="index.php?act=listdm"><input type="button" value="DANH SACH"></a>
        </div>
        <?php
        if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
        }
        ?>
        </form>
        </div>
        </div>
      </div>