

<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH TAI KHOAN</h1>  
            </div>
        <div class="row frmcontent"> 

                <div class="row mb10 frmdsloai">
               <table>
                
                <tr>
                    <th></th>
                    <tH>MÃ TK</tH>
                    <tH>TÊN LOGIN </tH>
                    <tH>PASS </tH>
                    <tH>EMAIL </tH>
                    <tH>DIA CHI</tH>
                    <tH>SDT </tH>
                    <tH>VAI TRO </tH>

                    <th></th>
                </tr>
                <?php
                 foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    echo'  
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$role.'</td>
                    <td><a href="'.$suatk.'"><input type="button" value="sửa" class="gr"></a>  <a href="'.$xoatk.'"><input type="button" value="xóa" class="re"></a></td>
                    </tr>';
                }
                ?>
                
               </table>
            </div>
            <div class=" mb10">
                <input type="button" value="Chọn tất cả" class="blu mrbut">
                <input type="button" value="Bỏ chọn tất cả" class="we mrbut">
                <input type="button" value="Xóa các mục đã chọn"class="re mrbut">
               
            </div>
        </div>
        </div>
    </div>
