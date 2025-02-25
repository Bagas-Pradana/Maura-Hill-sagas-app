@extends('layouts.home')

@section('title', 'Maura Hill - Produk Kami')

@section('content')
    <!-- ---------------------------------------------------------------PRODUK KAMI-------------------------------------------- -->
    {{--  Hero Section --}}
    <section id="hero" class="relative w-full">
        <div class="bg-shade-white min-h-[75vh] flex flex-row items-center justify-center">
            <img src="{{ asset('images/banner-product.png') }}" alt="maura-hill"
                class="absolute opacity-15 bg-transparent object-cover h-full w-full mb-24">
            <span class="absolute text-primary-500 font-bold  text-headline4 md:text-headline2 lg:text-headline3 xl:text-headline2">Produk Kami</span>
            <div class="absolute flex flex-wrap -bottom-[4.5rem] md:-bottom-[5rem] lg:-bottom-[5.3rem] left-1/2 -translate-x-1/2 mb-24 w-full justify-center">
                <button type="button" id="rumah"
                    class="py-1 font-bold text-primary-500 border-l-4 border-y-4 border-primary-500 bg-neutral-200 min-w-max w-[40%] sm:w-1/3 lg:w-1/3 md:text-[30px] text-headline6 sm:text-headline5 lg:text-[34px] xl:text-headline3 hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 whitespace-nowrap">RUMAH</button>
                <button type="button" id="fasilitas"
                    class="py-1 font-bold text-primary-500 border-r-4 border-y-4 border-primary-500 bg-neutral-200 min-w-max w-[40%] sm:w-1/3 lg:w-1/3 md:text-[30px] text-headline6 sm:text-headline5 lg:text-[34px] xl:text-headline3 hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 whitespace-nowrap">FASILITAS</button>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}

    <!-- Banner Section -->
    <section id="banner-rumah-maura" class="bg-shade-white flex items-center min-h-screen relative px-8 sm:px-12 md:px-16 lg:p-20 py-20">
        <div class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] lg:order-first shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg overflow-hidden">
                <img src="{{ asset('images/product/maura-house-1.png') }}" alt="maura-house"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class="block font-bold  text-slate-800 self-start lg:self-end text-headline4 lg:text-headline3 lg:text-end">
                    Rumah di
                    <span class="block pb-2 text-primary-500 font-bold lg:pb-0 leading-12">
                        Maura Hill
                    </span>
                </span>
                <p class=" font-seminbold text-justify text-body2 w-full lg:text-end">
                    Rasakan pengalaman tinggal yang berbeda di <span class="text-primary-500">Maura
                        Hill</span> dengan desain rumah yang memadukan gaya Scandinavian minimalis dan
                    nuansa hangat ala Villa Bali. Perpaduan ini menghadirkan suasana yang elegan,
                    nyaman, dan penuh ketenangan, seperti sedang berlibur di pulau tropis setiap hari.
                </p>
            </div>
        </div>
    </section>
    <!-- end Banner Section -->

    <!-- --------------------------------------------------------------------------------------------------------HOUS SECTION--------------------------------------------------------------------------- -->

    <!-- Content Section-->
    <section id="house-content" class="bg-shade-white sm:bg-neutral-200 min-h-screen px-8 sm:px-12 md:px-16 lg:p-20 sm:py-16">
        <div class="bg-shade-white flex min-h-full justify-center items-center text-headline4 md:text-headline3 sm:text-center">
            <div class="w-full bg-shade-white border-primary-500 pb-10 sm:border-[3.5px] flex flex-col gap-y-8 sm:flex-row sm:flex-wrap justify-evenly md:justify-center lg:px-12">
                <!-- Button -->
                <div class="pb-2 pt-10 flex justify-between gap-x-4 lg:gap-x-8 w-full sm:w-4/5 lg:w-full overflow-x-auto font-bold text-headline6 md:text-headline5 lg:text-headline4 px-0">
                    @foreach ($products as $index => $product)
                    <button id="house-button" data-unit="{{ $product['unit'] }}" data-key="{{ $index }}" type="button"
                        class="house-button uppercase flex-shrink-0 w-[45%] sm:min-w-max sm:w-[30%] py-1 border-4 border-primary-500 text-primary-500 text-center whitespace-nowrap">
                        {{ $product['unit'] }}
                    </button>
                    @endforeach
                </div>
{{-- ------------------------------------------------- HOUSE CARD UNIT CONTENT-------------------------------------------------------------------------- --}}
                @foreach ($products as $key => $product)
                <div id="content-unit-{{ $key }}" data-unit="{{ $product['unit'] }}" data-key="{{ $key }}"
                class="house-container bg-shade-white flex flex-col gap-y-8 min-h-full lg:h-auto justify-center lg:justify-around items-center text-headline4 md:text-headline3 sm:text-center lg:w-[100%] lg:flex-row lg:gap-x-16 lg:gap-y-8 lg:p-0 overflow-hidden @if($key !== 0) hidden @endif">
                    <!-- Gambar tetap di sebelah kiri dengan ukuran asli -->
                    <div id="content"
                    class="py-4 relative flex justify-center aspect-[2/3] sm:aspect-[3/4] lg:aspect-[4/5] max-w-[305px] max-h-[450px] sm:max-w-[380px] md:max-w-[400px] sm:min-h-[550px] lg:max-w-[450px] lg:min-h-[730px] xl:min-h-[800px] sm:animate-veryslow-bounce lg:justify-center lg:items-center lg:order-first overflow-hidden">
                    @foreach ($product['images'] as $index => $productImages)
                            <img id="house-unit-{{ $key }}-{{ $index }}" src="{{ $productImages['url'] }}" data-index="{{ $index }}"
                                alt="{{ $productImages['title'] }}"
                                class="house-unit shadow-lg shadow-slate-800 rounded-xl h-full w-full lg:object-cover {{ $index !== 0 ? 'hidden' : '' }}" />
                        @endforeach
                        <button id="" type="button"
                            class="left-button absolute top-1/2 -translate-y-1/2 left-0.5  sm:left-[0.5rem] lg:left-[1rem] xl:left-[0.6rem] 2xl:left-[0.8rem]">
                            <img src="{{ asset('images/product/arrow-left.png') }}" alt="left"
                                class="object-cover object-bottom scale-75 sm:scale-90 w-full h-full">
                        </button>
                        <button id="" type="button"
                            class="right-button absolute top-1/2 -translate-y-1/2 right-0.5 sm:right-[0.5rem] lg:right-[1rem] xl:right-[0.6rem] 2xl:right-[0.8rem]">
                            <img src="{{ asset('images/product/arrow-right.png') }}" alt="right"
                                class="object-cover object-bottom scale-75 sm:scale-90 w-full h-full">
                        </button>
                    </div>

                    <!-- Wrapper kanan (Text, Spesifikasi, dan Table) -->
                    <div class="lg:h-full gap-y-6 lg:gap-12 flex flex-col lg:items-center lg:justify-center sm:w-4/5 lg:w-[60%] xl:w-[70%] overflow-hidden max-w-full">
                        <!-- Judul & Deskripsi -->
                        <div class="flex flex-col gap-y-6 lg:gap-6 w-full max-w-full overflow-hidden">
                            <span  class="uppercase block leading-[28px] text-primary-500 font-bold lg:leading-9 sm:text-headline4 sm:leading-6 lg:text-headline4 xl:text-[42px] 2xl:text-headline3 lg:pb-0 lg:text-left text-center break-words w-full"> unit {{ $product['unit'] }}</span>
                            <div class="block md:flex md:flex-row md:justify-center lg:block">
                                <p class="text-justify text-body2 w-full sm:text-body1 xl:text-headline6 2xl:text-headline5 break-words text-wrap sm:font-bold lg:text-justify lg:w-full ">{{ $product['description'] }}</p>
                            </div>
                        </div>

                        <!-- Spesifikasi (Dibawah <p>) -->
                        <div class="flex gap-y-4 flex-col xl:self-start gap-6 max-w-full">
                            <div class="w-full  text-body1 sm:text-headline6 lg:text-headline6 xl:text-headline5 2xl:text-headline4 break-words">
                                <span class="uppercase block text-primary-500 font-bold text-center pb-4 lg:pb-0 lg:text-left">SPESIFIKASI UNIT {{ $product['unit'] }}</span>
                                @foreach ($product['specification_list'] as $index => $productlist)
                                @if (!is_null($productlist))
                                <span class="uppercase block text-primary-500 font-semibold sm:text-left lg:pb-0 lg:text-left">{{ $productlist }}</span>
                                @endif
                                @endforeach
                            </div>

                            <!-- Tabel Everest-->
                            <div class="flex lg:justify-normal overflow-auto w-full max-w-full pb-2">
                                <div class="min-w-[40rem] md:min-w-[45rem] lg:min-w-[35rem] max-w-full  font-semibold text-body2 sm:text-body1 lg:text-body1 xl:text-headline6 2xl:text-headline5 text-primary-500 border-2 border-collapse border-primary-500">
                                    <!-- Div Header -->
                                    <div class="flex justify-center items-center w-full text-shade-white bg-primary-500">
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Luas
                                            Tanah</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center w-[27%]">
                                            Luas Bangunan</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Kamar
                                            Tidur</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Kamar
                                            Mandi</div>
                                        <div class="p-1 lg:p-2 break-words flex-1 text-center">Parkir
                                        </div>
                                    </div>

                                    <!-- Div Body -->
                                    <div class="flex justify-center items-center divide-x-2 divide-primary-500 text-primary-500 bg-shade-white text-center">
                                        @foreach ($product['specification_table'] as $index => $product)
                                        <div class="p-1 lg:p-3 break-words flex-1">{{ $product['value'] }} {{ $product['unit'] }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ------------------------------------------------- END HOUSE CARD UNIT CONTENT-------------------------------------------------------------------------- --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- -----------------------------------------------------END HOUSE SECTION----------------------------------------------------------- -->

    <!------------------------------------------------------------ FASILITY SECTION ------------------------------------------------------------------>
    <!-- -------------------------------------------------------MASJID--------------------------------------------------------------------- -->
    <section id="banner-masjid"
        class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:p-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-last overflow-hidden">
                <img src="{{ asset('images/product/maura-masjid.png') }}" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class="block pb-2 text-primary-500 font-bold  leading-12 self-center text-headline5 sm:text-headline4 lg:self-start">
                    MASJID
                </span>
                <p class=" font-bold text-justify text-body2 w-full lg:text-start">
                    Dengan desain yang elegan dan ruang yang luas, masjid ini menjadi tempat yang
                    sempurna untuk menjalankan kewajiban ibadah sehari-hari maupun kegiatan keagamaan
                    lainnya. Terletak di pusat kawasan hunian, masjid ini mudah diakses oleh seluruh
                    penghuni, memberikan kenyamanan dan kedamaian bagi keluarga Anda dalam setiap
                    ibadah.
                </p>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------MASJID--------------------------------------------------------------------- -->
    <!-- -------------------------------------------------------WALLCLIMBING--------------------------------------------------------------------- -->
    <section id="wall-climbing"
        class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:p-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-first overflow-hidden">
                <img src="{{ asset('images/product/wall-climbing.png') }}" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class="block pb-2 text-primary-500 font-bold  leading-12 self-center text-headline5 sm:text-headline4 lg:self-end">
                    WALL CLIMBING
                </span>
                <p class="  font-bold text-justify text-body2 w-full lg:text-end">
                    Dirancang untuk para pecinta olahraga ekstrem dan keluarga yang ingin mencoba
                    sesuatu yang baru, fasilitas ini cocok untuk semua usia dan tingkat keahlian. Baik
                    Anda seorang pemula yang ingin mencoba tantangan pertama atau seorang atlet yang
                    ingin mengasah keterampilan, area Wall Climbing kami menawarkan pengalaman yang
                    menyenangkan sekaligus memperkuat kebugaran tubuh.
                </p>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------WALLCLIMBING--------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------KIDSPLAYGROUND-------------------------------------------------------------------- -->
    <section id="kids-playground"
        class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:p-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-last overflow-hidden">
                <img src="{{ asset('images/product/kids-playground.png') }}" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class=" block pb-2 text-primary-500 font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-start">
                    KIDS PLAYGROUND
                </span>
                <p class=" font-bold text-justify text-body2 w-full lg:text-start">
                    Kids Playground kami dirancang khusus untuk anak-anak dengan berbagai permainan yang
                    edukatif dan menghibur, mulai dari ayunan, perosotan, hingga permainan interaktif
                    lainnya. Semua fasilitas dilengkapi dengan material yang aman dan lingkungan yang
                    bersih, sehingga anak-anak dapat bermain dengan bebas dan penuh keceriaan.
                </p>
            </div>
        </div>
    </section>
    <!-- -------------------------------------------------------KIDSPLAYGROUND-------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------OUTDOOR GYM------------------------------------------------------------------- -->
    <section id="outdoor-gym"
        class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:p-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-first overflow-hidden">
                <img src="{{ asset('images/product/outdoor-gym.png') }}" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class="block pb-2 text-primary-500  font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-end">
                    OUTDOOR GYM
                </span>
                <p class="font-bold  text-justify text-body2 w-full lg:text-end">
                    Terletak di area terbuka yang asri, fasilitas ini memungkinkan Anda untuk
                    berolahraga sambil menikmati udara segar dan pemandangan yang menenangkan. Mulai
                    dari latihan kardio hingga penguatan otot, semua bisa dilakukan dengan nyaman di
                    sini. Dengan suasana alam yang mendukung, Anda bisa menjaga kebugaran tubuh secara
                    optimal sambil merasakan ketenangan.
                </p>
            </div>
        </div>
    </section>
    <!-- -------------------------------------------------------OUTDOOR GYM------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------JOGGING TRACK-------------------------------------------------------------------- -->
    <section id="jogging-track"
        class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:p-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-last overflow-hidden">
                <img src="{{ asset('images/product/jogging-track.png') }}" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class="block pb-2 text-primary-500  font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-start">
                    JOGGING TRACK
                </span>
                <p class=" font-bold text-justify text-body2 w-full lg:text-start">
                    Dikelilingi oleh pemandangan alam yang indah, jalur jogging ini menawarkan
                    pengalaman berlari yang menyegarkan dan menenangkan. Cocok untuk pagi yang penuh
                    semangat atau sore yang santai, fasilitas ini memberi Anda ruang untuk menjaga
                    kebugaran tubuh sambil menikmati udara segar. Dengan trek yang aman dan nyaman, Anda
                    bisa berlari atau berjalan dengan bebas, sekaligus merasakan kedamaian lingkungan
                    sekitar.
                </p>
            </div>
        </div>
    </section>
    <!-- -------------------------------------------------------JOGGING TRACK-------------------------------------------------------------------- -->

    <!-- -----------------------------------------------------BARBEQUE------------------------------------------------------------------- -->
    <section id="barbeque"
        class="bg-shade-white min-h-screen flex items-center relative px-10 sm:px-12 md:px-16 lg:p-20 py-20">
        <div
            class="flex flex-col gap-y-8 min-h-full justify-center lg:flex-row lg:justify-between items-center">
            <div
                class="max-w-[425px] lg:max-w-none w-full lg:w-[50%] shadow-lg shadow-slate-800 sm:animate-veryslow-bounce rounded-lg lg:order-first overflow-hidden">
                <img src="{{ asset('images/product/barbeque.png') }}" alt="Profile"
                    class=" object-cover object-bottom w-full h-full">
            </div>
            <div class="w-full md:w-[80%] lg:w-[40%] flex flex-col gap-y-4 lg:gap-y-8">
                <span
                    class="block pb-2  text-primary-500 font-bold leading-12 self-center text-headline5 sm:text-headline4 lg:self-end">
                    BARBEQUE
                </span>
                <p class=" font-bold text-justify text-body2 w-full lg:text-end">
                    Area ini dilengkapi dengan fasilitas yang nyaman dan aman, sempurna untuk mengadakan
                    pesta kecil atau sekadar menikmati malam santai dengan hidangan lezat yang Anda
                    masak sendiri. Dikelilingi oleh suasana hijau yang asri dan udara segar, barbeque
                    area ini menjadi tempat ideal untuk mempererat hubungan dan menciptakan kenangan tak
                    terlupakan.
                </p>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------BARBEQUE------------------------------------------------------------------- -->
    <!-- ------------------------------------------------------------END FASILITY SECTION--------------------------------------------------------------------------- -->

@endsection

@push('scripts')
    <script src="{{ asset('scripts/produk.js') }}"></script>
@endpush
