const eye_logins = document.querySelectorAll('.eye-login');
const input_passwords = document.querySelectorAll('.input-passwd');

eye_logins.forEach((eye_login, index) => {
    eye_login.addEventListener('click', function(event) {
        event.stopPropagation();

        const input_passwd = input_passwords[index];

        if (input_passwd.type === 'password') {
            input_passwd.type = 'text';
        } else {
            input_passwd.type = 'password';
        }
    });
});