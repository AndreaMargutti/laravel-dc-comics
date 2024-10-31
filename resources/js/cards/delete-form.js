// # Recupero l'elemento che mi serve
const deleteForms = document.querySelectorAll('form');

// Giro per tutti i form della delete
deleteForms.forEach(deleteForm => {

    // > Per ogni singolo form...
    deleteForm.addEventListener("submit", function (e) {
        // < ...Interrompo l'evento di submit
        e.preventDefault();

        // Al posto creo una finestra di conferm con un messaggio
        const confirm = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('custom-data-name')}?`);

        // > Se la conferma ritorna "true"...
        if (confirm) {
            // < ...allora eseguo il submit
            this.submit();
        }
    })
});
