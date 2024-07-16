const cardContainer = document.getElementById('cardContainer');
const cards = document.querySelectorAll('.card-list-rental');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
let currentIndex = 0;

function updateCards() {
const cardWidth = cards[0].offsetWidth + 48;
const containerWidth = cardContainer.parentElement.offsetWidth;
const visibleCards = Math.floor(containerWidth / cardWidth);
const maxIndex = cards.length - 1;

currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));

const translateX = currentIndex * cardWidth;
cardContainer.style.transform = `translateX(-${translateX}px)`;

cards.forEach((card, index) => {
    if (index === currentIndex) {
    card.classList.add('active');
    } else {
    card.classList.remove('active');
    }
});

prevBtn.disabled = currentIndex === 0;
nextBtn.disabled = currentIndex === maxIndex;
}

nextBtn.addEventListener('click', () => {
if (currentIndex < cards.length - 1) {
    currentIndex++;
    updateCards();
}
});

prevBtn.addEventListener('click', () => {
if (currentIndex > 0) {
    currentIndex--;
    updateCards();
}
});

// Initialize
updateCards();

// Resize handler
window.addEventListener('resize', updateCards);