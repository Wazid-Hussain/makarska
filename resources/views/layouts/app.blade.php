
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Citybook -Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!--=============== css  ===============-->
        @include('includes.styles')
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->

        <!-- Main  -->
        <div id="main">

            <!-- header-->                
            @include('includes/header')
            <!--  header end -->

            <!--  wrapper  -->
            <div id="wrapper">
            <!-- Content-->
                @yield('content')
            <!-- Content end -->
            </div>
            <!-- wrapper end -->

            <!--footer -->
            @include('includes.footer')
            <!--footer end  -->

            <!--register form -->
            @include('includes.register')
            <!--register form end -->

            <a class="to-top"><i class="fa fa-angle-up"></i></a>
            
        </div>
        <!-- Main end -->

        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
    </body>
</html>