<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div id="wrapper">
        <!-- Header Start -->
        @include('includes.header')
        <!-- Header End -->

        <!-- Start right Content -->
        <div class="content-page">
            <!-- Start content -->
            <div id="content" class="content">
                @yield('content')
            </div>
            <!-- End content -->
            @include('includes.footer')
        </div>
        <!-- End right Content -->

    </div>
</body>
</html>
