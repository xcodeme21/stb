<html>
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>SINGAPOREIMAGINE</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('public/assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/assets/img/favicon.ico') }}" type="image/x-icon">
  </head>
  <style>
    body{
      margin: 0px;
    }
    .frame-container {
      position: relative;
    }
    .iframe-button {
      display: none;
      position: absolute;
      top: 15px;
      left: 15px;
      background-color: #e7e7e7; 
      color: black;
      border: none;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
    #iframe-landing{
      border:0px;
    }

    /* Only show the button when the parent is hovered: */

    .frame-container:hover .iframe-button {
      display: initial;
    }
    </style>
  <body>
    <div class="frame-container">
      <button id="skip" class="iframe-button">
        Continue to Home >
      </button>

      <iframe src="{{ asset('public/assets/videos/landing-page.mp4') }}" id="iframe-landing" width="100%" height="100%" allow="autoplay; fullscreen"></iframe>
    </div>
  </body>

  <script type="text/javascript">
      document.getElementById("skip").onclick = function () {
          location.href = "{{ url('/home') }}";
      };
    </script>
</html>