document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('formRegister').addEventListener('submit', function(event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        fetch('http://webheroes.local/api/register.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ username: username, password: password })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Response data:', data); // Debugging log
            if (data.status === 'success') {
                alert('Registration successful! You will be redirected to the login page.');
                window.location.href = 'http://webheroes.local/login.php';
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });
});
