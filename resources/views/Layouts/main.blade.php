<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <title>Maura-Hill</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Header Section -->
    <header id="header" class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 backdrop-blur-sm">
        <div id="customize" class="container xl:px-20">
            <div class="w-full flex items-center justify-between relative">
                <div class="px-0">
                    <a  href="#" class="font-bold text-lg text-primary block py-3">
                        <img class="" src="Img/logo-maura.png" alt="Logo" width="100"/>
                    </a>
                </div>
                <div class="flex items-center px-0 lg:w-[60%] xl:w-1/2">
                    <button id="hamburger" name="hamburger" class="block absolute right-0 lg:hidden">
                        <span class="hamburger-line origin-top-right"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line origin-bottom-right"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-xl rounded-md max-w-[350px] w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex lg:justify-between text-black">
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-bold font-poppins text-primary-500">Beranda</a></li>
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-poppins text-headline5 text-primary-500 hover:font-bold">Produk Kami</a>
                            </li>
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-poppins text-primary-500 hover:font-bold">Tentang Kami</a>
                            </li>
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-poppins text-primary-500 hover:font-bold">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->
    <!-- Hero Section -->
    <section id="hero" class="relative w-full min-h-screen overflow-hidden">
        <div class="relative font-poppins font-semibold text-headline5 min-w-7xl bg-transparent sm:bg-sky-200 sm:text-2xl lg:text-headline4 md:min-w-96 md:mx-0 lg:w-full min-h-screen">
            <span id="form-title" class="absolute top-[5.75rem] sm:top-[5.75rem] lg:top-[7.3rem] right-14 sm:right-44 text-primary-500 transition-opacity animate-fadeOutIn">Selamat Datang</span>
            <span id="form-title2" class="absolute top-[8rem] lg:top-[10.5rem] right-4 text-primary-500 transition-opacity animate-fadeOutIn">Di Rumah Idaman</span>
            <img src="Img/background_langit.png" alt="Profile" class="shadow-slate-400 object-right object-cover sm:w-full lg:max-w-full min-h-screen">
            <div class="absolute mx-auto bottom-4 md:bottom-28 lg:bottom-48 left-1/2 -translate-x-1/2 items-center justify-center animate-custom-pulse">
                <a href="#banner" class=" text-neutral-50 mx-auto block font-poppins text-headline4 -rotate-90 font-semibold">⟨</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Banner Section -->
    <section id="banner" class="pt-24 pb-12 min-h-screen flex items-center relative lg:pb-24">
        <div class="relative p-8 flex flex-col gap-y-8 min-h-full justify-center lg:justify-between items-center text-headline4 md:text-headline3 sm:text-center sm:px-20 lg:flex-row lg:px-12 lg:p-0">
            <div class="aspect-[6/5] max-w-[425px] lg:max-w-none w-full lg:w-[40%] lg:order-last shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-xl overflow-hidden">
                <img src="Img/house-1.png" alt="Profile" class=" object-cover object-bottom w-full h-full">
            </div>
            <!-- <img src="Img/house-1.png" alt="Profile" class="rounded-xl aspect-[6/5] max-w-[400px] lg:max-w-max w-[45%] object-cover object-bottom lg:order-last sm:animate-veryslow-bounce"> -->
            <div class="w-full md:w-[80%] lg:w-[45%] flex flex-col gap-y-4">
                <span class="block font-bold text-slate-800 self-start sm:text-4xl sm:self-auto lg:text-headline3 lg:text-left">
                    Welcome To 
                    <span class="block pb-2 text-primary-500 font-bold leading-9 sm:text-4xl sm:leading-relaxed lg:text-headline3 lg:pb-0">
                        Maura Hill
                    </span>
                </span>
                <p class="text-justify text-body2 w-full">
                    Temukan rumah idaman Anda di lingkungan yang nyaman, asri, dan strategis. <span class="text-primary-500">Maura Hill</span> hadir untuk memenuhi kebutuhan hunian keluarga modern dengan desain elegan, fasilitas lengkap, dan akses mudah ke berbagai pusat aktivitas.
                </p>
                <p class="hidden sm:block text-body1 font-semibold sm:self-start">A Place Where Do You Feel Alive.</p>
            </div>
        </div>
        <!-- <div class="absolute mx-auto bottom-2 right-1/2 inline-flex items-center justify-center animate-custom-pulse"> -->
        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 animate-custom-pulse">
            <!-- <a href="#facility" class="text-primary-500 mx-auto block text-headline4 -rotate-90 font-semibold">⟨</a> -->
            <a href="#facility" class="text-primary-500 block text-headline4 -rotate-90 font-semibold">⟨</a>
        </div>
    </section>
    <!-- End Banner Section -->
    <!-- Article Section -->
    <section id="facility">
        <div class="border-y-4 py-[6.5rem] font-poppins bg-primary-500 sm:border-0 sm:border-b-4 sm:bg-primary-500">
            <h1 class="mx-auto text-headline4 text-center font-bold text-slate-800 sm:text-[40px] sm:leading-tight md:text-headline3">Kenapa Harus Beli <span class="leading-[3.5rem] text-neutral-50 sm:text-neutral-50 block md:leading-relaxed">di Maura Hill?</span></h1>
            <!-- Container untuk card -->
            <div class="p-8 flex flex-col items-center gap-10 sm:flex-row sm:flex-wrap sm:items-stretch sm:justify-between sm:gap-4 sm:gap-y-10 sm:px-6">
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="Img/row-maura.png" alt="Profile" class="w-[31.5%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3 class="text-center text-headline5 font-semibold text-neutral-900 md:text-2xl">ROW Jalan 10 Meter</h3>
                        <p class="text-justify text-body2">Kemewahan sebuah kawasan tidak hanya pada sisi produk bangunan saja, kemewahan yang sebenarnya di Grand Harvest adalah kelegaan pada ROW jalan minimum 10 meter. Memungkinkan warga memiliki lebih daripada satu kendaraan tanpa mengganggu kelancaran akses</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="Img/gate-maura.png" alt="Profile" class="w-[29%] max-w-[400px] h-auto mt-8 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="text-4xl text-headline5 text-center font-semibold text-slate-800 md:text-2xl">One Gate System</h3>
                    <p class="text-justify text-body2 leading-normal">Nikmati hunian yang eksklusif dan aman dengan sistem One Gate System, di mana akses keluar-masuk kawasan hanya melalui satu pintu utama yang dijaga oleh petugas keamanan profesional. Sistem ini dirancang untuk memastikan privasi dan keamanan Anda tetap terjaga. </p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="Img/cctv-maura.png" alt="Profile" class="w-[29%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Security & CCTV 24 Jam</h3>
                    <p class="text-justify text-body2 leading-normal">Dilengkapi dengan sistem keamanan 24 jam yang dijaga oleh petugas profesional, didukung oleh teknologi CCTV yang mengawasi setiap sudut kawasan nonstop. Nikmati hidup lebih nyaman dan fokus pada hal-hal penting dalam hidup Anda, karena kami selalu siap menjaga keamanan hunian Anda.</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="Img/map-maura.png" alt="Profile" class="w-[29%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Lokasi yang Strategis</h3>
                    <p class="text-justify text-body2 leading-normal">Terletak di lokasi yang sangat strategis, memberikan Anda kemudahan akses ke berbagai fasilitas penting. Dekat dengan pusat pendidikan, layanan kesehatan, area perbelanjaan, area industri, dan jalur transportasi utama</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="Img/run-maura.png" alt="Profile" class="mt-6 w-[25%] max-w-[400px] h-auto animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Fasilitas Umum yang Lengkap</h3>
                    <p class="text-justify text-body2 leading-normal">Menghadirkan hunian dengan fasilitas umum yang dirancang untuk memenuhi segala kebutuhan Anda dan keluarga. Mulai dari taman bermain anak yang aman, area hijau yang asri untuk bersantai, hingga fasilitas olahraga untuk menjaga kebugaran.</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="Img/camera-maura.png" alt="Profile" class="mt-6 w-[28%] max-w-[400px] h-auto animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Instagramable Photo Spot</h3>
                    <p class="text-justify text-body2 leading-normal">Abadikan setiap momen indah di Maura Hill dengan berbagai spot foto Instagramable yang dirancang estetik dan modern. Dari taman hijau yang asri hingga area unik dengan desain arsitektur memukau, setiap sudutnya siap menjadi latar sempurna untuk foto-foto Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Article Section -->
    <!-- <div class=""> -->
    <!-- Sosial Media -->
    <section id="social-media">
        <div class="font-poppins font-bold border-b-4 px-4 py-4 bg-transparent text-center h-[50vh] flex flex-col gap-y-2 items-center justify-center text-additional1 sm:text-headline4 md:text-headline3">
            <h3 class="mx-auto text-slate-800">Kunjungi Instagram Kami</h3>
            <span class="text-primary-500 block">@official.maurahill</span>
        </div>
    </section>
    <!-- End Sosial Media -->
    <!-- Info Kontak -->
    <section id="contact-us" class="pt-28 pb-12 lg:pt-40 min-h-screen bg-primary-500">
        <div class="relative flex flex-col items-center gap-y-10 font-poppins px-8 text-center lg:flex-row lg:gap-x-28 lg:pl-12">
            <img src="Img/logo-maura-white.png" alt="Profile" class="w-fit h-28 lg:w-[20%] lg:h-auto">
            <div class="flex flex-col gap-y-6 md:flex-row md:flex-wrap md:justify-center lg:gap-y-2">
                <!-- Hubungi Kami -->
                <div class="flex flex-col items-center md:w-[50%] md:items-start md:px-12 md:pl-16 lg:pl-0">
                    <h3 class="text-headline5 font-semibold text-neutral-50 sm:text-headline4 lg:text-2xl lg:pb-4">Hubungi Kami</h3>
                    <h3 class="text-body1 font-bold text-additional-color2 sm:text-body1">Nomer WhatsApp</h3>
                    <span class="text-additional-color1 font-semibold sm:text-body1">0821 2323 2497</span>
                </div>
                <!-- Alamat Kami -->
                <div class="flex flex-col items-center md:w-[50%] md:items-start md:px-12 md:pr-16 lg:pr-0">
                    <h3 class="text-headline5 font-semibold text-neutral-50 sm:text-headline4 lg:text-2xl lg:pb-4">Alamat Kami</h3>
                    <h3 class="text-body1 font-bold text-additional-color2 sm:text-body1">Marketing Gallery</h3>
                    <span class="w-[80%] text-additional-color1 text-justify text-body1 block font-semibold sm:text-body1 md:w-full">
                        Jl. Raya Dungus Cerme, Kendal, Dungus, Kec. Cerme, Kabupaten Gresik, Jawa Timur
                    </span>
                </div>
                <!-- Develop By -->
                <div class="flex flex-col gap-4 md:gap-0 items-center sm:gap-3 sm:items-center sm:text-left md:items-start md:flex-row md:w-[50%] md:px-12 md:pr-16 lg:pr-0 order-last">
                    <h3 class="text-headline5 font-semibold text-neutral-50 md:text-[22px] md:flex-1 md:self-center ">Developed By</h3>
                    <img src="Img/logo-bejo-joyo.png" alt="Profile" class="w-[25%] md:w-[35%]">
                </div>
                <!-- Follow Us -->
                <div class="flex flex-col items-center sm:text-left md:items-start md:w-[50%] md:px-12 md:pl-16 lg:pl-0">
                    <h3 class="text-headline5 font-bold text-neutral-50 pb-2">Follow Us</h3>
                    <div class="flex gap-[0.75rem] items-center justify-center w-[50%] md:justify-start">
                        <img src="Img/instagram.png" alt="Profile" class="">
                        <img src="Img/facebook.png" alt="Profile" class="">
                        <img src="Img/tiktok.png" alt="Profile" class="">
                    </div>
                </div>
                <div class="absolute mx-auto -bottom-10 lg:-bottom-32 left-1/2 -translate-x-1/2 inline-flex items-center justify-center animate-custom-pulse">
                    <a href="#hero" class="text-neutral-50 mx-auto block text-headline4 rotate-90 font-semibold">⟨</a>
                </div> 
            </div>
        </div>
    </section>
    <!-- End Info Kontak-->
    <!-- Footer -->
    <footer id="copyright">
        <div class="flex font-poppins border-y-4 px-4 py-4 bg-transparent justify-center flex-wrap gap-2">
            <img src="Img/C.png" alt="Profile" class="rounded-xl shadow-xl w-fit max-h-72 self-center sm:scale-105">
            <span class="text-primary-500 py-2 text-body2 sm:text-body1 lg:font-semibold">Maura Hill 2025. All Rights Reserved.</span>
        </div>
    </footer>
    <!-- Footer -->
    <script src="Js/script.js"></script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="Img/output.css"/>
    <link rel="stylesheet" href="Img/style.css"/>
</head>
<body>

    <script src="dist/js/script.js"></script>
</body>
</html> --}}

<!-- <div class="bg-rounded-home"></div> -->
    {{-- <!-- Header Section -->
    <header id="header" class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 backdrop-blur-sm">
        <div id="customize" class="container xl:px-20">
            <div class="w-full flex items-center justify-between relative">
                <div class="px-0">
                    <a  href="#" class="font-bold text-lg text-primary block py-3">
                        <img class="" src="dist/img/logo-maura.png" alt="Logo" width="100"/>
                    </a>
                </div>
                <div class="flex items-center px-0 lg:w-[60%] xl:w-1/2">
                    <button id="hamburger" name="hamburger" class="block absolute right-0 lg:hidden">
                        <span class="hamburger-line origin-top-right"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line origin-bottom-right"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-xl rounded-md max-w-[350px] w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex lg:justify-between text-black">
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-bold font-poppins text-primary-500">Beranda</a></li>
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-poppins text-headline5 text-primary-500 hover:font-bold">Produk Kami</a>
                            </li>
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-poppins text-primary-500 hover:font-bold">Tentang Kami</a>
                            </li>
                            <li class="group transition-all duration-300 ease-in-out">
                                <a href="#" class="navbar-link font-poppins text-primary-500 hover:font-bold">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->
    <!-- Hero Section -->
    <section id="hero" class="relative w-full min-h-screen overflow-hidden">
        <div class="relative font-poppins font-semibold text-headline5 min-w-7xl bg-transparent sm:bg-sky-200 sm:text-2xl lg:text-headline4 md:min-w-96 md:mx-0 lg:w-full min-h-screen">
            <span id="form-title" class="absolute top-[5.75rem] sm:top-[5.75rem] lg:top-[7.3rem] right-14 sm:right-44 text-primary-500 transition-opacity animate-fadeOutIn">Selamat Datang</span>
            <span id="form-title2" class="absolute top-[8rem] lg:top-[10.5rem] right-4 text-primary-500 transition-opacity animate-fadeOutIn">Di Rumah Idaman</span>
            <img src="dist/img/background_langit.png" alt="Profile" class="shadow-slate-400 object-right object-cover sm:w-full lg:max-w-full min-h-screen">
            <div class="absolute mx-auto bottom-4 md:bottom-28 lg:bottom-48 left-1/2 -translate-x-1/2 items-center justify-center animate-custom-pulse">
                <a href="#banner" class=" text-neutral-50 mx-auto block font-poppins text-headline4 -rotate-90 font-semibold">⟨</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Banner Section -->
    <section id="banner" class="pt-24 pb-12 min-h-screen flex items-center relative lg:pb-24">
        <div class="relative p-8 flex flex-col gap-y-8 min-h-full justify-center lg:justify-between items-center text-headline4 md:text-headline3 sm:text-center sm:px-20 lg:flex-row lg:px-12 lg:p-0">
            <div class="aspect-[6/5] max-w-[425px] lg:max-w-none w-full lg:w-[40%] lg:order-last shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-xl overflow-hidden">
                <img src="dist/img/house-1.png" alt="Profile" class=" object-cover object-bottom w-full h-full">
            </div>
            <!-- <img src="dist/img/house-1.png" alt="Profile" class="rounded-xl aspect-[6/5] max-w-[400px] lg:max-w-max w-[45%] object-cover object-bottom lg:order-last sm:animate-veryslow-bounce"> -->
            <div class="w-full md:w-[80%] lg:w-[45%] flex flex-col gap-y-4">
                <span class="block font-bold text-slate-800 self-start sm:text-4xl sm:self-auto lg:text-headline3 lg:text-left">
                    Welcome To 
                    <span class="block pb-2 text-primary-500 font-bold leading-9 sm:text-4xl sm:leading-relaxed lg:text-headline3 lg:pb-0">
                        Maura Hill
                    </span>
                </span>
                <p class="text-justify text-body2 w-full">
                    Temukan rumah idaman Anda di lingkungan yang nyaman, asri, dan strategis. <span class="text-primary-500">Maura Hill</span> hadir untuk memenuhi kebutuhan hunian keluarga modern dengan desain elegan, fasilitas lengkap, dan akses mudah ke berbagai pusat aktivitas.
                </p>
                <p class="hidden sm:block text-body1 font-semibold sm:self-start">A Place Where Do You Feel Alive.</p>
            </div>
        </div>
        <!-- <div class="absolute mx-auto bottom-2 right-1/2 inline-flex items-center justify-center animate-custom-pulse"> -->
        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 animate-custom-pulse">
            <!-- <a href="#facility" class="text-primary-500 mx-auto block text-headline4 -rotate-90 font-semibold">⟨</a> -->
            <a href="#facility" class="text-primary-500 block text-headline4 -rotate-90 font-semibold">⟨</a>
        </div>
    </section>
    <!-- End Banner Section -->
    <!-- Article Section -->
    <section id="facility">
        <div class="border-y-4 py-[5.5rem] font-poppins bg-primary-500 sm:border-0 sm:border-b-4 sm:bg-primary-500">
            <h1 class="mx-auto text-headline4 text-center font-bold text-slate-800 sm:text-[40px] sm:leading-tight md:text-headline3">Kenapa Harus Beli <span class="leading-[3.5rem] text-neutral-50 sm:text-neutral-50 block md:leading-relaxed">di Maura Hill?</span></h1>
            <!-- Container untuk card -->
            <div class="p-8 flex flex-col items-center gap-10 sm:flex-row sm:flex-wrap sm:items-stretch sm:justify-between sm:gap-4 sm:gap-y-10 sm:px-6">
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="dist/img/row-maura.png" alt="Profile" class="w-[31.5%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                        <h3 class="text-center text-headline5 font-semibold text-neutral-900 md:text-2xl">ROW Jalan 10 Meter</h3>
                        <p class="text-justify text-body2">Kemewahan sebuah kawasan tidak hanya pada sisi produk bangunan saja, kemewahan yang sebenarnya di Grand Harvest adalah kelegaan pada ROW jalan minimum 10 meter. Memungkinkan warga memiliki lebih daripada satu kendaraan tanpa mengganggu kelancaran akses</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="dist/img/gate-maura.png" alt="Profile" class="w-[29%] max-w-[400px] h-auto mt-8 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="text-4xl text-headline5 text-center font-semibold text-slate-800 md:text-2xl">One Gate System</h3>
                    <p class="text-justify text-body2 leading-normal">Nikmati hunian yang eksklusif dan aman dengan sistem One Gate System, di mana akses keluar-masuk kawasan hanya melalui satu pintu utama yang dijaga oleh petugas keamanan profesional. Sistem ini dirancang untuk memastikan privasi dan keamanan Anda tetap terjaga. </p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="dist/img/cctv-maura.png" alt="Profile" class="w-[29%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Security & CCTV 24 Jam</h3>
                    <p class="text-justify text-body2 leading-normal">Dilengkapi dengan sistem keamanan 24 jam yang dijaga oleh petugas profesional, didukung oleh teknologi CCTV yang mengawasi setiap sudut kawasan nonstop. Nikmati hidup lebih nyaman dan fokus pada hal-hal penting dalam hidup Anda, karena kami selalu siap menjaga keamanan hunian Anda.</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="dist/img/map-maura.png" alt="Profile" class="w-[29%] max-w-[400px] h-auto mt-6 animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Lokasi yang Strategis</h3>
                    <p class="text-justify text-body2 leading-normal">Terletak di lokasi yang sangat strategis, memberikan Anda kemudahan akses ke berbagai fasilitas penting. Dekat dengan pusat pendidikan, layanan kesehatan, area perbelanjaan, area industri, dan jalur transportasi utama</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="dist/img/run-maura.png" alt="Profile" class="mt-6 w-[25%] max-w-[400px] h-auto animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Fasilitas Umum yang Lengkap</h3>
                    <p class="text-justify text-body2 leading-normal">Menghadirkan hunian dengan fasilitas umum yang dirancang untuk memenuhi segala kebutuhan Anda dan keluarga. Mulai dari taman bermain anak yang aman, area hijau yang asri untuk bersantai, hingga fasilitas olahraga untuk menjaga kebugaran.</p>
                    </div>
                </div>
                <div class="border-2 px-8 pt-8 pb-10 shadow-lg shadow-slate-700 bg-neutral-50 sm:w-[48%] lg:w-[31%] flex flex-col gap-y-8 items-center">
                    <img src="dist/img/camera-maura.png" alt="Profile" class="mt-6 w-[28%] max-w-[400px] h-auto animate-slow-bounce">
                    <div class="flex flex-col items-center gap-y-6">
                    <h3 class="mx-auto text-4xl text-headline5 text-center font-semibold text-slate-800 leading-relaxed md:text-2xl">Instagramable Photo Spot</h3>
                    <p class="text-justify text-body2 leading-normal">Abadikan setiap momen indah di Maura Hill dengan berbagai spot foto Instagramable yang dirancang estetik dan modern. Dari taman hijau yang asri hingga area unik dengan desain arsitektur memukau, setiap sudutnya siap menjadi latar sempurna untuk foto-foto Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Article Section -->
    <!-- <div class=""> -->
    <!-- Sosial Media -->
    <section>
        <div class="font-poppins font-bold border-b-4 px-4 py-4 bg-transparent text-center h-[50vh] flex flex-col gap-y-2 items-center justify-center text-additional1 sm:text-headline4 md:text-headline3">
            <h3 class="mx-auto text-slate-800">Kunjungi Instagram Kami</h3>
            <span class="text-primary-500 block">@official.maurahill</span>
        </div>
    </section>
    <!-- End Sosial Media -->
    <!-- Info Kontak -->
    <section id="contact-us" class="pt-28 pb-12 lg:pt-40 min-h-screen bg-primary-500">
        <div class="relative flex flex-col items-center gap-y-10 font-poppins px-8 text-center lg:flex-row lg:gap-x-28 lg:pl-12">
            <img src="dist/img/logo-maura-white.png" alt="Profile" class="w-fit h-28 lg:w-[20%] lg:h-auto">
            <div class="flex flex-col gap-y-6 md:flex-row md:flex-wrap md:justify-center lg:gap-y-2">
                <!-- Hubungi Kami -->
                <div class="flex flex-col items-center md:w-[50%] md:items-start md:px-12 md:pl-16 lg:pl-0">
                    <h3 class="text-headline5 font-semibold text-neutral-50 sm:text-headline4 lg:text-2xl lg:pb-4">Hubungi Kami</h3>
                    <h3 class="text-body1 font-bold text-additional-color2 sm:text-body1">Nomer WhatsApp</h3>
                    <span class="text-additional-color1 font-semibold sm:text-body1">0821 2323 2497</span>
                </div>
                <!-- Alamat Kami -->
                <div class="flex flex-col items-center md:w-[50%] md:items-start md:px-12 md:pr-16 lg:pr-0">
                    <h3 class="text-headline5 font-semibold text-neutral-50 sm:text-headline4 lg:text-2xl lg:pb-4">Alamat Kami</h3>
                    <h3 class="text-body1 font-bold text-additional-color2 sm:text-body1">Marketing Gallery</h3>
                    <span class="w-[80%] text-additional-color1 text-justify text-body1 block font-semibold sm:text-body1 md:w-full">
                        Jl. Raya Dungus Cerme, Kendal, Dungus, Kec. Cerme, Kabupaten Gresik, Jawa Timur
                    </span>
                </div>
                <!-- Develop By -->
                <div class="flex flex-col gap-4 md:gap-0 items-center sm:gap-3 sm:items-center sm:text-left md:items-start md:flex-row md:w-[50%] md:px-12 md:pr-16 lg:pr-0 order-last">
                    <h3 class="text-headline5 font-semibold text-neutral-50 md:text-[22px] md:flex-1 md:self-center ">Developed By</h3>
                    <img src="dist/img/logo-bejo-joyo.png" alt="Profile" class="w-[25%] md:w-[35%]">
                </div>
                <!-- Follow Us -->
                <div class="flex flex-col items-center sm:text-left md:items-start md:w-[50%] md:px-12 md:pl-16 lg:pl-0">
                    <h3 class="text-headline5 font-bold text-neutral-50 pb-2">Follow Us</h3>
                    <div class="flex gap-[0.75rem] items-center justify-center w-[50%] md:justify-start">
                        <img src="dist/img/instagram.png" alt="Profile" class="">
                        <img src="dist/img/facebook.png" alt="Profile" class="">
                        <img src="dist/img/tiktok.png" alt="Profile" class="">
                    </div>
                </div>
                <div class="absolute mx-auto -bottom-10 lg:-bottom-40 left-1/2 -translate-x-1/2 inline-flex items-center justify-center animate-custom-pulse">
                    <a href="#hero" class="text-neutral-50 mx-auto block text-headline4 rotate-90 font-semibold">⟨</a>
                </div> 
            </div>
        </div>
    </section>
    <!-- End Info Kontak-->
    <!-- Footer -->
    <footer>
        <div class="flex font-poppins border-y-4 px-4 py-4 bg-transparent justify-center flex-wrap gap-2">
            <img src="dist/img/C.png" alt="Profile" class="rounded-xl shadow-xl w-fit max-h-72 self-center sm:scale-105">
            <span class="text-primary-500 py-2 text-body2 sm:text-body1 lg:font-semibold">Maura Hill 2025. All Rights Reserved.</span>
        </div>
    </footer>
    <!-- Footer --> --}}