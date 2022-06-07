

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


let N = 0;
let C = 0;


function getInteger(message)
    {
        let N = 0;
        while (N == 0 || Number.isNaN(N))
        {
        N = parseInt(prompt(message));
        }
        return N;
    }


        N = getInteger('Entrez un nombre');
        console.log(N);


        let M = getInteger('Entrez un multiplicateur');
        console.log(M);



function afficheImg(src, alt)
    {
        let img = document.createElement("img");
        img.src = src;
        img.alt = alt;
        document.body.appendChild(img);
    }


function cube()
    { 
        C  = parseInt(N * N * N);
        return C;
    }


afficheImg('papillon.jpg', 'ImageJavascript');

cube();

// L'ajout de <br> dans document.write permet le retour à la ligne

document.write("<br>Le cube de " + N + " est égal à " + C + "<br>Le produit de " + N + " x " + M + " est égal à " + (N*M));
