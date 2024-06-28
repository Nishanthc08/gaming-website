document.addEventListener("DOMContentLoaded", function() {
    const signupLink = document.querySelector('.signup-link');
    const signinLink = document.querySelector('.signin-link');

    if(signupLink) {
        signupLink.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'php/signup.php'
        });
    }

    if(signinLink) {
        signinLink.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'php/signin.php';
        });
    }
});