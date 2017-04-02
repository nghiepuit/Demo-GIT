<!DOCTYPE html>
<html lang="en">
<head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MOBIFONE THAI NGUYEN 2016">
    <meta name="author" content="">
    <title>Mobifone Thái Nguyên</title>
    <base href="{{asset('')}}">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import New -->
    <link rel="shortcut icon" href="template_asset/images/icon/computer.ico" />
    <script src="template_asset/js/jquery.min.js"></script>
    <script src="template_asset/js/jquery.nivo.slider.pack.js"></script>
    <script src="template_asset/js/script.js"></script>
    <link rel="stylesheet" href="template_asset/css/style.css" type="text/css" />
    <link rel="stylesheet" href="template_asset/css/themes/default/default.css" type="text/css" />
    <link rel="stylesheet" href="template_asset/css/nivo-slider.css" type="text/css" />
    <!-- Import New -->



	@yield('css')

</head>
<body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
    
    @include('layout.header')
    @include('layout.menu')
	@yield('content')
	@include('layout.footer')
	@yield('script')


</body>
</html>