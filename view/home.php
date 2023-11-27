
<div class="mainall" >
<div class="content">
    <h4>Free Delivery</h4>
    <p>Applies to orders of 5.000.000₫ or more.<a href="">View details</a></p>
</div>
<div class="banner">
    <img src="images/banner.webp" alt="" >
</div>
<div class="content2">
    <h1>GIFTS THAT MOVE YOU</h1>
    <p>This year's gift. Next year's greatness.</p>
    <div class="nextt">
    <button class="button1">Shop</button>
    <button class="button1">Explore</button>
    </div>
</div>
<main>
    <h3>XU HƯỚNG</h3>
    <div class="dacsac">
      <?php 
      foreach($list_sp as $sp){
        extract($sp);
        $img_pro = $img_path.$img;
        $link = "index.php?act=ctsp&id=".$id;
        echo " <div class='boxa'>
        <a href='".$link."'><img src='".$img_pro."' alt=''></a>
        <div class='boxname'>
        <h4>
          ".$tensp."
        </h4>
        </div>
    </div> ";
      }
      ?>
        <!-- <div class="boxa">
            <a href="ctsp.html"><img src="images/sanphamnam.jpg" alt=""></a>
            <div class="boxname">
            <h4>
               Sport
            </h4>
            </div>
        </div> -->

        <!-- <div class="boxa">
            <img src="images/sanphamnam.jpg" alt="">
            <div class="boxname">
            <h4>
               Sport
            </h4>
            </div>
        </div> -->
        <!-- <div class="boxa">
            <img src="images/sanphamnam.jpg" alt="">
            <div class="boxname">
            <h4>
               Sport
            </h4>
            </div>
        </div> -->
       
    </div>
</main>
<main>
  <div class="new">
<h3>XU HƯỚNG</h3>
<div class="trending">
  <?php 
  foreach($list_sp as $sp){
    extract($sp);
    $img_pro = $img_path.$img;
    $link = "index.php?act=ctsp&id=".$id;
    echo "<div class='col1'>
    <a href='".$link."'><img src='".$img_pro."' alt=''></a>
      
      <h4>".$tensp." </h4>
      <p>Giày nam</p>
      <div class='price'>
      <p>".$gia."đ <del>".$gia."đ</del></p>
      </div>
    </div>";
  }
  ?>
      <!-- <div class="col1">
        <a href="ctsp.html"><img src="images\disuwww5uxkqulu2aivh.webp" alt=""></a>
          
          <h4>Nike Air Max Plus </h4>
          <p>Giày nam</p>
          <div class="price">
          <p>1.369.000đ <del>999.000đ</del></p>
          </div>
        </div> -->
        <!-- <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
          <!-- <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
          <!-- <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
          <!-- <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
        <!-- <div class="col1">
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
<main>
    <h3>XU HƯỚNG</h3>
    <div class="chuy">
      <?php 
      foreach($list_sp as $sp){
        extract($sp);
        $img_pro = $img_path.$img;
        $link = "index.php?act=ctsp&id=".$id;
        echo "<div class='boxb'>
        <a href='".$link."'><img src='".$img_pro."' alt=''></a>
        <div class='boxname'>
       <button class='btn_danhmuc'>Nam</button>
        </div>
    </div> ";
      }
      ?>
        <!-- <div class="boxb">
            <img src="images/sanphamnam.jpg" alt="">
            <div class="boxname">
           <button class="btn_danhmuc">Nam</button>
            </div>
        </div> -->
        <!-- <div class="boxb">
            <img src="images/sanphamnam.jpg" alt="">
            <div class="boxname">
                <button class="btn_danhmuc">Nam</button>
            </div>
        </div>
        <div class="boxb">
            <img src="images/sanphamnam.jpg" alt="">
            <div class="boxname">
                <button class="btn_danhmuc">Nam</button>
            </div>
        </div> -->
       
    </div>
</main>
</div>
