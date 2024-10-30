//Recupero l'elemento che mi serve

const deleteForms = document.querySelectorAll('form');

deleteForms.forEach(deleteForm => {

    deleteForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const confirm = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('custom-data-name')}?`);

        if (confirm) {
            this.submit();
        }
    })
});


