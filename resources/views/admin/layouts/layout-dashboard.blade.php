<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Desa Lewiliang</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    @include('admin.layouts.partials.head-css')

</head>

<body>
    <div class="app">
        <div class="layout">
            {{-- header --}}
            @include('admin.layouts.partials.header')

            <!-- Side Nav START -->
            @include('admin.layouts.partials.side-nav')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->

                @yield('content')
                <!-- Content Wrapper END -->

                @include('admin.layouts.partials.footer')

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            @include('admin.layouts.partials.search')
            <!-- Search End-->

            <!-- Quick View START -->
            @include('admin.layouts.partials.them')
            <!-- Quick View END -->
        </div>
    </div>


    @include('admin.layouts.partials.js')

</body>

</html>
