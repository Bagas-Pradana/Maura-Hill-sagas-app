document.addEventListener("DOMContentLoaded", function () {
    // Navbar Responsively
    const container = document.getElementById("customize");
    container.classList.remove("container");
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
            setTimeout(() => {
                navMenu.classList.add("hidden");
            }, 800);
        } else {
            navMenu.classList.remove("hidden");
            setTimeout(() => {
                hamburger.classList.add("hamburger-active");
            }, 1000);
        }
        hamburger.classList.toggle("hamburger-active");
    });

    // Fungsi Menjalankan Button untuk Fitur RUMAH dan Fasilitas
    const rumahBtn = document.getElementById("rumah");
    const fasilitasBtn = document.getElementById("fasilitas");
    const bannerRumah = document.getElementById("banner-rumah-maura");
    const banners = [
        document.getElementById("banner-masjid"),
        document.getElementById("wall-climbing"),
        document.getElementById("kids-playground"),
        document.getElementById("outdoor-gym"),
        document.getElementById("jogging-track"),
        document.getElementById("barbeque")
    ];

    function setActive(button) {
        if (button === rumahBtn) {
            rumahBtn.classList.add("text-shade-white", "bg-primary-500");
            fasilitasBtn.classList.remove("text-shade-white", "bg-primary-500");
            banners.forEach(banner => banner.classList.add("hidden"));
            document.getElementById("banner-rumah-maura").classList.remove("hidden");
            document.getElementById("house-content").classList.remove("hidden");
        } else {
            fasilitasBtn.classList.add("text-shade-white", "bg-primary-500");
            rumahBtn.classList.remove("text-shade-white", "bg-primary-500");
            banners.forEach(banner => banner.classList.remove("hidden"));
            document.getElementById("banner-rumah-maura").classList.add("hidden");
            document.getElementById("house-content").classList.add("hidden");
        }
    }

    setActive(rumahBtn);
    rumahBtn.addEventListener("click", function () {
        setActive(rumahBtn);
    });

    fasilitasBtn.addEventListener("click", function () {
        setActive(fasilitasBtn);
    });

    // Fitur Tipe Rumah
    const everestBtn = document.getElementById("everest-button");
    const monsteraBtn = document.getElementById("monstera-button");
    const areBtn = document.getElementById("are-button");
    const everestIndex = document.getElementById("everest-index");
    const monsteraIndex = document.getElementById("monstera-index");
    const areIndex = document.getElementById("are-index");

    function setContent(activeButton, activeSection) {
        everestBtn.classList.remove("text-shade-white", "bg-primary-500");
        monsteraBtn.classList.remove("text-shade-white", "bg-primary-500");
        areBtn.classList.remove("text-shade-white", "bg-primary-500");
        activeButton.classList.add("text-shade-white", "bg-primary-500");
        everestIndex.classList.add("hidden");
        monsteraIndex.classList.add("hidden");
        areIndex.classList.add("hidden");
        activeSection.classList.remove("hidden");
    }

    setContent(everestBtn, everestIndex);

    everestBtn.addEventListener("click", function () {
        setContent(everestBtn, everestIndex);
    });

    monsteraBtn.addEventListener("click", function () {
        setContent(monsteraBtn, monsteraIndex);
    });

    areBtn.addEventListener("click", function () {
        setContent(areBtn, areIndex);
    });

    // Fungsi Swipe Left / Right untuk Gambar Produk
    const images = [
        "Img/product/house.png",
        "Img/product/layout2-everest.png",
        "Img/product/layout3-everest.png"
    ];

    let currentIndex = 0;
    const imgElement = document.getElementById('everest-house');
    const leftButton = document.getElementById("left-button");
    const rightButton = document.getElementById("right-button");

    function updateEverestImage() {
        imgElement.src = images[currentIndex];
    }

    rightButton.addEventListener("click", function () {
        if (currentIndex < images.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateEverestImage();
    });

    leftButton.addEventListener("click", function () {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = images.length - 1;
        }
        updateEverestImage();
    });

    // Produk Monstera
    const images1 = [
        "Img/product/monstera.png",
        "Img/product/layout2-monstera.png",
    ];

    let currentIndex1 = 0;
    const imgElement1 = document.getElementById('monstera-house');
    const leftButton1 = document.getElementById("left-button-monstera");
    const rightButton1 = document.getElementById("right-button-monstera");

    function updateMonsteraImage() {
        imgElement1.src = images1[currentIndex1];
    }

    rightButton1.addEventListener("click", function () {
        if (currentIndex1 < images1.length - 1) {
            currentIndex1++;
        } else {
            currentIndex1 = 0;
        }
        updateMonsteraImage();
    });

    leftButton1.addEventListener("click", function () {
        if (currentIndex1 > 0) {
            currentIndex1--;
        } else {
            currentIndex1 = images1.length - 1;
        }
        updateMonsteraImage();
    });

    // Produk Are
    const images2 = [
        "Img/product/are.png",
        "Img/product/layout2-are.png",
    ];

    let currentIndex2 = 0;
    const imgElement2 = document.getElementById('are-house');
    const leftButton2 = document.getElementById("left-button-are");
    const rightButton2 = document.getElementById("right-button-are");

    function updateAreImage() {
        imgElement2.src = images2[currentIndex2];
    }

    rightButton2.addEventListener("click", function () {
        if (currentIndex2 < images2.length - 1) {
            currentIndex2++;
        } else {
            currentIndex2 = 0;
        }
        updateAreImage();
    });

    leftButton2.addEventListener("click", function () {
        if (currentIndex2 > 0) {
            currentIndex2--;
        } else {
            currentIndex2 = images2.length - 1;
        }
        updateAreImage();
    });
});

