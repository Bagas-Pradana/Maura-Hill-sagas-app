document.addEventListener("DOMContentLoaded", function () {
    // Navbar Fixed
    // ------------------Responsively---------------------
    const container = document.getElementById("customize");
    // Hapus class .container
    container.classList.remove("container");
    // Tambahkan class custom
    container.classList.add("custom-container");

    const header = document.querySelector("#header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }

    window.onscroll = function () {
        if (window.pageYOffset > fixedNav) {
            header.classList.add("navbar-fixed");
        } else {
            header.classList.remove("navbar-fixed");
        }
    };

    // Hamburger Menu
    const hamburger = document.querySelector("#hamburger");
    const navMenu = document.querySelector("#nav-menu");
    hamburger.addEventListener("click", function () {
        navMenu.classList.toggle("hidden");
        if (hamburger.classList.contains("hamburger-active")) {
            // Delay untuk menyembunyikan menu
            setTimeout(() => {
                navMenu.classList.add("hidden");
            }, 800); // Durasi delay (ms)
        } else {
            // Tampilkan menu terlebih dahulu
            navMenu.classList.remove("hidden");

            // Lalu tambahkan animasi setelah delay kecil
            setTimeout(() => {
                hamburger.classList.add("hamburger-active");
            }, 1000); // Durasi kecil untuk animasi hamburger
        }
        hamburger.classList.toggle("hamburger-active");
    });

    // Text Animation
    const textTemplate = [
        "Mimpi Rumah Dimulai",
        "Dapatkan Kenyamanan",
        "Pesan Sekarang Juga",
    ];
    const textTemplute = [
        "Masa Depan Menanti",
        "Exclusive Hanya Disini",
        "Penawaran Terbatas",
    ];
    let index = 0;

    function changeText() {
        document.getElementById("form-title").textContent = textTemplate[index];
        document.getElementById("form-title2").textContent = textTemplute[index];
        index = (index + 1) % textTemplate.length;
        index = (index + 1) % textTemplute.length;
    }

    setInterval(changeText, 8000);
});

