function showSubmenuContent(targetId) {
    // Sembunyikan semua konten submenu
    var submenuContents = document.querySelectorAll('.submenu-content');
    for (var i = 0; i < submenuContents.length; i++) {
        submenuContents[i].style.display = 'none';
    }

    // Tampilkan konten submenu yang sesuai dengan targetId
    var targetSubmenuContent = document.getElementById(targetId);
    if (targetSubmenuContent) {
        targetSubmenuContent.style.display = 'block';
    }

    // Hapus kelas "active" dari semua tautan submenu
    var submenuLinks = document.querySelectorAll('.custom-nav17 .submenu-link');
    for (var i = 0; i < submenuLinks.length; i++) {
        submenuLinks[i].classList.remove('active');
    }

    // Tambahkan kelas "active" pada tautan submenu yang aktif
    var activeSubmenuLink = document.querySelector('[data-target="' + targetId + '"]');
    if (activeSubmenuLink) {
        activeSubmenuLink.classList.add('active');
    }
}

// Tambahkan event listener untuk setiap tautan submenu
var submenuLinks = document.querySelectorAll('.custom-nav17 .submenu-link');
for (var i = 0; i < submenuLinks.length; i++) {
    submenuLinks[i].addEventListener('click', function (e) {
        e.preventDefault(); // Menghentikan aksi bawaan dari tautan
        var target = this.getAttribute('data-target'); // Dapatkan target dari atribut data-target
        showSubmenuContent(target); // Tampilkan konten submenu sesuai dengan target
    });
}

// Tampilkan konten submenu "Tahap Grup" saat halaman pertama kali dimuat
showSubmenuContent('group-stages');
