document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('galleryModal');
    const modalImage = document.getElementById('modalImage');
    const modalVideo = document.getElementById('modalVideo');
    const videoContainer = document.getElementById('videoContainer');
    const modalCaption = document.getElementById('modalCaption');
    const closeModal = document.getElementById('closeModal');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentIndex = 0;

    function showItem(index) {
        const item = galleryItems[index];
        const isVideo = item.classList.contains('vid');
        
        modalImage.classList.toggle('hidden', isVideo);
        videoContainer.classList.toggle('hidden', !isVideo);

        if (isVideo) {
            modalVideo.src = item.querySelector('video').src;
            modalVideo.load(); // Memuat ulang video
        } else {
            modalImage.src = item.querySelector('img').src;
        }

        const itemDate = new Date().toLocaleDateString(); // You might want to get this from your data
        modalCaption.textContent = `${item.querySelector('img, video').alt || 'Video'} - ${itemDate}`;
        currentIndex = index;
    }

    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            showItem(index);
            modal.classList.remove('hidden');
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
        modalVideo.pause();
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        showItem(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % galleryItems.length;
        showItem(currentIndex);
    });

    // Tambahkan event listener untuk menangani kesalahan video
    modalVideo.addEventListener('error', function(e) {
        console.error('Video error:', e);
    });
});