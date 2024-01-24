function validation() {
    var resultMessage = document.getElementById('result');
    resultMessage.innerHTML = ''; // Clear previous messages

    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (username === '' || email === '' || password === '' || confirmPassword === '') {
        resultMessage.innerHTML = 'Please fill in all fields.';
        return false;
    }

    if (password !== confirmPassword) {
        resultMessage.innerHTML = 'Passwords do not match.';
        return false;
    }

    var usernamePattern = /^[a-zA-Z0-9_-]{3,16}$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (!usernamePattern.test(username)) {
        resultMessage.innerHTML = 'Invalid username format.';
        return false;
    }

    if (!emailPattern.test(email)) {
        resultMessage.innerHTML = 'Invalid email format.';
        return false;
    }

    if (!passwordPattern.test(password)) {
        resultMessage.innerHTML = 'Password must be at least 8 characters long.';
        return false;
    }

    resultMessage.innerHTML = 'Successfully registered. Redirecting to login page...';


    setTimeout(function () {
        window.location.href = 'login.php';
    }, 2000);

    return false; }
