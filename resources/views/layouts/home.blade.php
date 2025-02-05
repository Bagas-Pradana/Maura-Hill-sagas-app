<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    @include('layouts.partials.head')
    @stack('styles')
</head>
<body>
    <!-- Header Section -->
    @include('layouts.partials.header')
    <!-- End Header Section -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.partials.footer')
    <!-- Footer -->
    @stack('scripts')
</body>
</html>