
let N = parseInt(prompt("Table de multiplication du chiffre :"));


function multi()
{
for (i = 0; i <= 10; i++) 
{    
  resultat = N * i;
  document.write(N+" x "+i+" = "+resultat+"<br>"); 
}
}

multi();
