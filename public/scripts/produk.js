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
    // Banner switching Var
    const rumahBtn = document.getElementById("rumah");
    const fasilitasBtn = document.getElementById("fasilitas");
    const bannerRumah = document.getElementById("banner-rumah-maura");

    // Semua elemen yang berawalan "banner"
    const banners = [
        document.getElementById("banner-masjid"),
        document.getElementById("wall-climbing"),
        document.getElementById("kids-playground"),
        document.getElementById("outdoor-gym"),
        document.getElementById("jogging-track"),
        document.getElementById("barbeque")
    ]
    // Banner Switching
   // Fungsi untuk mengatur tampilan berdasarkan tombol aktif
   function setActive(button) {
    if (button === rumahBtn) {
        rumahBtn.classList.add("text-shade-white", "bg-primary-500");
        fasilitasBtn.classList.remove("text-shade-white", "bg-primary-500");

        // Tampilkan hanya banner rumah
        banners.forEach(banner => banner.classList.add("hidden"));
        document.getElementById("banner-rumah-maura").classList.remove("hidden");
        document.getElementById("house-content").classList.remove("hidden");
    } else {
        fasilitasBtn.classList.add("text-shade-white", "bg-primary-500");
        rumahBtn.classList.remove("text-shade-white", "bg-primary-500");

        // Tampilkan semua banner fasilitas
        banners.forEach(banner => banner.classList.remove("hidden"));
        document.getElementById("banner-rumah-maura").classList.add("hidden");
        document.getElementById("house-content").classList.add("hidden");
    }
}

// Set kondisi awal: rumah aktif dan fasilitas tersembunyi
setActive(rumahBtn);

// Event listener untuk tombol "RUMAH"
rumahBtn.addEventListener("click", function () {
    setActive(rumahBtn);
});

// Event listener untuk tombol "FASILITAS"
fasilitasBtn.addEventListener("click", function () {
    setActive(fasilitasBtn);
});
});




document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen tombol dan konten
    // konten switching
    const everestBtn = document.getElementById("everest-button");
    const monsteraBtn = document.getElementById("monstera-button");
    const areBtn = document.getElementById("are-button");

    const everestIndex = document.getElementById("everest-index");
    const monsteraIndex = document.getElementById("monstera-index");
    const areIndex = document.getElementById("are-index");

    // Fungsi untuk mengganti tampilan aktif
    function setContent(activeButton, activeSection) {
        // Hapus kelas aktif dari semua tombol
        everestBtn.classList.remove("text-shade-white", "bg-primary-500");
        monsteraBtn.classList.remove("text-shade-white", "bg-primary-500");
        areBtn.classList.remove("text-shade-white", "bg-primary-500");

        // Tambahkan kelas aktif hanya pada tombol yang dipilih
        activeButton.classList.add("text-shade-white", "bg-primary-500");

        // Sembunyikan semua konten
        everestIndex.classList.add("hidden");
        monsteraIndex.classList.add("hidden");
        areIndex.classList.add("hidden");

        // Tampilkan konten yang sesuai
        activeSection.classList.remove("hidden");
    }

    // Set kondisi awal: tombol Everest aktif, konten Everest terlihat
    setContent(everestBtn, everestIndex);

    // Event listener untuk tombol Everest
    everestBtn.addEventListener("click", function () {
        setContent(everestBtn, everestIndex);
    });

    // Event listener untuk tombol Monstera
    monsteraBtn.addEventListener("click", function () {
        setContent(monsteraBtn, monsteraIndex);
    });

    // Event listener untuk tombol ARE
    areBtn.addEventListener("click", function () {
        setContent(areBtn, areIndex);
    });
});


document.addEventListener("DOMContentLoaded", function () {

    // FASILITAS
    const everestBtn = document.getElementById("everest-button");
    const monsteraBtn = document.getElementById("monstera-button");
    const areBtn = document.getElementById("are-button");

    const everestIndex = document.getElementById("everest-index");
    const monsteraIndex = document.getElementById("monstera-index");
    const areIndex = document.getElementById("are-index");

    // Fungsi untuk mengganti tampilan aktif
    function setContent(activeButton, activeSection) {
        // Hapus kelas aktif dari semua tombol
        everestBtn.classList.remove("text-shade-white", "bg-primary-500");
        monsteraBtn.classList.remove("text-shade-white", "bg-primary-500");
        areBtn.classList.remove("text-shade-white", "bg-primary-500");

        // Tambahkan kelas aktif hanya pada tombol yang dipilih
        activeButton.classList.add("text-shade-white", "bg-primary-500");

        // Sembunyikan semua konten
        everestIndex.classList.add("hidden");
        monsteraIndex.classList.add("hidden");
        areIndex.classList.add("hidden");

        // Tampilkan konten yang sesuai
        activeSection.classList.remove("hidden");
    }

    // Set kondisi awal: tombol Everest aktif, konten Everest terlihat
    setContent(everestBtn, everestIndex);

    // Event listener untuk tombol Everest
    everestBtn.addEventListener("click", function () {
        setContent(everestBtn, everestIndex);
    });

    // Event listener untuk tombol Monstera
    monsteraBtn.addEventListener("click", function () {
        setContent(monsteraBtn, monsteraIndex);
    });

    // Event listener untuk tombol ARE
    areBtn.addEventListener("click", function () {
        setContent(areBtn, areIndex);
    });
});












    // EVEREST MONSTERA ARE




// Produk EVEREST
const images = [
    "Img/product/house.png",
    "Img/product/layout2-everest.png",
    "Img/product/layout3-everest.png"
];
  
let currentIndex = 0; // Indeks gambar saat ini
  
const imgElement = document.getElementById('everest-house');
const leftButton = document.getElementById("left-button");
const rightButton = document.getElementById("right-button");
  
// Fungsi untuk memperbarui gambar untuk Everest berdasarkan index
function updateEverestImage() {
    imgElement.src = images[currentIndex];
}
  
// Event listener untuk tombol kanan (next)
rightButton.addEventListener("click", function () {
    if (currentIndex < images.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0; // Kembali ke gambar pertama jika sudah di akhir
    }
    updateEverestImage();
});
  
// Event listener untuk tombol kiri (previous)
leftButton.addEventListener("click", function () {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = images.length - 1; // Kembali ke gambar terakhir jika sudah di awal
    }
    updateEverestImage();
});


// Produk Monstera
const images1 = [
    "Img/product/monstera.png",
    "Img/product/layout2-monstera.png",
];
  
let currentIndex1 = 0; // Indeks gambar saat ini
  
const imgElement1 = document.getElementById('monstera-house');
const leftButton1 = document.getElementById("left-button-monstera");
const rightButton1 = document.getElementById("right-button-monstera");
  
// Fungsi untuk memperbarui gambar untuk Monstera berdasarkan index
function updateMonsteraImage() {
    imgElement1.src = images1[currentIndex1];
}
  
// Event listener untuk tombol kanan (next)
rightButton1.addEventListener("click", function () {
    if (currentIndex1 < images1.length - 1) {
        currentIndex1++;
    } else {
        currentIndex1 = 0; // Kembali ke gambar pertama jika sudah di akhir
    }
    updateMonsteraImage();
});
  
// Event listener untuk tombol kiri (previous)
leftButton1.addEventListener("click", function () {
    if (currentIndex1 > 0) {
        currentIndex1--;
    } else {
        currentIndex1 = images1.length - 1; // Kembali ke gambar terakhir jika sudah di awal
    }
    updateMonsteraImage();
});


// Produk Are
const images2 = [
    "Img/product/are.png",
    "Img/product/layout2-are.png",
];
  
let currentIndex2 = 0; // Indeks gambar saat ini
  
const imgElement2 = document.getElementById('are-house');
const leftButton2 = document.getElementById("left-button-are");
const rightButton2 = document.getElementById("right-button-are");
  
// Fungsi untuk memperbarui gambar untuk Monstera berdasarkan index
function updateAreImage() {
    imgElement2.src = images2[currentIndex2];
}
  
// Event listener untuk tombol kanan (next)
rightButton2.addEventListener("click", function () {
    if (currentIndex2 < images2.length - 1) {
        currentIndex2++;
    } else {
        currentIndex2 = 0; // Kembali ke gambar pertama jika sudah di akhir
    }
    updateAreImage();
});
  
// Event listener untuk tombol kiri (previous)
leftButton2.addEventListener("click", function () {
    if (currentIndex2 > 0) {
        currentIndex2--;
    } else {
        currentIndex2 = images2.length - 1; // Kembali ke gambar terakhir jika sudah di awal
    }
    updateAreImage();
});

