
// Ioone attive e non attive
const list = document.querySelectorAll('.list');
function activeLink() {
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');

}
list.forEach((item) => 
item.addEventListener('click', activeLink))

//Gestisce il cambio della pagina

const navItems = document.querySelectorAll('.navigation ul li');

// Aggiungi un gestore di eventi click a ciascun elemento di navigazione
navItems.forEach(item => {
    item.addEventListener('click', function(event) {
        // Impedisci il comportamento predefinito del collegamento
        event.preventDefault();

        // Ottieni l'attributo data-link che specifica il file HTML da reindirizzare
        const link = item.dataset.link;

        // Reindirizza l'utente al file HTML specificato
        window.location.href = link;
    });
});



function handleFileUpload(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const videoPreview = document.getElementById('video-preview');
            const label = document.getElementById('file-label');
            const sendButton = document.getElementById('send-button');
            const backButton = document.getElementById('back-button');
            const selGame = document.getElementById('game');
            const selGameLabel = document.getElementById('game-label');
            const klipInfo = document.getElementById('klip-info');
            const klipInfoLabel = document.getElementById('klip-info-label');

            backButton.style.display = 'block';
            const header = document.getElementById('preview-header');
            klipInfo.style.display = 'block';
            klipInfoLabel.style.display = 'block';

            header.style.display = 'block';
            sendButton.style.display = 'block';
            videoPreview.src = e.target.result;
            videoPreview.style.display = 'block';
            label.style.display = 'none';
            selGame.style.display = 'block';
            selGameLabel.style.display = 'block';

        };
        reader.readAsDataURL(file);
    }
}

const video = document.getElementById('post-video');

  video.addEventListener('mouseenter', () => {
    video.play();
  });
  
  video.addEventListener('mouseleave', () => {
    video.pause();
    video.currentTime = 0;
  });







