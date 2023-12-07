document.getElementById('submit').addEventListener('click', function(event) {
    event.preventDefault(); // prevent the form from being submitted normally

    // gather all the input fields into an array
    var inputs = [].slice.call(document.querySelectorAll('input, textarea'));

    // loop through each input field
    inputs.forEach(function(input) {
        // if the input field is empty
        if (!input.value) {
            // add an error class to the input field's parent element
            input.parentElement.classList.add('error');
        } else {
            // otherwise, remove the error class if it exists
            input.parentElement.classList.remove('error');
        }
    });

    // if there are any input fields with an error class, do not submit the form
    if (document.querySelector('.error')) {
        return;
    }

    // if all the input fields are valid, submit the form using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/submit_contact_form', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert('Form submitted successfully!');
        }
    };
    var formData = inputs.map(function(input) {
        return encodeURIComponent(input.name) + '=' + encodeURIComponent(input.value);
    }).join('&');
    xhr.send(formData);
});