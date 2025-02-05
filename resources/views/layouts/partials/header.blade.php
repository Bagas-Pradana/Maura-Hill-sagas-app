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
                            <a href="{{ route('home') }}" class="navbar-link font-bold font-poppins text-primary-500">Beranda</a></li>
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('product') }}" class="navbar-link font-poppins text-headline5 text-primary-500 hover:font-bold">Produk Kami</a>
                        </li>
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('about') }}" class="navbar-link font-poppins text-primary-500 hover:font-bold">Tentang Kami</a>
                        </li>
                        <li class="group transition-all duration-300 ease-in-out">
                            <a href="{{ route('contact') }}" class="navbar-link font-poppins text-primary-500 hover:font-bold">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>