<div class="row">
        <div class="row frmtitle"> 
            <h1>THÊM DANH MỤC</h1> 
        </div>
        <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
        <div class="row mb10">
         <br>
        <a href="index.php?act=listdm"><input type="button" value="Back" class="gr"></a>
        <input type="hidden" name="maloai" disabled></div>
        <div class="row mb10">
        <div class="row mb10">
     
       <label>
       <select name="iddmcha" >
       <?php
            foreach ($listdanhmuccha as $danhmuccha){
            extract($danhmuccha);
            echo '<option value="'.$iddmcha.'">'.$tendmcha.'</option>';
            }
            ?>
       </select>
       </label>
        
        </div>
   
        <input type="text" name="tenloai" placeholder="Nhập tên danh mục ...">
        </div>
        <div class="row mb10 fl">
        <input type="submit" value="THÊM MỚI" name="themmoib">
        <input type="reset" value="NHẬP LẠI">

        </div>
        <?php
        if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
        }
        ?>
        </form>
        <div class="row frmcontent"> 

                <div class="row mb10 frmdsloai">
               <table>
                
                <tr>
                    <th></th>
                    <tH>MÃ </tH>
                    <tH>TÊN DANH MỤC CON</tH>
                    <th></th>
                </tr>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$namedm.'</td>
                    <td><a href="'.$suadm.'"><input type="button" value="sua"></a>  <a href="'.$xoadm.'"><input type="button" value="xoa"></a></td>
                    </tr>';
                }
                ?>
                 </table>
            </div>
        </div>
        </div>
      </div>