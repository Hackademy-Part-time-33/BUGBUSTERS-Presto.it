


// Funzione per reindirizzare l'utente alla homepage dopo tot secondi
function redirectToHomepage() {
    setTimeout(function() {
        window.location.href = "/"; // URL della homepage
    }, 5000); // Tempo di attesa in millisecondi (esempio: 5000 = 5 secondi)
    console.log('cazzi');
}