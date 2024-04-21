
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



