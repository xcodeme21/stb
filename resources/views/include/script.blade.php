<!-- Vendor JS Files -->
<script src="{{ asset('public/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/assets/js/parsley.min.js') }}"></script>

    <script>
      const handleNextStep = (stepId) => {
        if (stepId === "step_2") {
          let dd = document.getElementById("step-1");
          let ss = $("#step-1 > .form-action");
          let curInputs = ss.find("input[type='text'],input[type='radio'],input[type='checkbox']");
          let isValid = true;
          $(".form-group").removeClass("has-error");
          for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
          }

          if (isValid) {
            document.getElementById("step-2").style.display = "block";
            document.getElementById("step-1").style.display = "none";
            document.getElementById("step-3").style.display = "none";
          }
        }

        if (stepId === "step_3") {
          let dd = document.getElementById("step-2");
          let ss = $("#step-2 > .form-action");
          let curInputs = ss.find("input[type='text'],input[type='radio'],input[type='checkbox']");
          let isValid = true;
          $(".form-group").removeClass("has-error");
          for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
          }
          if (($("input[name*='question4[]']:checked").length)<=0) {
              alert("You must check virtual tours/experience at least 1 box");
          }
          if (($("input[name*='question7[]']:checked").length)<=0) {
              alert("You must check some of your considerations when choosing virtual tour experiences at least 1 box");
          }
          if (($("input[name*='question8[]']:checked").length)<=0) {
              alert("You must check types of virtual tour experiences in/from singapore would interest you at least 1 box");
          }

          if (isValid) {
            document.getElementById("step-2").style.display = "none";
            document.getElementById("step-1").style.display = "none";
            document.getElementById("step-3").style.display = "block";
          }
        }
      };

      const handleFinish = (stepId) => {
        let dd = document.getElementById("step-3");
        let ss = $("#step-3 > .form-action");
        let curInputs = ss.find("input[type='text'],input[type='radio'],input[type='checkbox']");
        let isValid = true;
        $(".form-group").removeClass("has-error-last");
        for (var i = 0; i < curInputs.length; i++) {
          if (!curInputs[i].validity.valid) {
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error-last");
          }
        }
      };
    </script>

    <!-- <script>
      const handleNextStep = (stepId) => {
        if (stepId === "step_2") {
          document.getElementById("step-2").style.display = "block";
          document.getElementById("step-1").style.display = "none";
          document.getElementById("step-3").style.display = "none";
        }

        if (stepId === "step_3") {
          document.getElementById("step-2").style.display = "none";
          document.getElementById("step-1").style.display = "none";
          document.getElementById("step-3").style.display = "block";
        }
      };
    </script> -->
    <script>
    $(document).ready(function(){
        $(".hidefirst").hide();

        $('input[type="radio"]').click(function(){
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        });
    });
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/assets/js/main.js') }}"></script>