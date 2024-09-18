const burger = document.getElementById('burger');
const navbar = document.querySelector('.navbar');
const password_registration = document.getElementById('password_registration');
const confirmPassword_registration = document.getElementById('confirmPassword_registration');
const password_change_password = document.getElementById('password_change_password');
const confirmPassword_change_password = document.getElementById('confirmPassword_change_password');
const errorMessagemeRegistration = document.getElementById('error-message_registration');
const errorMessageChangePassword = document.getElementById('error-message_change_password');
const button_registration = document.getElementById("button_registration");

burger.addEventListener('click', () => {
    navbar.classList.toggle('active');
});

if (confirmPassword_registration !== null){
    confirmPassword_registration.addEventListener('input', function() {
        if (password_registration.value !== confirmPassword_registration.value) {
            errorMessagemeRegistration.style.display = 'block';
        }
        else {
            errorMessagemeRegistration.style.display = 'none';
        }
    });
}

if (confirmPassword_change_password !== null){
    confirmPassword_change_password.addEventListener('input', function() {
        if (password_change_password.value !== confirmPassword_change_password.value) {
            errorMessageChangePassword.style.display = 'block';
        }
        else {
            errorMessageChangePassword.style.display = 'none';
        }
    });
}