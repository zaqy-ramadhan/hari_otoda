document.addEventListener("DOMContentLoaded", function () {
    // Dapatkan semua elemen stadium card
    const stadiumCards = document.querySelectorAll(".stadium-card");

    // Dapatkan elemen detail stadion
    const stadiumDetail = document.getElementById("stadium-detail");
    const stadiumDetailImage = document.getElementById("stadium-detail-image");
    const stadiumDetailTitle = document.getElementById("stadium-detail-title");
    const stadiumDetailLocation = document.getElementById("stadium-detail-location");
    const stadiumDetailCapacity = document.getElementById("stadium-detail-capacity");
    const stadiumDetailDescription = document.getElementById("stadium-detail-description");

    // Dapatkan tombol "Back"
    const backToStadium = document.getElementById("back-to-stadium");

    // Tambahkan event listener untuk setiap stadium card
    stadiumCards.forEach((card) => {
        card.addEventListener("click", function () {
            // Dapatkan ID stadion dari data-id atribut
            const stadiumId = card.getAttribute("data-id");

            // Kirim permintaan AJAX untuk mengambil data stadion dari server
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "get_stadium_detail.php?id=" + stadiumId, true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    const stadiumData = JSON.parse(xhr.responseText);

                    stadiumDetailImage.src = stadiumData.Foto;
                    stadiumDetailImage.alt = stadiumData.Nama;
                    stadiumDetailTitle.textContent = stadiumData.Nama;
                    stadiumDetailLocation.textContent = stadiumData.Lokasi;
                    stadiumDetailCapacity.textContent = stadiumData.Kapasitas;
                    stadiumDetailDescription.textContent = stadiumData.Deskripsi;

                    // Sembunyikan daftar stadion dan tampilkan detail stadion
                    document.getElementById("stadium").style.display = "none";
                    stadiumDetail.style.display = "block";
                } else {
                    console.error("Gagal mengambil data stadion.");
                }
            };

            xhr.send();
        });
    });

    // Tambahkan event listener untuk tombol "Back"
    backToStadium.addEventListener("click", function (e) {
        e.preventDefault();

        // Tampilkan kembali daftar stadion dan sembunyikan detail stadion
        document.getElementById("stadium").style.display = "block";
        stadiumDetail.style.display = "none";
    });
});