function openModal(videoSrc) {
  const modal = document.getElementById('videoModal');
  const video = document.getElementById('modalVideo');
  modal.style.display = 'block';
  video.src = videoSrc;
  video.play();
}

function closeModal() {
  const modal = document.getElementById('videoModal');
  const video = document.getElementById('modalVideo');
  modal.style.display = 'none';
  video.pause();
  video.src = ''; // clear the source to stop download
}

// Optional: close modal when clicking outside the content
window.onclick = function(event) {
  const modal = document.getElementById('videoModal');
  if (event.target === modal) {
    closeModal();
  }
};
