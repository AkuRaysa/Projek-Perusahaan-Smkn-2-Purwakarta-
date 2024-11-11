
// Pilih semua elemen dengan kelas "content"
const contents = document.querySelectorAll('.content');

// Buat observer menggunakan IntersectionObserver API
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Jika elemen muncul di viewport, tambahkan kelas "visible"
            entry.target.classList.add('visible');
        } else {
            // Jika elemen keluar dari viewport, hilangkan kelas "visible"
            entry.target.classList.remove('visible');
        }
    });
}, {
    threshold: 0.5  // Elemen harus 50% terlihat sebelum animasi dimulai
});

// Terapkan observer ke setiap elemen "content"
contents.forEach(content => {
    observer.observe(content);
});
