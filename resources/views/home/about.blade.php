@extends('layouts.home')

@section('title', 'Maura Hill - Tentang Kami')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="relative w-full">
        <div class="bg-shade-white min-h-[75vh] flex flex-row items-center justify-center">
            <img src="{{ asset('Img/house-maura.png') }}" alt="Profile" class="absolute opacity-15 bg-transparent object-cover h-full w-full -z-10">
            <span class="text-primary-500 font-bold text-headline4 md:text-headline2 lg:text-headline3 xl:text-headline2">Tentang Kami</span>
        </div>
    </section>
    <!-- End  Hero Section-->
    <!-- Banner Section -->
    <section id="banner-description" class="bg-shade-white flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
        <div class="flex flex-col lg:flex-row gap-y-8 min-h-full justify-center lg:justify-between items-center">
            <div class="max-w-[425px] lg:max-w-none lg:w-[50%] shadow-xl sm:animate-veryslow-bounce rounded-lg overflow-hidden">
                <img src="{{ asset('Img/about/rumah.png') }}" alt="Profile" class="object-cover w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <h3 class="text-primary-500 text-headline3 font-bold text-center lg:text-end"><span class="font-black">Maura</span> Hill</h3>
                <div class="flex flex-col gap-y-2 font-semibold text-body2">
                    <p class="text-justify lg:text-end">
                        <span class="text-primary-500">Maura Hill</span> adalah kawasan hunian modern yang menjadi hasil sinergi dari pengembang terpercaya, dirancang untuk memberikan kenyamanan dan gaya hidup berkualitas bagi Anda dan keluarga. Dengan pengalaman dan komitmen dalam menghadirkan hunian terbaik, <span class="text-primary-500">Maura Hill</span> menggabungkan desain elegan, fasilitas lengkap, dan lingkungan yang asri untuk menciptakan rumah impian yang sempurna.
                    </p>
                    <p class="text-justify lg:text-end">
                        <span class="text-primary-500">Maura Hill</span> bukan hanya sebuah tempat tinggal, tetapi juga portofolio investasi yang menjanjikan untuk masa depan Anda yang lebih cerah. Temukan kehidupan baru yang lebih baik di <span class="text-primary-500">Maura Hill</span>, hunian yang mewujudkan segala harapan Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->
    <section id="social-media" class="flex flex-col gap-y-6">
        <div class="bg-shade-white flex flex-col items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-8 lg:py-12 gap-y-6 justify-center">
            <h3 class="text-primary-500 uppercase font-bold text-headline4 lg:text-headline3">Master Plan</h3>
            <span class="text-body-2 lg:text-body1 font-semibold text-justify md:text-center w-full md:w-4/5 lg:w-3/5">Maura Hill hadir dengan Master Plan yang dirancang secara cermat untuk menciptakan kawasan hunian yang seimbang, nyaman, dan ramah lingkungan. Setiap elemen dalam perencanaan kawasan ini dipikirkan dengan matang, mulai dari desain rumah yang elegan hingga fasilitas umum yang lengkap, untuk memenuhi kebutuhan hidup modern Anda.</span>
        </div>
        <img src="{{ asset('Img/about/master-plan.png') }}" alt="Master Plan" class="w-full object-cover object-bottom">
    </section>
@endsection