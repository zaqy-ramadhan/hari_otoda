document.getElementById("play-pause-button").addEventListener("click", function () {
    var playPauseButton = document.getElementById("play-pause-button");
    if (playPauseButton.innerHTML === '<i class="fa fa-play"></i>') {
        playPauseButton.innerHTML = '<i class="fa fa-pause"></i>'; // Ikon pause
    } else {
        playPauseButton.innerHTML = '<i class="fa fa-play"></i>'; // Ikon play
    }
});

// Fungsi untuk mengganti teks bahasa saat tombol switch bahasa diklik
document.getElementById("language-switch-button").addEventListener("click", function () {
    var languageSwitchButton = document.getElementById("language-switch-button");
    var circle = document.querySelector(".circle");
    var languageText = document.getElementById("language-text");

    if (languageSwitchButton.classList.contains("left")) {
        // Pindahkan tombol ke ujung kanan shape
        languageSwitchButton.classList.remove("left");
        circle.style.marginLeft = "5px";
        languageText.innerText = "ENG"; // Ganti teks menjadi "ENG"
        languageText.classList.remove("ind");
        languageText.classList.add("eng");
    } else {
        // Pindahkan tombol ke ujung kiri shape
        languageSwitchButton.classList.add("left");
        circle.style.marginLeft = "calc(100% - 75px)"; // Perhitungan margin untuk ujung kiri
        languageText.innerText = "IND"; // Ganti teks menjadi "IND"
        languageText.classList.remove("eng");
        languageText.classList.add("ind");
    }
});
