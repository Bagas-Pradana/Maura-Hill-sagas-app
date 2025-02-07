<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <!-- Head -->
    @include('layouts.partials.head')
    <!-- End Head -->
    <!-- Style -->
    @stack('styles')
    <!-- End Style -->
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header Section -->
    @include('layouts.partials.header')
    <!-- End Header Section -->
    <!-- Content Section -->
    @yield('content')
    <!-- End Section -->
    <!-- Footer -->
    @include('layouts.partials.footer')
    <!-- End Footer -->
    <!-- Script -->
    <script src="{{ asset('scripts/index.js') }}"></script>
    @stack('scripts')
    <!-- End Script -->
</body>

</html>
