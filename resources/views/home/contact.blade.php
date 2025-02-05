@extends('layouts.home')

@section('title', 'Maura Hill - Kontak Kami')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="relative w-full">
        <div class=" relative font-poppins bg-shade-white md:h-auto max-w-full">
            <!-- <div class="relative flex flex-col bg-orange-500 h-max max-w-full"> -->
            <img src="dist/img/p.png" alt="Profile" class="mb-24 sm:mb-20 opacity-15 bg-transparent object-right object-cover h-[65vh] md:h-auto lg:max-w-full">
            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 text-primary-500 md:w-auto font-bold  w-full text-center text-headline4 md:text-[40px] lg:text-headline3 xl:text-headline2">Produk Kami</span>
            <!-- </div> -->
            <!-- <div class="absolute mx-auto bottom-4 md:bottom-28 lg:bottom-48 left-1/2 -translate-x-1/2 items-center justify-center animate-custom-pulse">
                <a href="#banner" class=" text-neutral-50 mx-auto block font-poppins text-headline4 -rotate-90 font-semibold">⟨</a>
            </div> -->
            <div class="absolute bg-shade-white flex flex-wrap -bottom-[7.8rem] left-1/2 -translate-x-1/2 z-10 mb-24 w-full justify-center">
                <button type="button" id="rumah" class="py-2 px-12 text-headline6 sm:text-headline5 font-bold text-primary-500 border-4 border-primary-500 bg-neutral-200 sm:px-[4rem] md:py-1 md:px-[6.5rem] md:text-[30px] lg:text-[34px] lg:py-2 lg:px-[7rem] xl:px-36 xl:text-[38px] hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 whitespace-nowrap">RUMAH</button>
                <button type="button" id="fasilitas" class="py-2 px-10 text-headline6 sm:text-headline5 font-bold text-primary-500 border-r-4 border-y-4 border-primary-500 bg-neutral-200 sm:px-[4rem] md:py-1 md:px-[6.5rem] md:text-[30px] lg:text-[34px] lg:py-2 lg:px-[7rem] xl:text-[38px] xl:px-36 hover:bg-primary-500 hover:text-neutral-50 active:bg-primary-400 active:opacity-95 whitespace-nowrap">FASILITAS</button>
            </div>
        </div>
    </section>
    <!-- End  Hero Section-->
@endsection