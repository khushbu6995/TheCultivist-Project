<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('pagetitle')</title>
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @yield('header')
    @yield('head')
    <section>
        <div>
            <div class="container slider">
                <div class="row">
                    <div class="col-xl-10 app_form_style">
                        <div class="accordion" id="accordionExample">
                            @yield('content_generalInfo')
                            @yield('content_paymentInfo')
                            @yield('content_aboutInfo')
                            @yield('content_submitreviewInfo')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <!-- Bootstrap js -->


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- JS -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>