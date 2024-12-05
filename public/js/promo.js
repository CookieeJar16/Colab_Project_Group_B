const slider = document.querySelector('.slider');
const cards = document.querySelectorAll('.card');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const dotsContainer = document.querySelector('.dots');

const cardsPerView = 2; // Jumlah card per slide
const totalCards = cards.length; // Total jumlah card
const totalSlides = Math.ceil(totalCards / cardsPerView); // Jumlah grup slide
let currentIndex = 0;

// Fungsi untuk memperbarui tampilan slider
function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * (100 / totalSlides)}%)`;
    updateDots();
}

// Fungsi untuk memperbarui status dots
function updateDots() {
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}

// Fungsi untuk membuat dots
function createDots() {
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            currentIndex = i;
            updateSlider();
        });
        dotsContainer.appendChild(dot);
    }
}

// Fungsi untuk menggeser slider ke kanan
function slideNext() {
    currentIndex = (currentIndex + 1) % totalSlides; // Loop kembali ke awal
    updateSlider();
}

// Fungsi untuk menggeser slider ke kiri
function slidePrev() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Loop kembali ke akhir
    updateSlider();
}

// Event listeners untuk tombol Next dan Prev
nextBtn.addEventListener('click', slideNext);
prevBtn.addEventListener('click', slidePrev);

// Inisialisasi dots
createDots();
