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
      
    @if(!empty(Session::get('success')))
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            {{ Session::get('success') }}
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    @endif


      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-title" style="margin-top:-50px;">
            <div class="row">
              <div class="col-12 col-md-9">
                <h1 style="font-family: metro-polis, metro-polis-bold;font-size:26pt;"><b>Join us for an immersive virtual experience</b></h1>
                <h3 style="font-family: metro-polis;">5 August 2021 | 09:00 - 12:00 WIB | <span style="color:#f13643">FREE ENTRY</span></h3>
              </div>
              <div class="col-12 col-md-3">
                <button class="btn-register-now" id="toRegister">
                  REGISTER NOW
                </button>
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
      document.getElementById("toRegister").onclick = function () {
          location.href = "{{ url('register') }}";
      };
    </script>

@if(!empty(Session::get('success')))
<script>
$(function() {
    $('#myModal').modal('show');
});
</script>
@endif

  </body>
</html>
