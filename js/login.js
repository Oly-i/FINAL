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


