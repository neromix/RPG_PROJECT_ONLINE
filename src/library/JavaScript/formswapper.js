const loginForm = document.querySelector('[data-typeofform="login"]');
const registerForm = document.querySelector('[data-typeofform="register"]');

document.querySelector('[data-typeofbutton="login"]').addEventListener('click', () => {
    if (registerForm.classList.contains('active')) {
        registerForm.classList.remove('active');
        loginForm.classList.add('active');
    }
})

document.querySelector('[data-typeofbutton="registry"]').addEventListener('click', () => {
    if (loginForm.classList.contains('active')) {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
    }
})










