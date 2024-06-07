document.addEventListener('DOMContentLoaded', function() {
    const formLogin = document.getElementById('formLogin');

    if (formLogin) {
        formLogin.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('login-username').value;
            const password = document.getElementById('login-password').value;

            fetch('http://webheroes.local/api/login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ username: username, password: password })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.status === 'success') {
                    window.location.href = 'http://webheroes.local/protected.php';
                } else {
                    alert('Errore: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }
});
