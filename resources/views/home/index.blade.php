@extends('layouts.home')

@section('title', 'Maura Hill - Rumah Idaman')

@section('content')
    <!-- Animasi Text Selamat Datang -->
    <div
        class="bg-transparent absolute  top-[4.5rem] xl:top-[6.5rem] 2xl:top-[8rem] left-0 w-full flex items-center justify-end px-8 lg:px-6 z-10 h-[25vh]">
        <div  class="md:container xl:px-12">
            <div class="w-full flex justify-end relative">
                <div class="flex justify-end px-0 lg:w-[60%] xl:w-2/3">
                    <div class="flex flex-col lg:gap-y-4 xl:gap-y-8 2xl:gap-y-14 leading-9 animate-fadeOutIn">
                        <span id="form-title"
                            class="block text-primary-500 font-bold transition-opacity text-headline6 lg:text-headline4 xl:text-headline3 2xl:text-headline2 pr-10 sm:pr-20 lg:pr-40">Selamat
                            Datang</span>
                        <span id="form-title2"
                            class="text-right block text-primary-500 font-bold transition-opacity text-headline6 lg:text-headline4 xl:text-headline3 2xl:text-headline2 pl-6 sm:pl-20 lg:pl-40">Di
                            Rumah Idaman</span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Animasi Text Selamat Datang -->
    <!-- Hero Section -->
    <section  id="hero" class="relative w-full min-h-screen overflow-hidden">
        <div
            class="relative font-semibold text-headline5 min-w-7xl bg-transparent sm:bg-sky-200 sm:text-2xl lg:text-headline4 xl:text-headline2 md:min-w-96 md:mx-0 lg:w-full min-h-screen">
            <img src="{{ asset('images/home/background_langit.png') }}" alt="Profile"
                class="shadow-slate-400 object-right object-cover sm:w-full lg:max-w-full min-h-screen">
            <div
                class="absolute mx-auto bottom-4 md:bottom-28 lg:bottom-48 left-1/2 -translate-x-1/2 items-center justify-center animate-custom-pulse">
                <a href="#banner"
                    class=" text-primary-500 mx-auto block text-headline4 -rotate-90 font-bold">⟨</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Banner Section -->
    <section id="banner" class="pt-24 pb-12 min-h-screen flex items-center relative lg:pb-24">
        <div
            class="relative p-8 flex flex-col gap-y-8 min-h-full justify-center lg:justify-between items-center text-headline4 md:text-headline3 sm:text-center sm:px-20 lg:flex-row lg:px-12 lg:p-0">
            <div
                class="aspect-[6/5] max-w-[425px] lg:max-w-none w-full lg:w-[40%] lg:order-last shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-xl overflow-hidden">
                <img src="{{ asset('images/home/house-1') }}.png" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <!-- <img src="{{ asset('images/home/house-1') }}.png" alt="Profile" class="rounded-xl aspect-[6/5] max-w-[400px] lg:max-w-max w-[45%] object-cover object-bottom lg:order-last sm:animate-veryslow-bounce"> -->
            <div class="w-full md:w-[80%] lg:w-[45%] flex flex-col gap-y-4">
                <span
                    class="block font-bold text-slate-800 self-start sm:text-4xl sm:self-auto lg:text-headline3 lg:text-left">
                    Welcome To
                    <span
                        class="block pb-2 text-primary-500 font-bold leading-9 sm:text-4xl sm:leading-relaxed lg:text-headline3 lg:pb-0">
                        Maura Hill
                    </span>
                </span>
                <p class="text-justify text-body2 font-semibold lg:text-start w-full">
                    Temukan rumah idaman Anda di lingkungan yang nyaman, asri, dan strategis. <span
                        class="text-primary-500">Maura Hill</span> hadir untuk memenuhi kebutuhan hunian
                    keluarga modern dengan desain elegan, fasilitas lengkap, dan akses mudah ke berbagai
                    pusat aktivitas.
                </p>
                <p class="hidden sm:block text-body1 font-bold sm:self-start">A Place Where Do You Feel
                    Alive.</p>
            </div>
        </div>
        <!-- <div class="absolute mx-auto bottom-2 right-1/2 inline-flex items-center justify-center animate-custom-pulse"> -->
        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 animate-custom-pulse">
            <!-- <a href="#facility" class="text-primary-500 mx-auto block text-headline4 -rotate-90 font-semibold">⟨</a> -->
            <a href="#facility"
                class="text-primary-500 block text-headline4 -rotate-90 font-bold">⟨</a>
        </div>
    </section>
    <!-- End Banner Section -->
    <!-- Article Section -->
    <section id="facility">
        <div
            class="border-y-4 py-[6.5rem]  bg-primary-500 sm:border-0 sm:border-b-4 sm:bg-primary-500">
            <h1
                class="mx-auto text-headline4 text-center font-bold text-slate-800 sm:text-[40px] sm:leading-tight md:text-headline3">
                Kenapa Harus Beli <span
                    class="leading-[3.5rem] text-neutral-50 sm:text-neutral-50 block md:leading-relaxed">di
                    Maura Hill?</span></h1>
            <!-- Container untuk card -->
            <div
                class="p-8 flex flex-col items-center gap-10 sm:flex-row sm:flex-wrap sm:items-stretch sm:justify-evenly sm:gap-x-6 sm:gap-y-10 px-8 md:px-12 lg:gap-x-[2.2rem] lg:px-24">
                <div
                    class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[44%] lg:w-[30.5%] flex flex-col gap-y-8 items-center justify-evenly">
                    <img src="{{ asset('images/home/row-maura') }}.png" alt="Profile"
                        class="w-[31.5%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3
                            class="text-center text-headline5 font-semibold text-neutral-900 md:text-2xl">
                            ROW Jalan 10 Meter</h3>
                        <p class="text-justify text-body2 font-semibold">Kemewahan sebuah kawasan tidak
                            hanya pada sisi produk bangunan saja, kemewahan yang sebenarnya di Grand
                            Harvest adalah kelegaan pada ROW jalan minimum 10 meter. Memungkinkan warga
                            memiliki lebih daripada satu kendaraan tanpa mengganggu kelancaran akses</p>
                    </div>
                </div>
                <div
                    class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[44%] lg:w-[30.5%] flex flex-col gap-y-8 items-center justify-evenly">
                    <img src="{{ asset('images/home/gate-maura') }}.png" alt="Profile"
                        class="w-[29%] max-w-[400px] h-auto mt-4 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3
                            class="text-4xl text-headline5 text-center font-semibold text-slate-800 md:text-2xl">
                            One Gate System</h3>
                        <p class="text-justify text-body2 leading-normal font-semibold">Nikmati hunian
                            yang eksklusif dan aman dengan sistem One Gate System, di mana akses
                            keluar-masuk kawasan hanya melalui satu pintu utama yang dijaga oleh petugas
                            keamanan profesional. Sistem ini dirancang untuk memastikan privasi dan
                            keamanan Anda tetap terjaga. </p>
                    </div>
                </div>
                <div
                    class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[44%] lg:w-[30.5%] flex flex-col gap-y-8 items-center">
                    <img src="{{ asset('images/home/cctv-maura') }}.png" alt="Profile"
                        class="w-[29%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3
                            class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">
                            Security & CCTV 24 Jam</h3>
                        <p class="text-justify text-body2 leading-normal font-semibold">Dilengkapi
                            dengan sistem keamanan 24 jam yang dijaga oleh petugas profesional, didukung
                            oleh teknologi CCTV yang mengawasi setiap sudut kawasan nonstop. Nikmati
                            hidup lebih nyaman dan fokus pada hal-hal penting dalam hidup Anda, karena
                            kami selalu siap menjaga keamanan hunian Anda.</p>
                    </div>
                </div>
                <div
                    class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[44%] lg:w-[30.5%] flex flex-col gap-y-8 items-center justify-evenly">
                    <img src="{{ asset('images/home/map-maura') }}.png" alt="Profile"
                        class="w-[30%] max-w-[400px] h-auto mt-4 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3
                            class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">
                            Lokasi yang Strategis</h3>
                        <p class="text-justify text-body2 leading-normal font-semibold">Terletak di
                            lokasi yang sangat strategis, memberikan Anda kemudahan akses ke berbagai
                            fasilitas penting. Dekat dengan pusat pendidikan, layanan kesehatan, area
                            perbelanjaan, area industri, dan jalur transportasi utama</p>
                    </div>
                </div>
                <div
                    class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[44%] lg:w-[30.5%] flex flex-col gap-y-8 items-center">
                    <img src="{{ asset('images/home/run-maura') }}.png" alt="Profile"
                        class="mt-6 w-[25%] max-w-[400px] h-auto animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3
                            class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">
                            Fasilitas Umum yang Lengkap</h3>
                        <p class="text-justify text-body2 leading-normal font-semibold">Menghadirkan
                            hunian dengan fasilitas umum yang dirancang untuk memenuhi segala kebutuhan
                            Anda dan keluarga. Mulai dari taman bermain anak yang aman, area hijau yang
                            asri untuk bersantai, hingga fasilitas olahraga untuk menjaga kebugaran.</p>
                    </div>
                </div>
                <div
                    class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[44%] lg:w-[30.5%] flex flex-col gap-y-8 items-center justify-around">
                    <img src="{{ asset('images/home/camera-maura') }}.png" alt="Profile"
                        class="mt-6 w-[28%] max-w-[400px] h-auto animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3
                            class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">
                            Instagramable Photo Spot</h3>
                        <p class="text-justify text-body2 leading-normal font-semibold">Abadikan setiap
                            momen indah di Maura Hill dengan berbagai spot foto Instagramable yang
                            dirancang estetik dan modern. Dari taman hijau yang asri hingga area unik
                            dengan desain arsitektur memukau, setiap sudutnya siap menjadi latar
                            sempurna untuk foto-foto Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Article Section -->
    <!-- <div class=""> -->
    <!-- Sosial Media -->
    <section id="social-media">
        <div
            class=" font-bold border-b-4 px-4 py-4 bg-transparent text-center h-[50vh] flex flex-col gap-y-2 items-center justify-center text-additional1 sm:text-headline4 md:text-headline3">
            <h3 class="mx-auto text-slate-800">Kunjungi Instagram Kami</h3>
            <a href="https://www.instagram.com/official.maurahill/" class="text-primary-500 block">@official.maurahill</a>
        </div>
    </section>
    <!-- End Sosial Media -->
@endsection
