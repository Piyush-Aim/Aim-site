// assets/js/pages/contact.js

document.addEventListener('DOMContentLoaded', () => {
    // Input focus enhancements
    const inputs = document.querySelectorAll('.form-group.floating input, .form-group.floating textarea, .form-group.floating select');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('focused');
        });
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('focused');
        });
    });
});
