

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


console.log("Debut de la boucle");
console.log("=============================");


N = parseInt(prompt("Entrez un chiffre"));
X = parseInt(prompt("Entrez un 2e chiffre"));
Ns = [];
Ns.reverse();


while (N => 0, Ns => 0)
{
    let resultat = (Ns.length+1)*X;
    console.log(Ns.length+1+" x "+X+" = "+resultat);

    N--;

    if (N == 0)
    {
      break;
    }
    else if (Number.isNaN(N) || N == "" || N == null)
    {
        console.log("Erreur de frappe")
        break;
    }
    else
    {
      Ns.push(N);
    }
}


console.log("=============================");
console.log("Fin de la boucle");

