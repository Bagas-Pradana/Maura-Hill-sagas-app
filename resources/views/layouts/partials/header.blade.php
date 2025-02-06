<header id="header"
    class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 backdrop-blur-sm">
    <div id="customize" class="container xl:px-12">
        <div class="w-full flex items-center justify-between relative">
            <div class="px-0">
                <a href="#" class="font-bold text-lg text-primary block py-3">
                    <img class="" src="{{ asset('Img/logo-maura.png') }}" alt="Logo"
                        width="100" />
                </a>
            </div>
            <div class="flex items-center px-0 lg:w-[60%] xl:w-2/3">
                <button id="hamburger" name="hamburger" class="block absolute right-0 lg:hidden">
                    <span class="hamburger-line origin-top-right"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line origin-bottom-right"></span>
                </button>
                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white shadow-xl rounded-md max-w-[350px] w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                    <ul
                        class="block lg:flex lg:justify-between text-black xl:justify-end xl:gap-x-16 px-6 lg:px-0">
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('home') }}"
                                class="{{ $active === 'index' ? 'underline underline-offset-8 decoration-amber-500 decoration-[3px]' : '' }} navbar-link lg:text-headline6 font-semibold font-poppins text-primary-500 hover:underline hover:underline-offset-8 hover:decoration-amber-500 hover:decoration-[3px]">Beranda</a>
                        </li>
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('product') }}"
                                class="{{ $active === 'product' ? 'underline underline-offset-8 decoration-amber-500 decoration-[3px]' : '' }} navbar-link lg:text-headline6 font-semibold font-poppins text-primary-500 hover:underline hover:underline-offset-8 hover:decoration-amber-500 hover:decoration-[3px]">Produk
                                Kami</a>
                        </li>
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('about') }}"
                                class="{{ $active === 'about' ? 'underline underline-offset-8 decoration-amber-500 decoration-[3px]' : '' }} navbar-link lg:text-headline6 font-semibold font-poppins text-primary-500 hover:underline hover:underline-offset-8 hover:decoration-amber-500 hover:decoration-[3px]">Tentang
                                Kami</a>
                        </li>
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('contact') }}"
                                class="{{ $active === 'contact' ? 'underline underline-offset-8 decoration-amber-500 decoration-[3px]' : '' }} navbar-link lg:text-headline6 font-semibold font-poppins text-primary-500 hover:underline hover:underline-offset-8 hover:decoration-amber-500 hover:decoration-[3px]">Contact
                                Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
