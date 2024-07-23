document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('hero-video');
    const image1 = document.getElementById('hero-image-1');
    const image2 = document.getElementById('hero-image-2');
    const image3 = document.getElementById('hero-image-3');
    const image4 = document.getElementById('hero-image-4');
    const image5 = document.getElementById('hero-image-5');
    const image6 = document.getElementById('hero-image-6');
    const textContent = document.getElementById('text-content');
    const switchInterval = 5000;
    let currentMedia = 0;
    const mediaElements = [video, image1,image2, image3, image4, image5,image6];
    function switchMedia() {
        mediaElements[currentMedia].classList.add('hidden');
        currentMedia = (currentMedia + 1) % mediaElements.length;
        mediaElements[currentMedia].classList.remove('hidden');

        if (mediaElements[currentMedia].tagName === 'VIDEO') {
            // mediaElements[currentMedia].play().catch(e => console.error("Video playback failed:", e));
        } else {
            video.pause();
        }
    }

    // Memulai video
    // video.play().catch(e => console.error("Initial video playback failed:", e));

    // Mengatur interval pergantian
    setInterval(switchMedia, switchInterval);

    // Animasi untuk text-content
    setTimeout(() => {
        textContent.classList.remove('opacity-0', 'translate-y-full');
    }, 500);
});