<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Krisna</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="/../assets/img/favicon.png" rel="icon" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link href="/../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="/../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"/>
    <link href="/../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="/../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="/../assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    @include('partials.navbar')
  

  <main id="main" >
    <div class="">
      @yield('container')
    </div>
  </main>

    @include('partials.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" ><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="/../assets/vendor/aos/aos.js"></script>
    <script src="/../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/../assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Sweetalert JS -->
    <script src="/../assets/js/sweetalert.js"></script>
    <script src="/../assets/js/main.js"></script>
  </body>
</html>
