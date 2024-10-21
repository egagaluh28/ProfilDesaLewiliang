<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#42542d">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#42542d">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#42542d">
    <title>Desa Lewiliang</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="users/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="users/css/responsive.css">
</head>

<body>
    <div class="main-page-wrapper">

        <!-- ===================================================
    Loading Transition
   ==================================================== -->
        @include('users.layouts.partials.loader')



        <!--
   =============================================
    Theme Header One
   ==============================================
   -->
        @include('users.layouts.partials.header')


        <!--
   =============================================
    Theme Main Banner
   ==============================================
   -->
        @yield('content')


        <!--
   =====================================================
    Footer
   =====================================================
   -->
        @include('users.layouts.partials.footer')




        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>



        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- jQuery -->
        @include('users.layouts.partials.js')
    </div> <!-- /.main-page-wrapper -->
</body>

</html>
