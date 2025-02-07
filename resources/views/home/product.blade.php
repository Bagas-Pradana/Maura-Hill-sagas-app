@extends('layouts.home')

@section('title', 'Maura Hill - Produk Kami')

@section('content')
    <!-- ---------------------------------------------------------------PRODUK KAMI-------------------------------------------- -->
    {{--  Hero Section --}}
    <section id="hero" class="relative w-full">
        <div class="bg-shade-white min-h-[75vh] flex flex-row items-center justify-center">
            <img src="{{ asset('images/banner-product.png') }}" alt="maura-hill" class="absolute opacity-15 bg-transparent object-cover h-full w-full mb-24">
            <span class="absolute text-primary-500 font-bold font-poppins text-headline4 md:text-headline2 lg:text-headline3 xl:text-headline2">Produk Kami</span>
            <div class="absolute flex flex-wrap -bottom-[4.75rem] md:-bottom-[5rem] lg:-bottom-[5.3rem] left-1/2 -translate-x-1/2 mb-24 w-full justify-center">
                <button type="button" id="rumah" class="py-1 font-bold text-primary-500 border-l-4 border-y-4 border-primary-500 bg-neutral-200 min-w-max w-[40%] sm:w-1/3 lg:w-1/3 md:text-[30px] text-headline6 sm:text-headline5 lg:text-[34px] xl:text-headline3 hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 whitespace-nowrap">RUMAH</button>
                <button type="button" id="fasilitas" class="py-1 font-bold text-primary-500 border-r-4 border-y-4 border-primary-500 bg-neutral-200 min-w-max w-[40%] sm:w-1/3 lg:w-1/3 md:text-[30px] text-headline6 sm:text-headline5 lg:text-[34px] xl:text-headline3 hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 whitespace-nowrap">FASILITAS</button>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}

    <!-- Banner Section -->


    <section id="banner-rumah-maura"
        class="bg-shade-white flex items-center min-h-screen relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] lg:order-first shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg overflow-hidden">
                <img src="{{ asset('images/product/maura-house-1.png') }}" alt="maura-house"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span class="block font-bold font-poppins text-slate-800 self-start lg:self-end text-headline4 lg:text-headline3 lg:text-end">
                    Rumah di 
                    <span class="block pb-2 text-primary-500 font-bold lg:pb-0 leading-12">
                        Maura Hill
                    </span>
                </span>
                <p class="font-poppins font-seminbold text-justify text-body2 w-full lg:text-end">
                    Rasakan pengalaman tinggal yang berbeda di <span class="text-primary-500">Maura
                        Hill</span> dengan desain rumah yang memadukan gaya Scandinavian minimalis dan
                    nuansa hangat ala Villa Bali. Perpaduan ini menghadirkan suasana yang elegan,
                    nyaman, dan penuh ketenangan, seperti sedang berlibur di pulau tropis setiap hari.
                </p>
            </div>
        </div>
    </section>
    <!-- end Banner Section -->

    <!-- --------------------------------------------------------------------------------------------------------HOUSE SECTION--------------------------------------------------------------------------- -->
     <!-- Content Section-->
    <section id="house-content" class="bg-shade-white sm:bg-neutral-200 min-h-screen px-10 sm:px-12 md:px-16 lg:px-20 sm:py-16">
            <div class="relative bg-shade-white flex min-h-full justify-center items-center text-headline4 md:text-headline3 sm:text-center">
                <div class="w-full bg-shade-white border-primary-500 pb-6 sm:border-[3.5px] flex flex-col gap-y-8 sm:flex-row sm:flex-wrap justify-evenly md:justify-center lg:px-8">
                    <!-- Button -->
                    <div class="pb-2 flex justify-between gap-x-4 lg:gap-x-8 w-full sm:w-4/5 lg:w-full overflow-x-auto pt-6 font-bold text-headline6 md:text-headline5 lg:text-headline4 px-0">
                        <button id="everest-button" type="button" id="rumah" class="uppercase flex-shrink-0 w-[45%] sm:min-w-max sm:w-[30%] py-1 border-4 border-primary-500 text-primary-500 text-center whitespace-nowrap">
                            EVEREST
                        </button>
                        
                        <button id="monstera-button" type="button" id="fasilitas" class="uppercase flex-shrink-0 w-[45%] sm:min-w-max sm:w-[30%] py-1 text-primary-500 border-4 border-primary-500 hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 text-center whitespace-nowrap">
                            MONSTERA
                        </button>
                        
                        <button id="are-button" type="button" id="are" class="uppercase flex-shrink-0 w-[45%] sm:min-w-max sm:w-[30%] py-1 text-primary-500 border-4 border-primary-500  hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 text-center whitespace-nowrap">
                            ARE
                        </button>
                        <button id="are-button" type="button" id="are" class="uppercase flex-shrink-0 w-[45%] sm:min-w-max sm:w-[30%] py-1 text-primary-500 border-4 border-primary-500  hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 text-center whitespace-nowrap">
                            ARE
                        </button>
                    </div>

                    <!-- Everest Card -->
                    <div id="everest-index" class="bg-shade-white flex flex-col gap-y-8 min-h-full lg:h-auto justify-center lg:justify-around items-center text-headline4 md:text-headline3 sm:text-center lg:w-[100%] lg:flex-row lg:gap-x-12 lg:p-0 overflow-hidden">
                        
                        <!-- Gambar tetap di sebelah kiri dengan ukuran asli -->
                        <div class="relative pb-2 sm:static flex justify-center aspect-[8/9.8] sm:aspect-[8/7.25] md:aspect-[8/6.6] w-full lg:aspect-[1/1.4] xl:aspect-[1/1.25] pt-6 lg:w-[55%] sm:animate-veryslow-bounce lg:order-first overflow-hidden lg:overflow-visible">
                            <img id="everest-house" src="{{ asset('images/product/house.png') }}" alt="Everest" class="shadow-lg shadow-slate-800 rounded-xl max-w-[425px] object-cover object-bottom w-fit h-full">
                            <button id="left-button" type="button" class="absolute top-1/2 -translate-y-1/2 left-[1.5rem] sm:left-[4.5rem] md:left-[8.5rem] lg:left-[1rem] xl:left-[3.5rem] 2xl:left-[8.5rem]">
                                <img src="{{ asset('images/product/arrow-left.png') }}" alt="left" class="object-cover object-bottom scale-75 sm:scale-100 w-full h-full">
                            </button>
                            <button id="right-button" type="button" class="absolute top-1/2 -translate-y-1/2 right-[1.85rem] sm:right-[5rem] md:right-[9rem] lg:right-[1.5rem] xl:right-[4rem] 2xl:right-[9rem]">
                                <img src="{{ asset('images/product/arrow-right.png') }}" alt="right" class="object-cover object-bottom scale-75 sm:scale-100 w-full h-full">
                            </button>
                        </div>
                        <!-- Wrapper kanan (Text, Spesifikasi, dan Table) -->
                        <div class="lg:h-full gap-y-6 lg:gap-12 flex flex-col lg:items-center lg:justify-center sm:w-4/5 lg:w-[60%] xl:w-[70%] overflow-hidden max-w-full">
                            <!-- Judul & Deskripsi -->
                            <div class="flex flex-col gap-y-6 lg:gap-6 w-full max-w-full overflow-hidden">
                                <span class="uppercase block leading-[28px] text-primary-500 font-bold lg:leading-9 sm:text-headline4 sm:leading-6 lg:text-headline4 xl:text-[42px] lg:pb-0 lg:text-left text-center break-words w-full">
                                    EVEREST
                                </span>
                                <div class="block md:flex md:flex-row md:justify-center lg:block">
                                    <p class="text-justify text-body2 w-full sm:text-body1 xl:text-headline6  break-words text-wrap sm:font-bold lg:text-justify lg:w-full ">
                                        Rumah 2 lantai dengan lebar 5 ini cocok untuk Anda dan keluarga Anda untuk bertumbuh bersama dan menikmati lingkungan yang nyaman.
                                    </p>
                                </div>
                            </div>
                    
                            <!-- Spesifikasi (Dibawah <p>) -->
                            <div class="flex gap-y-4 flex-col gap-6 max-w-full">
                                <div class="w-full font-poppins text-body1 sm:text-headline6 lg:text-headline6 xl:text-headline5 break-words">
                                    <span class="block text-primary-500 font-bold text-center pb-4 lg:pb-0 lg:text-left">SPESIFIKASI UNIT EVEREST</span>
                                    <span class="block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">DUA LANTAI</span>
                                    <span class="block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">6 X 10</span>
                                </div>
                    
                                <!-- Tabel (Dibawah div spesifikasi) -->
                                <div class="flex sm:justify-around lg:justify-normal overflow-auto w-full max-w-full pb-2">
                                    <table class="table-fixed min-w-[40rem] md:min-w-[45rem] lg:min-w-[35rem] max-w-full border-collapse font-poppins text-body2 sm:text-body1 lg:text-body1 xl:text-headline6 text-primary-500">
                                        <thead>
                                            <tr class="px-2 border-2 border-primary-500 text-shade-white bg-primary-500">
                                                <th class="px-2 break-words">Luas Tanah</th>
                                                <th class="px-2 break-words">Luas Bangunan</th>
                                                <th class="px-2 break-words">Kamar Tidur</th>
                                                <th class="px-2 break-words">Kamar Mandi</th>
                                                <th class="px-2 break-words">Parkir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-2 border-primary-500 text-primary-500 bg-shade-white text-center">
                                                <td class="px-2 break-words">60</td>
                                                <td class="px-2 break-words">44</td>
                                                <td class="px-2 break-words">2</td>
                                                <td class="px-2 break-words">2</td>
                                                <td class="px-2 break-words">1 Mobil</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Everest  End-->

                    <!-- Monstera Card -->
                    <div id="monstera-index" class="bg-shade-white flex flex-col gap-y-8 min-h-full lg:h-auto justify-center lg:justify-around items-center text-headline4 md:text-headline3 sm:text-center lg:w-[100%] lg:flex-row lg:gap-x-12 lg:p-0 overflow-hidden">
                        
                        <!-- Gambar tetap di sebelah kiri dengan ukuran asli -->
                        <div class="relative pb-2 sm:static flex justify-center aspect-[8/9.8] sm:aspect-[8/7.25] md:aspect-[8/6.6] w-full lg:aspect-[1/1.4] xl:aspect-[1/1.25] pt-6 lg:w-[55%] sm:animate-veryslow-bounce lg:order-first overflow-hidden lg:overflow-visible">
                            <img id="monstera-house" src="{{ asset('images/product/monstera.png') }}" alt="Monstera" class=" shadow-lg shadow-slate-800 rounded-xl max-w-[425px] object-cover object-bottom sm:w-fit h-full">
                            <button id="left-button-monstera" type="button" class="absolute top-1/2 -translate-y-1/2 left-[1.5rem] sm:left-[4.5rem] md:left-[8.5rem] lg:left-[1rem] xl:left-[3.5rem] 2xl:left-[8.5rem]">
                                <img src="{{ asset('images/product/arrow-left.png') }}" alt="left" class="object-cover object-bottom scale-75 sm:scale-100 w-full h-full">
                            </button>
                            <button id="right-button-monstera" type="button" class="absolute top-1/2 -translate-y-1/2 right-[1.85rem] sm:right-[5rem] md:right-[9rem] lg:right-[1.5rem] xl:right-[4rem] 2xl:right-[9rem]">
                                <img src="{{ asset('images/product/arrow-right.png') }}" alt="right" class="object-cover object-bottom scale-75 sm:scale-100 w-full h-full">
                            </button>
                        </div>
                        <!-- Wrapper kanan (Text, Spesifikasi, dan Table) -->
                        <div class="px-4 sm:px-0 lg:h-full gap-y-6 lg:gap-12 flex flex-col lg:items-center lg:justify-center sm:w-[80%] lg:w-[60%] xl:w-[70%] overflow-hidden max-w-full">
                            
                            <!-- Judul & Deskripsi -->
                            <div class="flex flex-col gap-y-6 lg:gap-6 w-full max-w-full overflow-hidden">
                                <span class="uppercase block leading-[28px] text-primary-500 font-bold lg:leading-9 sm:text-headline4 sm:leading-6 lg:text-headline4 xl:text-[42px] lg:pb-0 lg:text-left text-center break-words w-full">
                                    MONSTERA
                                </span>
                                <div class="block md:flex md:flex-row md:justify-center lg:block">
                                    <p class="text-justify text-body2 w-full sm:text-body1 xl:text-headline6  break-words text-wrap sm:font-bold lg:text-justify lg:w-full ">
                                        Rumah satu lantai yang sangat populer di Grand Harvest. Rumah dengan low cost maintenance yang cocok untuk kamu dengan gaya hidup compact dan minimalist.
                                    </p>
                                </div>
                            </div>
                    
                            <!-- Spesifikasi (Dibawah <p>) -->
                            <div class="flex gap-y-4 flex-col gap-6 max-w-full">
                                <div class="w-full font-poppins text-body1 sm:text-headline6 lg:text-headline6 xl:text-headline5 break-words">
                                    <span class="block text-primary-500 font-bold text-center pb-4 lg:pb-0 lg:text-left">SPESIFIKASI UNIT MONSTERA</span>
                                    <span class="block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">SATU LANTAI</span>
                                    <span class="block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">5 X 12</span>
                                </div>
                    
                                <!-- Tabel (Dibawah div spesifikasi) -->
                                <div class="flex sm:justify-around lg:justify-normal overflow-auto border border-gray-300 w-full max-w-full pb-2">
                                    <table class="table-fixed min-w-[40rem] md:min-w-[45rem] lg:min-w-[35rem] max-w-full border-collapse font-poppins text-body2 sm:text-body1 lg:text-body1 xl:text-headline6 text-primary-500">
                                        <thead>
                                            <tr class="px-2 border-2 border-primary-500 text-shade-white bg-primary-500">
                                                <th class="px-2 break-words">Luas Tanah</th>
                                                <th class="px-2 break-words">Luas Bangunan</th>
                                                <th class="px-2 break-words">Kamar Tidur</th>
                                                <th class="px-2 break-words">Kamar Mandi</th>
                                                <th class="px-2 break-words">Parkir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-2 border-primary-500 text-primary-500 bg-shade-white">
                                                <td class="px-2 break-words">60</td>
                                                <td class="px-2 break-words">30</td>
                                                <td class="px-2 break-words">2</td>
                                                <td class="px-2 break-words">1</td>
                                                <td class="px-2 break-words">1 Mobil</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Monstera Card End -->
                    
                    <!-- Are Card -->
                    <div id="are-index" class="bg-shade-white flex flex-col gap-y-8 min-h-full lg:h-auto justify-center lg:justify-around items-center text-headline4 md:text-headline3 sm:text-center lg:w-[100%] lg:flex-row lg:gap-x-12 lg:p-0 overflow-hidden">
                        <!-- Gambar tetap di sebelah kiri dengan ukuran asli -->
                        <div class="relative pb-2 sm:static flex justify-center aspect-[8/9.8] sm:aspect-[8/7.25] md:aspect-[8/6.6] w-full lg:aspect-[1/1.4] xl:aspect-[1/1.25] pt-6 lg:w-[55%] sm:animate-veryslow-bounce lg:order-first overflow-hidden lg:overflow-visible">
                            <img id="are-house" src="{{ asset('images/product/are.png') }}" alt="Are" class=" shadow-lg shadow-slate-800 rounded-xl max-w-[425px] object-cover object-bottom sm:w-fit h-full">
                            <button id="left-button-are" type="button" class="absolute top-1/2 -translate-y-1/2 left-[1.5rem] sm:left-[4.5rem] md:left-[8.5rem] lg:left-[1rem] xl:left-[3.5rem] 2xl:left-[8.5rem]">
                                <img src="{{ asset('images/product/arrow-left.png') }}" alt="left" class="object-cover object-bottom scale-75 sm:scale-100 w-full h-full">
                            </button>
                            <button id="right-button-are" type="button" class="absolute top-1/2 -translate-y-1/2 right-[1.85rem] sm:right-[5rem] md:right-[9rem] lg:right-[1.5rem] xl:right-[4rem] 2xl:right-[9rem]">
                                <img src="{{ asset('images/product/arrow-right.png') }}" alt="right" class="object-cover object-bottom scale-75 sm:scale-100 w-full h-full">
                            </button>
                        </div>
                        <!-- Wrapper kanan (Text, Spesifikasi, dan Table) -->
                        <div class="px-4 sm:px-0 lg:h-full gap-y-6 lg:gap-12 flex flex-col lg:items-center lg:justify-center sm:w-[80%] lg:w-[60%] xl:w-[70%] overflow-hidden max-w-full">
                            
                            <!-- Judul & Deskripsi -->
                            <div class="flex flex-col gap-y-6 lg:gap-6 w-full max-w-full overflow-hidden">
                                <span class="uppercase block leading-[28px] text-primary-500 font-bold lg:leading-9 sm:text-headline4 sm:leading-6 lg:text-headline4 xl:text-[42px] lg:pb-0 lg:text-left text-center break-words w-full">
                                    ARE
                                </span>
                                <div class="block md:flex md:flex-row md:justify-center lg:block">
                                    <p class="text-justify text-body2 w-full sm:text-body1 xl:text-headline6  break-words text-wrap sm:font-bold lg:text-justify lg:w-full ">
                                        Rumah dengan 1 kamar, cocok untuk millennial yang produktif atau pasangan muda.
                                    </p>
                                </div>
                            </div>
                    
                            <!-- Spesifikasi (Dibawah <p>) -->
                            <div class="flex gap-y-4 flex-col gap-6 max-w-full">
                                <div class="w-full font-poppins text-body1 sm:text-headline6 lg:text-headline6 xl:text-headline5 break-words">
                                    <span class="block text-primary-500 font-bold text-center pb-4 lg:pb-0 lg:text-left">SPESIFIKASI UNIT ARE</span>
                                    <span class="block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">SATU LANTAI</span>
                                    <span class="block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">5 X 12</span>
                                </div>
                    
                                <!-- Tabel (Dibawah div spesifikasi) -->
                                <div class="flex sm:justify-around lg:justify-normal overflow-auto border border-gray-300 w-full max-w-full pb-2">
                                    <table class="table-fixed min-w-[40rem] md:min-w-[45rem] lg:min-w-[35rem] max-w-full border-collapse font-poppins text-body2 sm:text-body1 lg:text-body1 xl:text-headline6 text-primary-500">
                                        <thead>
                                            <tr class="px-2 border-2 border-primary-500 text-shade-white bg-primary-500">
                                                <th class="px-2 break-words">Luas Tanah</th>
                                                <th class="px-2 break-words">Luas Bangunan</th>
                                                <th class="px-2 break-words">Kamar Tidur</th>
                                                <th class="px-2 break-words">Kamar Mandi</th>
                                                <th class="px-2 break-words">Parkir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-2 border-primary-500 text-primary-500 bg-shade-white">
                                                <td class="px-2 break-words">60</td>
                                                <td class="px-2 break-words">25</td>
                                                <td class="px-2 break-words">1</td>
                                                <td class="px-2 break-words">1</td>
                                                <td class="px-2 break-words">1 Mobil</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Are Card End -->
                </div>
            </div>
    </section>
    <!-- -----------------------------------------------------END HOUSE SECTION----------------------------------------------------------- -->

    <!------------------------------------------------------------ FASILITY SECTION ------------------------------------------------------------------>
    <!-- -------------------------------------------------------MASJID--------------------------------------------------------------------- -->
    <section id="banner-masjid" class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
            <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
                <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-last overflow-hidden">
                    <img src="{{ asset('images/product/maura-masjid.png') }}" alt="Profile" class=" object-cover object-bottom w-full h-full">
                </div>
                <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                        <span class="block pb-2 text-primary-500 font-bold font-poppins leading-12 self-center text-headline5 sm:text-headline4 lg:self-start">
                            MASJID
                        </span>
                    <p class="font-poppins font-bold text-justify text-body2 w-full lg:text-start">
                        Dengan desain yang elegan dan ruang yang luas, masjid ini menjadi tempat yang sempurna untuk menjalankan kewajiban ibadah sehari-hari maupun kegiatan keagamaan lainnya. Terletak di pusat kawasan hunian, masjid ini mudah diakses oleh seluruh penghuni, memberikan kenyamanan dan kedamaian bagi keluarga Anda dalam setiap ibadah.
                    </p>
                </div>
            </div>
        </section>
        <!-- --------------------------------------------------------MASJID--------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------WALLCLIMBING--------------------------------------------------------------------- -->
    <section id="wall-climbing" class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
            <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
                <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-first overflow-hidden">
                    <img src="{{ asset('images/product/wall-climbing.png') }}" alt="Profile" class=" object-cover object-bottom w-full h-full">
                </div>
                <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                        <span class="block pb-2 text-primary-500 font-bold font-poppins leading-12 self-center text-headline5 sm:text-headline4 lg:self-end">
                            WALL CLIMBING
                        </span>
                    <p class=" font-poppins font-bold text-justify text-body2 w-full lg:text-end">
                        Dirancang untuk para pecinta olahraga ekstrem dan keluarga yang ingin mencoba sesuatu yang baru, fasilitas ini cocok untuk semua usia dan tingkat keahlian. Baik Anda seorang pemula yang ingin mencoba tantangan pertama atau seorang atlet yang ingin mengasah keterampilan, area Wall Climbing kami menawarkan pengalaman yang menyenangkan sekaligus memperkuat kebugaran tubuh.
                    </p>
                </div>
            </div>
        </section>
        <!-- --------------------------------------------------------WALLCLIMBING--------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------KIDSPLAYGROUND-------------------------------------------------------------------- -->
    <section id="kids-playground" class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
            <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
                <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-last overflow-hidden">
                    <img src="{{ asset('images/product/kids-playground.png') }}" alt="Profile" class=" object-cover object-bottom w-full h-full">
                </div>
                <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                        <span class="font-poppins block pb-2 text-primary-500 font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-start">
                            KIDS PLAYGROUND
                        </span>
                    <p class="font-poppins font-bold text-justify text-body2 w-full lg:text-start">
                        Kids Playground kami dirancang khusus untuk anak-anak dengan berbagai permainan yang edukatif dan menghibur, mulai dari ayunan, perosotan, hingga permainan interaktif lainnya. Semua fasilitas dilengkapi dengan material yang aman dan lingkungan yang bersih, sehingga anak-anak dapat bermain dengan bebas dan penuh keceriaan.
                    </p>
                </div>
            </div>
        </section>
        <!-- -------------------------------------------------------KIDSPLAYGROUND-------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------OUTDOOR GYM------------------------------------------------------------------- -->
    <section id="outdoor-gym" class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
            <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
                <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-first overflow-hidden">
                    <img src="{{ asset('images/product/outdoor-gym.png') }}" alt="Profile" class=" object-cover object-bottom w-full h-full">
                </div>
                <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                        <span class="block pb-2 text-primary-500 font-poppins font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-end">
                            OUTDOOR GYM
                        </span>
                    <p class="font-bold font-poppins text-justify text-body2 w-full lg:text-end">
                        Terletak di area terbuka yang asri, fasilitas ini memungkinkan Anda untuk berolahraga sambil menikmati udara segar dan pemandangan yang menenangkan. Mulai dari latihan kardio hingga penguatan otot, semua bisa dilakukan dengan nyaman di sini. Dengan suasana alam yang mendukung, Anda bisa menjaga kebugaran tubuh secara optimal sambil merasakan ketenangan.
                    </p>
                </div>
            </div>
        </section>
        <!-- -------------------------------------------------------OUTDOOR GYM------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------JOGGING TRACK-------------------------------------------------------------------- -->
    <section id="jogging-track" class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
            <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
                <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-last overflow-hidden">
                    <img src="{{ asset('images/product/jogging-track.png') }}" alt="Profile" class=" object-cover object-bottom w-full h-full">
                </div>
                <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                        <span class="block pb-2 text-primary-500 font-poppins font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-start">
                            JOGGING TRACK
                        </span>
                    <p class="font-poppins font-bold text-justify text-body2 w-full lg:text-start">
                        Dikelilingi oleh pemandangan alam yang indah, jalur jogging ini menawarkan pengalaman berlari yang menyegarkan dan menenangkan. Cocok untuk pagi yang penuh semangat atau sore yang santai, fasilitas ini memberi Anda ruang untuk menjaga kebugaran tubuh sambil menikmati udara segar. Dengan trek yang aman dan nyaman, Anda bisa berlari atau berjalan dengan bebas, sekaligus merasakan kedamaian lingkungan sekitar.
                    </p>
                </div>
            </div>
        </section>
        <!-- -------------------------------------------------------JOGGING TRACK-------------------------------------------------------------------- -->
    
    <!-- -----------------------------------------------------BARBEQUE------------------------------------------------------------------- -->
    <section id="barbeque" class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:px-20 py-20">
            <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
                <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-first overflow-hidden">
                    <img src="{{ asset('images/product/barbeque.png') }}" alt="Profile" class=" object-cover object-bottom w-full h-full">
                </div>
                <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                        <span class="block pb-2 font-poppins text-primary-500 font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-end">
                            BARBEQUE
                        </span>
                    <p class="font-poppins font-bold text-justify text-body2 w-full lg:text-end">
                        Area ini dilengkapi dengan fasilitas yang nyaman dan aman, sempurna untuk mengadakan pesta kecil atau sekadar menikmati malam santai dengan hidangan lezat yang Anda masak sendiri. Dikelilingi oleh suasana hijau yang asri dan udara segar, barbeque area ini menjadi tempat ideal untuk mempererat hubungan dan menciptakan kenangan tak terlupakan.
                    </p>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------BARBEQUE------------------------------------------------------------------- -->
        <!-- ------------------------------------------------------------END FASILITY SECTION--------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------PRODUK KAMI-------------------------------------------- -->
@endsection

@push('scripts')
    <script src="{{ asset('scripts/produk.js') }}"></script>
@endpush
