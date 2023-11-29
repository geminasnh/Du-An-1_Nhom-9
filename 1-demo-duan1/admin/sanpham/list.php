<div class="row">
            <div class="row frmtitle mb">
            <h1>DANH SÁCH SẢN PHẨM</h1>  
            </div>
            <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw">
                    <select name="iddm" >
                        <option value="0" selected>Tat ca</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$namedm.'</option>';
            }
            ?> 
                    </select>
                    <input type="submit" name="listok" value="GO">
                </form>
        <div class="row frmcontent"> 
               <div class="row mb10 frmdsloai">
               <table>
            <tr>
                    <th></th>
                    <tH>MÃ </tH>
                    <tH>TÊN SẢN PHẨM</tH>
                    <tH>HÌNH </tH>
                    <tH>GIÁ</tH>
                    <tH>LƯỢT XEM</tH>
                    <th></th>
                </tr>
                <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if (is_file($hinhpath)) {
                       $hinh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh="nophoto";
                    }
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="sửa" class="gr"><a href="'.$xoasp.'"><input type="button" value="xóa" class="re"></a></td>
                    </tr>';
                }
                ?>
                
               </table>
            </div>
            <div class=" mb10 fl">
                <input type="button" value="Chọn tất cả" class="blu mrbut">
                <input type="button" value="Bỏ chọn tất cả" class="we mrbut">
                <input type="button" value="Xóa các mục đã chọn"class="re mrbut">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" class="gr mrbut"></a>
               
            </div>
        </div>
        </div>
    </div>
