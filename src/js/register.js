document.addEventListener('DOMContentLoaded', function() {
    const formRegister = document.getElementById('formRegister');

    if (formRegister) {
        formRegister.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('register-username').value;
            const password = document.getElementById('register-password').value;

            fetch('http://webheroes.local/api/register.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ username: username, password: password })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Response data:', data);
                if (data.status === 'success') {
                    alert('Successful registration! You will be redirected to the login page.');
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
    }
});
