
<div class="mainallctsp">
<main >
  <div class="main_ctsp">
 <div class="img_sp">
 <?php
         extract($onesp);
  ?>
 <?php
        $hinh=$img_path.$img;
        echo '<img src="'.$hinh.'" alt="">';
        ?>
 </div>
 <div class="ttsp">
  <h4><?=$name?> </h4>
  <p>danh muc nao?</p>
  <p><?=$price?> <del>999.000đ</del></p>
  <p>Color</p>
   <div class="color">
    <div class="color1"><img src="images/sanphammoi1.jpeg" alt=""></div>
    <div class="color2"><img src="images/sanphammoi2.jpg" alt=""></div>
    <div class="color3"><img src="images/sanphammoi3.jpg" alt=""></div>
    <div class="color4"><img src="images/disuwww5uxkqulu2aivh.webp" alt=""></div>
   </div>
<div class="size">
  <p>select size</p>
<form action="">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">
  <input type="button" value="size 1">

</form>


<div class="buyortym">
<?php   
        echo '<form action="index.php?act=addtocart" method="post">
        <input type="hidden" name="id" value="'.$id.'">
        <input type="hidden" name="name" value="'.$name.'">
        <input type="hidden" name="img" value="'.$img.'">
        <input type="hidden" name="price" value="'.$price.'"> 
        <input type="submit" name="addtocart" value="Add to Bag">
        </form>';
        ?>
<p>This product is excluded from site promotions and discounts.
These classic Dunks get a metamorphous refresh inspired by the merging of digital and physical worlds. Jewel-like hardware, holographic accents and a special JDI dubrae add the finishing touch so you can take centre stage in style.</p>
</div>
<div class="danh_gia">
<li>Colour Shown: Black/Multi-Colour/White/Black</li>
<li>Style: FQ8143-001</li>
<a href="">View Product Details</a>
<hr>
 <ul class="ul_danhgia">
<li class="lisx">
  <div id="btn_lisx_down">
    Free Delivery and Returns
    <i class="bi bi-chevron-down"></i>
 
</div>
<div id="btn_lisx_up">
  Free Delivery and Returns
  <i   class="bi bi-chevron-up"></i>
</div>
  <div class="sx" id=lisx>
    <ul class="sx-ul">
     <p>Your order of 5.000.000₫ or more gets free standard delivery.</p>
     <li>Standard delivered 4-5 Business Days</li>
      <li>Express delivered 2-4 Business Days</li>
      <p>Orders are processed and delivered Monday-Friday (excluding public holidays) </p>
      <p> Nike Members enjoy <a href="">free returns.</a></p>
    </ul>
  </div>
</li>
</ul>

<hr>
<ul class="ul_danhgia">
  <li class="lisx">
    <div id="btn_lisx_down">
      Reviews (13) +sao
      <i class="bi bi-chevron-down"></i>
   
  </div>
  <div id="btn_lisx_up">
    Reviews (13) +sao
    <i   class="bi bi-chevron-up"></i>
  </div>
    <div class="sx" id=lisx>
      <ul class="sx-ul">
      <li>ak</li>
     <p>Good + time +sao + noidung</p>
      </ul>
    </div>
  </li>
  </ul>
<hr>
</div>
</div>
 </div>
 

</div>
</main>
<main>
  <h3>You Think it ?</h3>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
        });
        </script>
            </div>
            </div>
            <div class="row " id="binhluan"> 

            </div>
    
</main>
<main>
  <h3 style="text-align: center;">Đặc điểm nổi bật</h3>
  <?php
        echo $mota;
        echo'<br><br><br>view:'.$luotxem.'';
        ?>
</main>
<main>
  <div class="new">
<h3>You Might Also Like</h3>
<div class="trending">
<!-- <?php
         foreach ($spcl as $spcl) {
           extract($spcl);
           $hinh=$img_path.$img;
           $linksp="index.php?act=sanphamct&idsp=".$id;
           echo'<div class="col1">
           <a href="'.$linksp.'" ><img src="'.$hinh.'" alt=""></a>
               <h4><a href="'.$linksp.'">'.$name.'</a></h4>
               <p>   <a style="text-decoration: none;color: #000;" href="'.$linksp.'">'.$name.'</a></li></p>
               <div class=".price">
               <p>'.$price.' <del>999.000đ</del></p>
               </div>
             </div>';
           
         }
         ?> -->
      <!--   <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
        <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
      </div>
      
      
</main>
</div>
