function validation() {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    var resultMessage = document.getElementById('result');

    // Check if any field is empty
    if (username === '' || email === '' || password === '' || confirmPassword === '') {
        resultMessage.innerHTML = 'Please fill in all fields.';
        return false;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        resultMessage.innerHTML = 'Passwords do not match.';
        return false;
    }

    // Regular expression patterns for validation
    var usernamePattern = /^[a-zA-Z0-9_-]{3,16}$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    // Validate username
    if (!usernamePattern.test(username)) {
        resultMessage.innerHTML = 'Invalid username format.';
        return false;
    }

    // Validate email
    if (!emailPattern.test(email)) {
        resultMessage.innerHTML = 'Invalid email format.';
        return false;
    }

    // Validate password
    if (!passwordPattern.test(password)) {
        resultMessage.innerHTML = 'Password must be at least 8 characters long and contain at least one letter and one number.';
        return false;
    }

    // If all validation passes
    resultMessage.innerHTML = '';
    return true;
}