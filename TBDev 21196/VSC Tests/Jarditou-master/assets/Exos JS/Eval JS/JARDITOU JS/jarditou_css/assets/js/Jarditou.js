
let suj = document.getElementById("sujet");
suj.addEventListener("click", event =>
{
    document.getElementsByClassName("sujet")[0].style = "display: none;";
})    

function handleInput(element, missElement, type) {
    const events = ["change", "input"];
    for (const e of events) element.addEventListener(e, function() {
        missElement.textContent = "";
    });
    switch (type) {
      case "missing":
        missElement.style.color = "red";
        missElement.textContent = "Requis";
        break;
      case "invalid":
        missElement.style.color = "orange";
        missElement.textContent = "Invalide";
        break;
    }
  }

function checkForm(event) 
    { 
            let nom = document.getElementById("nom");
            let missNom = document.getElementById('missNom');
            let nomRE = new RegExp(/^[A-Za-z]+$/);

            let pre = document.getElementById("prenom");
            let missPre = document.getElementById("missPre");
            let preRE = new RegExp(/^[A-Za-z]+([-][A-Za-z]+)?$/);

            // let sex = document.getElementByName('sexe');
            let missSex = document.getElementById('missSex');


            let cp = document.getElementById("cp");
            let missCp = document.getElementById("missCp");
            let cpRE = new RegExp(/^[0-9]{5}$/);

            let email = document.getElementById("email");
            let missEmail = document.getElementById("missEmail");
            let emailRE = new RegExp(/^(([^<()[\]\\.,;:\s@\]+(\.[^<()[\]\\.,;:\s@\]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/);

            let sujet = document.getElementsByTagName('select');
            let missSujet = document.getElementById('missSujet');

        if (nom.validity.valueMissing)
        {
            event.preventDefault();
            handleInput(nom, missNom, "missing");
            nom.focus();
        }
        else if (!nomRE.test(nom.value))
        {
            event.preventDefault();
            handleInput(nom, missNom, "invalid");
            nom.focus();
        }

        else if (pre.validity.valueMissing)
        {
            event.preventDefault();
            handleInput(pre, missPre, "missing");
            pre.focus();
        }
        else if (!preRE.test(pre.value))
        {
            event.preventDefault();
            handleInput(pre, missPre, "invalid");
            pre.focus();
        }

        else if (!radio1.checked && !radio2.checked)
        {
            event.preventDefault();
            handleInput(radio1, missSex, "missing");
            radio1.focus();
        }

        else if (cp.validity.valueMissing)
        {
            event.preventDefault();
            handleInput(cp, missCp, "missing");
            cp.focus();
        }
        else if (!cpRE.test(cp.value))
        {
            event.preventDefault();
            handleInput(cp, missCp, "invalid");
            cp.focus();
        }

        else if (email.validity.valueMissing)
        {
            event.preventDefault();
            handleInput(email, missEmail, "missing");
            email.focus();
        }
        else if (!emailRE.test(email.value))
        {
            event.preventDefault();
            handleInput(email, missEmail, "invalid");
            email.focus();
        }
        else if (sujet.validity.valueMissing)
        {
            event.preventDefault();
            handleInput(sujet, missSujet, "missing");
            sujet.focus();
        }

    }



document.getElementById("submit").addEventListener("click", checkForm);


