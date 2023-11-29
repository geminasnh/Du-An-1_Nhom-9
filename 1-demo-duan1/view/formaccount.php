<div class="edit">
  <h3>Account Details</h3>
  <?php
            if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                # code...
                extract($_SESSION['user']);
            }
            ?>
  <form action="index.php?act=account" method="post">
    <div class="inputBox1">
      <input type="email" required="required" name="email" value="<?=$email ?>">
      <span> Email</span>
  </div>
  <div class="inputBox1">
      <input type="password" required="required"  name="pass" value="<?=$pass ?>">
      <span>  Password</span>
  </div>
  <div class="inputBox1">
    <input type="text" required="required" name="tel" value="<?=$tel ?>">
    <span> Phone Number</span>
</div>
<div class="inputBox1">
    <input type="text" required="required" name="address" value="<?=$address ?>">
    <span> Address</span>
</div>
<div class="inputBox1">
  <input type="date" required="required" >
  <span> Date of Birth</span>
</div>
<div class="inputBox1">
  <p> Location</p>
  <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" >  
    <option  value="" selected>Chọn quận huyện</option>
    </select>

</div>
<div class="inputBox1">
  <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" >
    <option value="" selected>Chọn quận huyện</option>
    </select>
</div>
<div class="inputBox1">
  <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
    <option value="" selected>Chọn phường xã</option>
    </select>
</div>
<div class="inputBox1">
<hr>
<p>Delete Account </p>
<hr>
</div>

  <div class="inputSubmit1" >
  <p class="thongbao">
  </p>
  <input type="hidden" name="id" value="<?=$id ?>">
<input type="hidden" name="user" value="<?=$user ?>">
  <input type="submit" value="SAVE" name="capnhat" >
  </div>
  </form>
</div>