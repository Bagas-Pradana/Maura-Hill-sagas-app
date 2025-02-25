<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <!-- Head -->
    @include('layouts.partials.home.head')
    <!-- End Head -->
    <!-- Style -->
    @stack('styles')
    <!-- End Style -->
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header Section -->
    @include('layouts.partials.home.header')
    <!-- End Header Section -->
    <!-- Content Section -->
    @yield('content')
    <!-- End Section -->
    <!-- Footer -->
    @include('layouts.partials.home.footer')
    <!-- End Footer -->
    <!-- Start Popup -->
    <section id="popup-maura"
        class="fixed z-[99999] inset-0 px-4 lg:px-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div
            class="mt-8 w-full sm:w-1/2 sm:min-w-[625px] h-2/3 lg:h-4/5 bg-white p-6 pt-2 shadow-lg relative flex flex-col gap-y-0.5 rounded-xl">
            <div class="flex flex-none justify-between w-full">
                <img class="h-10" src="{{ asset('images/logo-maura.png') }}" alt="Logo">
                <button id="close-button"
                    class="text-primary-500 text-headline3 rounded leading-12">×</button>
            </div>
            <div class="flex-auto w-full rounded-lg shadow-md bg-purple-500">
                {{-- <img src="{{ asset('images/product/are-fit.png') }}" alt="House"
                    class="h-full rounded-xl"> --}}
            </div>
        </div>
    </section>
    <!-- Start Popup -->
    <!-- Start Contact -->
    <!-- Contact Number -->
    <section id="contact-number" class="fixed z-[9999]">
        <div class="w-16 h-16 bg-green-custom rounded-full fixed bottom-8 right-8">
            <button type="button" id="telephone-button"
                class="text-shade-white text-headline3 rounded leading-12 transition-transform duration-500 ease-in-out">
                <img src="{{ asset('images/telephone.png') }}" alt="Whatsapp" id="telephone"
                    class="w-full h-full p-2">
            </button>
        </div>
        <!-- List Kontak -->
        <div id="contact-card"
            class="hidden w-auto sm:w-2/5 md:w-2/5 lg:w-1/3 xl:w-1/4 bg-shade-white rounded-lg flex-col fixed bottom-28 right-8 max-h-[50vh] overflow-hidden ms-8 shadow-lg shadow-slate-600">
            <div class="rounded-lg p-4 flex justify-center items-center gap-x-4">
                <!-- Gambar di sebelah kiri -->
                <img src="{{ asset('images/admin-icon.png') }}" alt="Whatsapp" id="telephone"
                    class="w-12 h-12 flex-none">

                <!-- Teks di sebelah kanan -->
                <div class="flex flex-col text-center sm:justify-start items-start flex-auto">
                    <span class="text-body1 md:text-lg text-gray-800 font-bold">Start
                        Conversation</span>
                    <span class="text-body1 md:text-lg text-gray-800 font-bold">Maura
                        Management</span>
                </div>
            </div>
            <div class="flex flex-col gap-y-1 px-2 py-4 bg-gray-300">
                <a href="https://wa.me/6281231527168" target="_blank"
                    class="rounded-lg p-4 flex justify-center items-center gap-x-4 bg-primary-500 hover:opacity-75">
                    <!-- Gambar di sebelah kiri -->
                    <img src="{{ asset('images/whatsaap-icon.png') }}" alt="Whatsapp" id="telephone"
                        class="w-12 h-12 flex-none">

                    <!-- Teks di sebelah kanan -->
                    <div class="flex flex-col justify-start items-start flex-auto">
                        <span
                            class="text-body1 md:text-body1 md:text-lg text-shade-white font-bold">Marketing
                            Head</span>
                        <span class="text-body1 md:text-lg text-shade-white font-bold">Bianca lury,
                            S.H.</span>
                    </div>
                </a>
                <div
                    class="rounded-lg p-4 flex justify-center items-center gap-x-4 bg-primary-500 hover:opacity-75">
                    <!-- Gambar di sebelah kiri -->
                    <img src="{{ asset('images/whatsaap-icon.png') }}" alt="Whatsapp" id="telephone"
                        class="w-12 h-12 flex-none">

                    <!-- Teks di sebelah kanan -->
                    <div class="flex flex-col justify-start items-start flex-auto">
                        <span class="text-body1 md:text-lg text-shade-white  font-bold">Customer
                            Service</span>
                        <span class="text-body1 md:text-lg text-shade-white  font-bold">Fabrizio,
                            S.T.</span>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Contact -->
    </section>
    <!-- Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // POP UP
            function showPopup() {
                document.getElementById("popup-maura").style.display = "flex";
            }

            function hidePopup() {
                document.getElementById("popup-maura").style.display = "none";
                // Simpan waktu saat popup ditutup ke LocalStorage
                localStorage.setItem("lastPopupTime", Date.now());
            }

            function checkPopup() {
                const lastPopupTime = localStorage.getItem("lastPopupTime");
                const now = Date.now();
                const delay = 2 * 60 * 1000; // 2 menit dalam milidetik

                if (!lastPopupTime || now - lastPopupTime >= delay) {
                    showPopup();
                }
            }
            // Cek popup saat halaman dimuat
            window.addEventListener("load", checkPopup);
            // Tutup popup saat tombol close ditekan
            document.getElementById("close-button").addEventListener("click", hidePopup);
            // Periksa setiap 10 detik apakah waktu sudah cukup untuk menampilkan popup kembali
            setInterval(checkPopup, 10000);



            // Contact Number
            const button = document.getElementById('telephone-button');
            const icon = document.getElementById('telephone');

            if (button && icon) {
                button.addEventListener('click', function() {
                    // Cek apakah ikon sedang ditampilkan
                    if (icon.style.display !== 'none') {
                        // Jika ikon sedang ditampilkan, putar 180 derajat dan ganti dengan '×'
                        // button.classList.add('rotate-180');
                        setTimeout(() => {
                            button.classList.add(
                                'px-4'); // Tambahkan class m-auto
                            button.classList.add(
                                'pt-[0.55rem]'); // Tambahkan class m-auto
                            icon.style.display =
                                'none'; // Sembunyikan ikon telepon
                            button.textContent = '×'; // Ganti dengan simbol '×'
                            // button.classList.remove(
                            //     'rotate-180'); // Hapus class rotasi
                        }, 1);
                    } else {
                        // Jika '×' sedang ditampilkan, putar 180 derajat dan ganti dengan ikon telepon
                        // button.classList.add('rotate-180');
                        setTimeout(() => {
                            icon.style.display =
                                'block'; // Tampilkan ikon telepon
                                // button.classList.remove(
                                //     'rotate-180'); // Hapus class rotasi
                                button.classList.remove(
                                    'px-4'); // Hapus class m-auto
                                button.classList.remove(
                                    'pt-[0.55rem]'); // Hapus class m-auto
                            button.innerHTML =
                                `<img src="{{ asset('images/telephone.png') }}" alt="Whatsapp" id="telephone" class="w-full h-full p-2">`; // Tampilkan ikon telepon
                        }, 1);
                    }
                });
            } else {
                console.error(
                    'Elemen tidak ditemukan! Pastikan ID "telephone-button" dan "telephone" ada di HTML.'
                );
            }
        });

        // Contact Number
        document.addEventListener("DOMContentLoaded", function() {
            const button = document.getElementById("telephone-button");
            const contactCard = document.getElementById("contact-card");

            button.addEventListener("click", function() {
                // Toggle kelas hidden untuk menampilkan atau menyembunyikan contact card
                contactCard.classList.toggle("hidden");
            });
        });
    </script>
    <script src="{{ asset('scripts/index.js') }}"></script>
    @stack('scripts')
    <!-- End Script -->
</body>

</html>
