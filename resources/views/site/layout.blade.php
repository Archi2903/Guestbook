<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    Link icon-->
    <link rel="shortcut icon"
          href="https://image.flaticon.com/icons/png/512/2800/2800209.png" alt="title-picture"
          type="image/x-icon">
    <!--    Link Bootstrap4.4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <!--    Link Bootstrap ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--    Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Noto+Sans+HK&display=swap" rel="stylesheet">
    {{--    Link CSS--}}
    <link rel="stylesheet" href="/css/app.css">
    <title> @yield('title') </title>
</head>
<!-- head -->
@push('scripts')
    <script></script>
@endpush
<body class="container-sm bg-light">

<header class="bg-dark">
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-dark">
            <div class="container">
                <m class="navbar-brand"><i class="bi bi-vector-pen" style="font-size: 1.5rem"></i></i>Guestbook</m>
                <div class="collapse navbar-collapse">
                    <ul class=" navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('main')}}">Main</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                                href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="card mb-auto bg-dark">
        <img src="https://www.woodstockvtlaw.com/wp-content/uploads/2014/08/slide1-1920x350.jpg" class="card-img"
             alt="minimalism">
    </div>
</header>
<!-- header -->

<main>
    <div class="row ">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-10">
            @yield('main_content')
        </div>
        <div class="col-sm-1">
        </div>
    </div>
</main>
<!-- main -->

<footer>
    <div class="row ">
        <p class="col-12 text-center"> cover by @rchi<i class="bi bi-mouse-fill"></i><i
                class="bi bi-music-player-fill"></i></p>
    </div>
</footer>
<!-- footer -->

</body>
<!-- body -->
</html>
