
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

document.addEventListener('DOMContentLoaded', function() {
    var registrationForm = document.querySelector('.login-form form');
    var registrationFormHeading = document.querySelector('.login-form h2');
    var registrationSuccess = document.querySelector('.registration-success');
    var registrationLink = document.querySelector('.register-link p');

    registrationForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Previeni il comportamento predefinito del modulo

        // Nascondi il modulo di registrazione
        registrationForm.style.display = 'none';
        registrationFormHeading.style.display = 'none';
        registrationLink.style.display = 'none';

        // Visualizza il messaggio di registrazione
        registrationSuccess.style.display = 'block';
    });
});

function handleFileUpload(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const videoPreview = document.getElementById('video-preview');
            videoPreview.src = e.target.result;
            videoPreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}






