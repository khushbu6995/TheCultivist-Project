<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DSI</title>
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/success.css')}}" />
    <!-- FontAwsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <!---------- 1st header section start ------------->
    <section>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid mb-xl-5">
          <a class="navbar-brand ms-xl-3 nav_style mb-xl-5 mt-xl-3" href="#"
            >THE <strong>CULTIVIST .</strong></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <button class="btn btn_style nav_btn_style" type="submit">
                SIGN IN
              </button>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!---------- 1st header section end ------------->
    <!---------- Message section start ------------->
    <section>
      <div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12 mt-xl-5 text-center mb-xl-3 mt-md-5 mt-5">
              <div class="success_h1_style">
                <h1>APPLICATION HAS SUCCESSFULLY SUBMITTED</h1>
              </div>
            </div>
            <div class="col-xl-12 text-center">
              <div class="success_p_style">
                <p>You will hear from our membership team soon.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---------- Message section end ------------->

    <!-- Jquery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- Bootstrap js -->

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- JS -->
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
