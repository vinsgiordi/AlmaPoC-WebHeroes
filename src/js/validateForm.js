const hardcodedCredentials = [
    { username: "admin", password: "admin" },
    { username: "vinsgiordi", password: "vinsgiordi" },
    { username: "username", password: "password" }
];

function validateForm() {

    const user = document.getElementById("username").value;
    const passwd = document.getElementById("password").value;

    let isValidated = false;

    for (let i=0; i < hardcodedCredentials.length; i++) {
        if(user === hardcodedCredentials[i].username && passwd === hardcodedCredentials[i].password) {
            alert(`Welcome ${hardcodedCredentials[i].username}!`);
            setTimeout(() => { window.location.href="welcome.html";}, 1500);
            isValidated = true;
            break;
        }
        else {
            alert("Invalid username or password");
        }
    };
}