<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard')</title>
    <!-- plugins:css -->
    @include('layouts.partials.app.styles')
    <!-- inject:css -->
    @stack('styles')
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial -->
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
                <div class="row flex-grow">
                    <div class="col-lg-8 mx-auto text-white">
                        @yield('content')
                        <div class="row mt-5">
                            <div class="col-12 text-center mt-xl-2">
                                <a class="text-white font-weight-medium"
                                    href="{{ route('dashboard') }}">Back to home</a>
                            </div>
                        </div>
                        {{-- <div class="row mt-5">
                            <div class="col-12 mt-xl-2">
                                <p class="text-white font-weight-medium text-center">Copyright
                                    &copy; 2021 All rights reserved.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('layouts.partials.app.scripts')
    <!-- inject:css -->
    @stack('scripts')
    <!-- endinject -->
</body>

</html>
