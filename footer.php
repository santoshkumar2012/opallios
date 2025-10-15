
  <!-- ======= Footer ======= -->
  <footer id="footer" class="p-3">


     <section class="subscribe-section">
    <div class="container">
      <h3 class="fw-bold mb-2">Subscribe Now</h3>
      <p>subscribe for the latest updates and insights.</p>
      <form class="subscribe-form">
        <input type="email" class="form-control" placeholder="Email" required>
        <button type="submit" class="btn">JOIN</button>
      </form>
    </div>
  </section>


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-4 footer-links col-6">
            <h4> Information </h4>
            <ul>
              <li><a href="#"> About us </a></li>
              <li><a href="#"> Services </a></li>
              <li><a href="#"> Technology </a></li>
              <li><a href="#"> Industries </a></li>
              <li><a href="#"> Contact Us </a></li>
              <li><a href="#"> Blog </a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-4 footer-links col-6">
            <h4> Industry </h4>
            <ul>
              <li><a href="#"> Healthcare Services </a></li>
              <li><a href="#"> Biotech Services </a></li>
              <li><a href="#"> Manufacturing Services </a></li>
              <li><a href="#"> Retail Management</a></li>
              <li><a href="#"> Fintech </a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-4 footer-links col-6">
             <h4> Services </h4>
            <ul>
              <li><a href="#"> Business Support </a></li>
              <li><a href="#"> Enterprise SAAS Expertize </a></li>
              <li><a href="#"> Low Code – No Code Practice </a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4> Connect With Us </h4>
            <address> <i class="fa fa-map-marker" aria-hidden="true"></i> 3375 Scott Blvd, Ste 406, Santa Clara, CA 95054, USA </address>
            <ul>
              <li> <a href="mailTo:info@opallios.com"> <i class="fa-regular fa-envelope"></i> info@opallios.com </a></li>
              <li> <a href="tel: 1-(888)-205-4058"> <i class="fa-solid fa-phone-volume"></i>  1-(888)-205-4058</a></li>
            </ul>
          </div>
        </div>

        <div class="footerbot-link">
          <p class="text-center"> Copyright © 2025 opallios.com All right reserved </p>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->



  <!----------------------------Main-section-and----------------------------------->


  <!-- Optional JavaScript; choose one of the two! -->
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.4/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="js/stellarnav.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 0,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>


  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      jQuery('.stellarnav').stellarNav({
        theme: 'light',
        breakpoint: 960,
        position: 'left',
        phoneBtn: '1-(888)-205-4058',
        locationBtn: 'https://www.google.com/maps'
      });
    });
  </script>
</body>

</html>