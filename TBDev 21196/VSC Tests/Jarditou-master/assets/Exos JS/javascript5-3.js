

//Commentaire

/* Ceci est un bloc de commentaires (plusieurs lignes) 
console.log("Ne s'affiche pas car en commentaires");
console.log("Ne s'affiche pas non plus");
*/	

/* 
DECLARATION ET AFFECTATION
var i;
var i, j, k;
var myVar = 123; // entier
var myVar = "Hello l'AFPA"; // chaîne
var bVar = TRUE; // booléen
let myVar; // portée : bloc courant

TABLEAUX
var tableau = [1, 2, 3]; // tableau de valeurs numériques
var tableau = ["Pierre", "Paul", "Jacques"]; // tableau de chaînes

OBJETS NATIFS
window.status = "Change le message dans la barre de statut)";
var date1 = new Date('March 27, 2018 09:56:07'); // Calcul sur dates
var nombre = new Math.pow(2, 2); // Fonctions mathématiques

FONCTIONS DE BASE
alert();
console.log();
document.write(); // A oublier
confirm(); // question
prompt(); // saisir un texte 	

FONCTIONS UTILES
document.getElementById('unDiv'); // ou ByName, ByClassName
document.querySelector('#unDiv');  // attention au #
isNaN("Une chaîne"); // => retourne FALSE
console.log(typeof 42); // affiche "number"
console.log(typeof 'afpa'); // affiche : "string"	

FONCTIONS UTILISATEURS
function ttcPrice(price, tva)
{
   ttcprice = price*tva;
   return ttcprice;                            							
}		

EVENEMENT
<a href="page.html" onclick="showmessage();">

            UTILISATIONS AVANCÉES
            Ajax (objet XmlHttpRequest) : base de données
            Frameworks : JQuery, Vue, Angular, React, Meteor etc.
            Application côté serveur : NodeJS

            OUTILS
            Console : F12 ou Ctrl + Shift + J
            Validateur de code : JSLint
     
*/

/*
LIRE
var nom;
nom = prompt("Entrez votre nom");

var a;
a = parseInt(prompt("Entrez un nombre"));

ECRIRE
var message = "Bonjour toi";
alert(message);

CONDITIONS
if (a>12) {
    alert("C'est beaucoup");
} 
else if (a<0) {
    alert("C'est très peu");
}
else {
    alert("C'est moyen");
}
(ATTENTION: pour comparer si deux valeurs sont égales, vous devez utiliser ==)

*/






// var btn = document.createElement("BUTTON");        // Créer un élément <button>
// var t = document.createTextNode("CLICK ME");       // Créer un noeud textuel
// btn.appendChild(t);                                // Ajouter le texte au bouton
// document.body.appendChild(btn);                    // Ajoute la balise <button> à la balise <body>
// button.addEventListener('click', event => {}       // Ajoute le dynamisme

// document.body.removeChild(btn); ***** Pour retirer le bouton après clic *********  

    //***** Ajouter du style aux boutons ********* */ 
// btn0.style.position = "absolute";
// btn0.style.top = "0px";
// btn0.style.left = "500px";
// btn0.style.width = "150px";
// btn0.style.backgroundColor = "LightRed";
// btn0.style.borderBlockColor = "Red";
// btn0.style.color = "DarkRed";


let Ns = [];


function getInteger(message)
    {
        let N = 0;
        while (N == 0 || Number.isNaN(N))
        {
        N = parseInt(prompt(message));
        }
        return N;
    }


function initTab()
    {
        let P = getInteger('Nombre de postes souhaité');
        Ns.length = P;
    }


function saisieTab()
    {
        for (let i = 0; i < Ns.length; i++) 
        {
            N = getInteger('Saisie des postes ' + (i + 1) + '/' + Ns.length);
            Ns[i] = N;
        }
    }

function afficheTab()
    {
        console.table(Ns);
    }


function triTab(Ns)
{
    for (i = 0; i < Ns.length; i++) 
    { 
        for (let j = 0; j < (Ns.length - i - 1); j++) 
        { 
            if (Ns[j] > Ns[j + 1]) 
            {
                let tmp = Ns[j]; 
                Ns[j] = Ns[j + 1]; 
                Ns[j + 1] = tmp; 
            }
        }        
    }
    return Ns;
}


initTab();

saisieTab();



var btn = document.createElement("BUTTON");        
var t = document.createTextNode("AfficheTab");       
btn.appendChild(t);                                
document.body.appendChild(btn);
btn.addEventListener('click', event => {
    afficheTab();
});


var btn2 = document.createElement("BUTTON");        
var t = document.createTextNode("TriTab");       
btn2.appendChild(t);                                
document.body.appendChild(btn2);
btn2.addEventListener('click', event => {
    triTab(Ns);
    console.table(Ns);
});

