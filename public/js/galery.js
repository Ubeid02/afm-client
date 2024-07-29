document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('galleryModal');
    const modalImage = document.getElementById('modalImage');
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
            const iframe = item.querySelector('iframe');
            const videoId = iframe.getAttribute('data-video-id');
            videoContainer.innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/${videoId}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        } else {
            modalImage.src = item.querySelector('img').src;
            modalImage.style.maxWidth = 'none';
            modalImage.style.maxHeight = '80vh';
        }

        const itemDate = new Date().toLocaleDateString();
        modalCaption.textContent = `${isVideo ? 'Video' : item.querySelector('img').alt} - ${itemDate}`;
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
        videoContainer.innerHTML = ''; // Stop video playback
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        showItem(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % galleryItems.length;
        showItem(currentIndex);
    });
});