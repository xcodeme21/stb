<!DOCTYPE html>
<html lang="en">
    @include("include.head")

  <body>
    <!-- ======= Header ======= -->
    @include("include.header")
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Competition</h2>

            
            <label class="labelcompetition">Join our Instagram Filter Competition<br>
              And win an exclusive souvenir and electronic voucher for <span class="color-red">3 WINNERS</span>
            </label>

            <br><br><br>

            <div class="row">
              <div class="col-4">
                <img src="{{ asset('public/assets/img/image competion.png') }}" width="100%" />
                <br>
                <br>
                <br>
                <button class="btn-give-it" id="toGiveIt">
                  GIVE IT A TRY
                </button>
              </div>
              <div class="col-8">
                <h3 class="color-red metropolis-bold">INSTASTORY FILTER GUIDELINE</h3>
                <br>
                <ol class="metropolis-bold">
                  <li>Open add story section on Instagram, the scroll to right. Find <strong>"Browse Effects"</strong></li>
                  <li>Type <strong>*Kangen Singapura by kumparancom *</strong> to select the filter.</li>
                  <li>Participants needs to take a photo or video with the filter.</li>
                  <li>Don't forget to click save icon after taking the photo or video.<br><img src="{{ asset('public/assets/img/alur.png') }}" width="100%" /></li>
                  <li>Upload the Instagram story with hashtag <strong>#visitsingapore</strong> <strong>#singaporeimagine</strong> <strong>#STBVirtualTour</strong>.</li>
                  <li>The most creative and unique post will be selected as the winner.</li>
                  <li>Post your photo or story the latest by 26th July 2021 23:59 WIB.</li>
                  <li>Make sure your account is not private.</li>
                  <li>The winner selection is final and it shall not be disputable by any parties.</li>
                </ol>

                <br>
                <h3 class="color-red metropolis-bold">INSTAGRAM FEED FILTER GUIDELINE</h3>
                <br>
                <ol class="metropolis-bold">
                  <li>Open add story section on Instagram, the scroll to right. Find <strong>"Browse Effects"</strong></li>
                  <li>Type <strong>*Kangen Singapura by kumparancom *</strong> to select the filter.</li>
                  <li>Participants needs to take a photo or video with the filter.</li>
                  <li>Don't forget to mention @visit_singapore on Instagram story.<br><img src="{{ asset('public/assets/img/alur.png') }}" width="100%" /></li>
                  <li>Upload the photo or video on Instagram feeds with hashtag <strong>#visitsingapore</strong> <strong>#singaporeimagine</strong> <strong>#STBVirtualTour</strong>.</li>
                  <li>The most creative and unique post will be selected as the winner.</li>
                  <li>Post your photo or story the latest by 26th July 2021 23:59 WIB.</li>
                  <li>Make sure your account is not private.</li>
                </ol>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->
    </main>
    <!-- End #main -->

    <a href="https://wa.me/6282122003303" class="back-to-top"><i class="icofont-brand-whatsapp"></i></a>

    @include("include.script")

    <script type="text/javascript">
      document.getElementById("toGiveIt").onclick = function () {
          location.href = "https://www.instagram.com/ar/416203406362863";
      };
    </script>
  </body>
</html>
