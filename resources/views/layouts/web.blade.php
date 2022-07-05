<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TecniEmpaque</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{asset('assets/images/logos/favicon.png')}}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/Owl/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/Owl/dist/assets/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons2/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-6.1.1/css/all.css')}}">
    <script src="{{asset('assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    {!! SEO::generate() !!}
    @stack('scripts')
</head>
<body>
@section('menu')
    @include('partials/menu')
@show
<main>
    @yield('content')
</main>
@section('whatsapp')
    <div class="floating_btn">
        <a target="_blank" href="https://wa.me/">
            <div class="contact_icon">
                <i class="fa-brands fa-whatsapp my-float"></i>
            </div>
        </a>
    </div>
@show
<footer>
    @include('partials/footer')
</footer>




<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->

<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>
    <script src="{{asset('assets/vendor/Owl/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
