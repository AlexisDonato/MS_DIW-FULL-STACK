const tab = ["Audrey","Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
let saisie;
let i = 0;

while (i<tab.length)
{
saisie = window.prompt("Veuillez choisir un prénom parmi "+tab);

	if (tab.includes(saisie))
	{
		tab.splice(tab.indexOf(saisie),1);
		tab.push(" ");
		console.log(tab);
		i++;
	}
	else if(!tab.includes(saisie))
	{
		alert("Ne fait pas partie de la liste!!!\nAttention aux accents et majuscules !")
		console.log("Ne fait pas partie de la liste!!!\nAttention aux accents et majuscules !")
		console.log(tab);
	}
}
