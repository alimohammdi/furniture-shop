
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="ali mohammadi" name="author">
    <meta content="index,follow" name="robots">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{  asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('front/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{  asset('front/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{  asset('front/css/fontawesome.min.css') }}">


</head>
@yield('content');
<body>

    <!-- Start Script -->
    <script src="{{  asset('front/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{  asset('front/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{  asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{  asset('front/js/templatemo.js') }}"></script>
    <script src="{{  asset('front/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>
