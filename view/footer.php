<footer>
  <div class="footer-container">
    <div class="footer-column">
      <h3>CÔNG TY CỔ PHẦN VẠN XUÂN VIVAXAN</h3>
      <p><strong>Trụ sở chính:</strong> Số 15, tổ 6 Phú Mỹ, P.Mỹ Đình 2, Q.Nam Từ Liêm, Hà Nội</p>
      <p>Tel: 0243 795 7942</p>
      <p><strong>Trung tâm đào tạo LĐXK:</strong> Km8+500, Đại Lộ Thăng Long, thôn An Thọ, xã An Khánh, huyện Hoài Đức, thành phố Hà Nội</p>
      <p>Tel: 0243 250 5300</p>
      <p><strong>Email:</strong> vanxuan@vivaxan.vn</p>
    </div>
    <div class="footer-column">
      <h3>VIVAXAN VAN XUAN JOINT STOCK COMPANY</h3>
      <p><strong>Head office:</strong> No.15, Phu My 6 Group, My Dinh 2 Ward, Nam Tu Liem District, Ha Noi City</p>
      <p>Tel: 0243 795 7942</p>
      <p><strong>Center for Labour Exporting:</strong> Km8+500, Thang Long Avenue, An Tho Village, An Khanh Commune, Hoai Duc District, Ha Noi City</p>
      <p>Tel: 0243 250 5300</p>
      <p><strong>Email:</strong> vanxuan@vivaxan.vn</p>
    </div>
    <div class="footer-column">
      <h3>DẪN ĐƯỜNG ĐẾN VIVAXAN</h3>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.303174419301!2d105.78234961493267!3d21.019167593492287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab711b11f1c9%3A0x91d0950b2d4e4d63!2sS%C3%B4ng%20%C4%90%C3%A0%20Corp!5e0!3m2!1svi!2s!4v1601632673458!5m2!1svi!2s" width="300" height="200" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</footer>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>