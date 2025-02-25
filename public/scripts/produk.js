$(document).ready(function() {
    // Fungsi Menjalankan Button untuk Fitur RUMAH dan Fasilitas
    const rumahBtn = $("#rumah");
    const fasilitasBtn = $("#fasilitas");
    const bannerRumah = $("#banner-rumah-maura");
    const banners = [
        $("#banner-masjid"),
        $("#wall-climbing"),
        $("#kids-playground"),
        $("#outdoor-gym"),
        $("#jogging-track"),
        $("#barbeque")
    ];

    function setActive(button) {
        if (button.is(rumahBtn)) {
            rumahBtn.addClass("text-shade-white bg-primary-500");
            fasilitasBtn.removeClass("text-shade-white bg-primary-500");
            banners.forEach(banner => banner.addClass("hidden"));
            bannerRumah.removeClass("hidden");
            $("#house-content").removeClass("hidden");
        } else {
            fasilitasBtn.addClass("text-shade-white bg-primary-500");
            rumahBtn.removeClass("text-shade-white bg-primary-500");
            banners.forEach(banner => banner.removeClass("hidden"));
            bannerRumah.addClass("hidden");
            $("#house-content").addClass("hidden");
        }
    }

    setActive(rumahBtn);
    rumahBtn.click(function () {
        setActive(rumahBtn);
    });
    fasilitasBtn.click(function () {
        setActive(fasilitasBtn);
    });

    // Event listener untuk tombol dengan class 'house-button'
    const firstButton = $('.house-button').first();
    // const firstKey = firstButton.data('key');

    // Setel tombol pertama sebagai aktif
    firstButton.removeClass('text-primary-500');
    firstButton.addClass('text-shade-white bg-primary-500');

    $('.house-button').click(function() {
        // Ambil nilai dari atribut data-unit
        const unit = $(this).data('unit');
        const key = $(this).data('key');
        $('[id^="content-unit"]').addClass('hidden'); // Sembunyikan semua content-unit
        const selectedUnit = `#content-unit-${key}`;
        $(selectedUnit).removeClass('hidden'); // Tampilkan elemen yang dipilih
        //     debugsystmen
        // $(`${selectedUnit} .house-unit`).each(function() {
        //     console.log($(this).data('index'));
        // });

        // Tampilkan hanya content-unit yang sesuai dengan tombol yang ditekan
        $(`#content-unit-${key}`).removeClass('hidden');
        $('.house-button').each(function() {
            $(this).addClass('text-primary-500'); // Tambahkan class text-primary-500
            $(this).removeClass('text-shade-white bg-primary-500'); // Hapus class text-shade-white dan bg-primary-500
        });

        // Set tombol yang ditekan ke keadaan active
        $(this).removeClass('text-primary-500'); // Hapus class text-primary-500
        $(this).addClass('text-shade-white bg-primary-500'); // Tambahkan class text-shade-white dan bg-primary-500

    });
    // Switch Image
    let currentIndex = 0; // Indeks gambar yang sedang aktif

    function updateImageDisplay(selectedUnit) {
        $(`${selectedUnit} .house-unit`).hide();
        $(`${selectedUnit} .house-unit[data-index="${currentIndex}"]`).show();
    }

    $('.left-button').click(function () {
        const selectedUnit = `#content-unit-${$(this).closest('[id^="content-unit"]').attr('id').split('-').pop()}`;
        const totalImages = $(`${selectedUnit} .house-unit`).length;
        if (currentIndex > 0) {
            currentIndex--; // Kurangi indeks jika belum di batas kiri
        } else {
            currentIndex = totalImages - 1; // Loop ke gambar terakhir jika sudah di gambar pertama
        }
        updateImageDisplay(selectedUnit);
    });

    $('.right-button').click(function () {
        const selectedUnit = `#content-unit-${$(this).closest('[id^="content-unit"]').attr('id').split('-').pop()}`;
        const totalImages = $(`${selectedUnit} .house-unit`).length;
        if (currentIndex < totalImages - 1) {
            currentIndex++; // Tambah indeks jika belum di batas kanan
        } else {
            currentIndex = 0; // Loop ke gambar pertama jika sudah di gambar terakhir
        }
        updateImageDisplay(selectedUnit);
    });

    // console.log("Script slider siap!");
});


