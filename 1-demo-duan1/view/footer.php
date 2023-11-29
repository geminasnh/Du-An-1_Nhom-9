<footer>
    
    <div class="thongtin" >
        
    <div class="thongtin1">
        <h3>Tìm một cửa hàng</h3>
        <h3>Trở thành một thành viên</h3>
        <h3>Gủi phản hồi cho chúng tôi</h3>
      </div>
      <div class="thongtin1">
        <h3>Được Giúp Đỡ</h3>
        <li><a href="">Tình trạng đặt hàng</a></li>
        <li><a href="">Vận chuyển</a></li>
        <li><a href="">Trả lại</a></li>
        <li><a href="">Các lựa chọn thanh toán</a></li>
        <li><a href="">Liên hệ chúng tôi</a></li>
      </div>
      <div class="thongtin1">
        <h3>Giới Thiệu Về Monkey <br>Sport</h3>
        <li><a href="">Tin tức</a></li>
        <li><a href="">Nghề nghiệp</a></li>
        <li><a href="">Nhà đầu tư</a></li>
        <li><a href="">Sự bền vững</a></li>
      </div>
      <div class="thongtin1">
        <div class="icon2">
          <button><i class="bx bxl-twitter"></i></button>
          <button><i class="bx bxl-facebook-circle"></i></button>
          <button><i class="bx bxl-youtube"></i></button>
        </div>
      </div>
    </div>
    <div class="footercon">
    <p>© 2023 MonkeySport, Inc. All Rights Reserved</p>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>
window.onscroll = function() {myFunction()};
var prevScrollpos = window.pageYOffset;
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && window.pageYOffset >= sticky) {
     navbar.classList.add("sticky");


  } else {
    navbar.classList.remove("sticky");
  }
  prevScrollpos = currentScrollPos;
}
</script>
<script src="js/menu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");
var Parameter = {
url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
method: "GET", 
responseType: "application/json", 
};
var promise = axios(Parameter);
promise.then(function (result) {
renderCity(result.data);
});

function renderCity(data) {
for (const x of data) {
citis.options[citis.options.length] = new Option(x.Name, x.Id);
}
citis.onchange = function () {
district.length = 1;
ward.length = 1;
if(this.value != ""){
  const result = data.filter(n => n.Id === this.value);

  for (const k of result[0].Districts) {
    district.options[district.options.length] = new Option(k.Name, k.Id);
  }
}
};
district.onchange = function () {
ward.length = 1;
const dataCity = data.filter((n) => n.Id === citis.value);
if (this.value != "") {
  const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

  for (const w of dataWards) {
    wards.options[wards.options.length] = new Option(w.Name, w.Id);
  }
}
};
}
</script>
</body>
</html>