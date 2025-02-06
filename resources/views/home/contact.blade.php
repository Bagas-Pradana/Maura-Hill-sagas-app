@extends('layouts.home')

@section('title', 'Maura Hill - Kontak Kami')

@section('content')
   <!-- ---------------------------------------------------------------KONTAK KAMI-------------------------------------------- -->
    {{--  Hero Section --}}
    <section id="hero" class="relative w-full">
        <div class="absoulte bg-shade-white min-h-[75vh] flex flex-row items-center justify-center">
            <img src="{{ asset('Img/banner-product.png') }}" alt="maura-hill" class="absolute opacity-20 bg-transparent object-cover h-full w-full -z-0">
            <span class="absolute text-primary-500 font-bold font-poppins text-headline4 md:text-headline2 lg:text-headline3 xl:text-headline2">Contact Us</span>
        </div>
    </section>
    {{-- End Hero Section --}}
@endsection

@push('scripts')
    <script src="{{ asset('scripts/index.js') }}"></script>
@endpush