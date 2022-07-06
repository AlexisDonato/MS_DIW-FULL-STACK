function checkForm(event) {
    let name = document.getElementById("user_userLastname");
    let wrongName = document.getElementById('wrongName');
    let nameRE = new RegExp(/^([a-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[a-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+([-]([a-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[a-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+)*$/);

    let firstName = document.getElementById("user_userName");
    let wrongFirstName = document.getElementById("wrongFirstName");
    let firstNameRE = new RegExp(/^([a-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[a-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+([-]([a-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[a-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+)*$/);

    let email = document.getElementById("user_email");
    let wrongEmail = document.getElementById("wrongEmail");
    let emailRE = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    let phone = document.getElementById("user_phoneNumber");
    let wrongPhone = document.getElementById("wrongPhone");
    let phoneRE = new RegExp(/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/); // French phone numbers

    if (name.validity.valueMissing) {
        event.preventDefault();
        wrongName.style.color = "red";
        wrongName.textContent = "Name required";
        name.focus();
    } else if (!nameRE.test(name.value)) {
        event.preventDefault();
        wrongName.style.color = "orange";
        wrongName.textContent = "Invalid name (numbers are not granted)";
        name.focus();
    } else if (firstName.validity.valueMissing) {
        event.preventDefault();
        wrongFirstName.style.color = "red";
        wrongFirstName.textContent = "First name required";
        firstName.focus();
    } else if (!firstNameRE.test(firstName.value)) {
        event.preventDefault();
        wrongFirstName.style.color = "orange";
        wrongFirstName.textContent = "Invalid first name (numbers are not granted)";
        firstName.focus();
        // } else if (!radio1.checked && !radio2.checked) {
        //     event.preventDefault();
        //     handleInput(radio1, missSex, "missing");
        //     radio1.focus();
        // } else if (cp.validity.valueMissing) {
        //     event.preventDefault();
        //     handleInput(cp, missCp, "missing");
        //     cp.focus();
        // } else if (!cpRE.test(cp.value)) {
        //     event.preventDefault();
        //     handleInput(cp, missCp, "invalid");
        //     cp.focus();
    } else if (email.validity.valueMissing) {
        event.preventDefault();
        wrongEmail.style.color = "red";
        wrongEmail.textContent = "Email required";
        email.focus();
    } else if (!emailRE.test(email.value)) {
        event.preventDefault();
        wrongEmail.style.color = "orange";
        wrongEmail.textContent = "Invalid email";
        email.focus();
    } else if (phone.validity.valueMissing) {
        event.preventDefault();
        wrongPhone.style.color = "red";
        wrongPhone.textContent = "Phone number required";
        phone.focus();
    } else if (!phoneRE.test(phone.value)) {
        event.preventDefault();
        wrongPhone.style.color = "orange";
        wrongPhone.textContent = "Invalid phone number (ex: 0123456789, 01.23.45.67.89, or +33(0) 123 456 789)";
        phone.focus();
    }
}

document.getElementById("submit").addEventListener("click", checkForm);