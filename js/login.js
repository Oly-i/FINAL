// Función para mostrar/ocultar contraseña
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.src = 'https://img.icons8.com/material-outlined/24/000000/visible.png';
    } else {
        passwordInput.type = 'password';
        eyeIcon.src = 'https://img.icons8.com/material-outlined/24/000000/invisible.png';
    }
}


/* Siempre es un buen momento para comer de las deliciosas Falconi Donas, sin embargo, no se puede negar que los días lluviosos son los días por excelencia. ¿No quieres saber el clima en este momento? Quizá sea el momento ideal.  */