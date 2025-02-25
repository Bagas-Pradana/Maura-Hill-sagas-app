// File Baru
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

// Hamburger
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

//   RUMAH          /               FASILITAS
document.addEventListener("DOMContentLoaded", function () {
    const rumahBtn = document.getElementById("rumah");
    const fasilitasBtn = document.getElementById("fasilitas");
    const bannerRumah = document.getElementById("banner-rumah-maura");
    const bannerMasjid = document.getElementById("banner-masjid");

    // Fungsi untuk mengubah tampilan sesuai tombol aktif
    function setActive(button, sectionToShow, sectionToHide) {
        sectionToShow.classList.remove("hidden");
        sectionToHide.classList.add("hidden");

        // Tambah class aktif pada button yang diklik
        button.classList.add("text-shade-white", "bg-primary-500");

        // Hapus class aktif dari tombol lain
        if (button === rumahBtn) {
            fasilitasBtn.classList.remove("text-shade-white", "bg-primary-500");
        } else {
            rumahBtn.classList.remove("text-shade-white", "bg-primary-500");
        }
    }

    // Set kondisi awal: banner-rumah-maura terlihat, tombol "rumah" aktif
    setActive(rumahBtn, bannerRumah, bannerMasjid);

    // Event listener untuk tombol "RUMAH"
    rumahBtn.addEventListener("click", function () {
        setActive(rumahBtn, bannerRumah, bannerMasjid);
    });

    // Event listener untuk tombol "FASILITAS"
    fasilitasBtn.addEventListener("click", function () {
        setActive(fasilitasBtn, bannerMasjid, bannerRumah);
    });
});

