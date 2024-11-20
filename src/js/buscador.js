document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    buscarporFecha();
}

function buscarporFecha() {
    const fechaInput = document.querySelector('#fecha');
    fechaInput.addEventListener('input', function(e) {
        const fechaSelecionada = e.target.value;

        window.location = `?fecha=${fechaSelecionada}`;
    })
}