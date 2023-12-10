document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        event.preventDefault(); 
        var isValid = validateForm();

        if (isValid) {
            displaySuccessMessage();
        }
    });
});

function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var errorMessage = document.createElement('div');
    errorMessage.className = 'error-message';

    if (name === '' || email === '' || subject === '' || message === '') {
        errorMessage.innerHTML = 'Please fill in all fields.';
        document.querySelector('.container').appendChild(errorMessage);
        return false;
    }

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        errorMessage.innerHTML = 'Invalid email format.';
        document.querySelector('.container').appendChild(errorMessage);
        return false;
    }

    errorMessage.innerHTML = '';
    return true;
}

function displaySuccessMessage() {
    var form = document.getElementById('contactForm');
    form.style.display = 'none';

    // Create and append the success message
    var successMessage = document.createElement('div');
    successMessage.className = 'success-message';
    successMessage.innerHTML = 'Message sent successfully!';
    document.querySelector('.container').appendChild(successMessage);
}

document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (event) {
            alert('Message sent successfully!');

            event.preventDefault();
        });
    }
});

