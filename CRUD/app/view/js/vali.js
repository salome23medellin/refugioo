
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registroForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        if (!form.checkValidity()) {
            form.classList.add('was-validated');
        } else {
            validarContraseña();
        }
    });

    function validarContraseña() {
        const password = document.getElementById('password');
        const password2 = document.getElementById('password2');
        const feedback = password2.nextElementSibling;

        if (password.value !== password2.value) {
            feedback.style.display = 'block';
            feedback.textContent = 'Las contraseñas no coinciden.';
            password2.classList.add('is-invalid');
        } else {
            feedback.style.display = 'none';
            feedback.textContent = '';
            password2.classList.remove('is-invalid');
            form.submit();
        }
    }
});
