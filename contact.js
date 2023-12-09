function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var errorMessage = document.createElement('div');
    errorMessage.className = 'error-message';

    // Check if any field is empty
    if (name === '' || email === '' || subject === '' || message === '') {
        errorMessage.innerHTML = 'Please fill in all fields.';
        document.querySelector('form').appendChild(errorMessage);
        return false;
    }

    // Regular expression pattern for email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate email
    if (!emailPattern.test(email)) {
        errorMessage.innerHTML = 'Invalid email format.';
        document.querySelector('form').appendChild(errorMessage);
        return false;
    }

    // If all validation passes
    errorMessage.innerHTML = ''; // Clear any previous error messages
    return true;
}