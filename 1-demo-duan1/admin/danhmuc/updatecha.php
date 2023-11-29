<?php
if(is_array($dmcha)) {
    extract($dmcha);
}
?>
<div class="row">
        <div class="row frmtitle"> 
            <h1>UPDATE DANH MỤC CHA</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=updatedmcha" method="post">
        <div class="row mb10">
         <br>
        <input type="text" name="tendmcha" disabled>
        </div>
        <div class="row mb10">
        TÊN DANH MỤC CHA<br>
        <input type="text" name="tendmcha" value="<?php if (isset($tendmcha)&&($tendmcha !="")) {echo $tendmcha;}?>">
        </div>
        <div class="row mb10">
        <input type="hidden" name="iddmcha" value="<?php if (isset($iddmcha)&&($iddmcha >0)) {echo $iddmcha;}?>">
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
