@extends('layouts.home')

@section('title', 'Maura Hill - Kontak Kami')

@section('content')
    <!-- ---------------------------------------------------------------KONTAK KAMI-------------------------------------------- -->
    {{--  Hero Section --}}
    <section id="hero" class="relative w-full">
        <div class="absoulte bg-shade-white min-h-[75vh] flex flex-row items-center justify-center">
            <img src="{{ asset('images/banner-product.png') }}" alt="maura-hill"
                class="absolute opacity-15 bg-transparent object-cover h-full w-full">
            <span
                class="absolute text-primary-500 font-bold  text-headline4 md:text-headline2 lg:text-headline3 xl:text-headline2">Contact
                Us</span>
        </div>
    </section>
    {{-- End Hero Section --}}
@endsection
