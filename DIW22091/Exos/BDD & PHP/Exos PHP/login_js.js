function checkForm(event) {

    let email = document.getElementById("email");
    let missEmail = document.getElementById("missEmail");
    let emailRE = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    let password = document.getElementById("password");
    let missPassword = document.getElementById('missPassword');
    let passwordRE = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/);


    if (email.validity.valueMissing) {
        event.preventDefault();
        missEmail.style.color = "red";
        missEmail.textContent = "Required!";
        email.focus();
    } else if (!emailRE.test(email.value)) {
        event.preventDefault();
        missEmail.style.color = "orange";
        missEmail.textContent = "Invalid email";
        email.focus();

    } else if (password.validity.valueMissing) {
        event.preventDefault();
        missPassword.style.color = "red";
        missPassword.textContent = "Required!";
        password.focus();
    } else if (!passwordRE.test(password.value)) {
        event.preventDefault();
        missPassword.style.color = "orange";
        missPassword.textContent = "Invalid password \n (Minimum eight characters, at least one uppercase letter, one lowercase letter and one number)";
        password.focus();
    }
}

let submit = document.getElementById("submit");
submit.addEventListener("click",
    checkForm
);