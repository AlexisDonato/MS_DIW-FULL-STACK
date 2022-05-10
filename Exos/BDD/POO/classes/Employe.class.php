<?php

class Employe 
{
    private string $nom;
    public string $prenom;
    public DateTime $dateEmbauche;
    public string $poste;
    public int $salaire;
    public string $service;
    public Magasin $magasin;
    public array $enfants;

    public function __construct($nom, $prenom, $dateEmbauche, $poste, $salaire, $service, $magasin, $enfants = null) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->magasin = $magasin;
        $this->enfants = $enfants;
    }

    // Pour chercher les objets private
    public function getNom() {
        return $this->nom;
    }
    

    function anciennete(){
        $today=new DateTime();
        $anciennete=date_diff($today, $this->dateEmbauche);
        return $anciennete->y; // retourne en années
    }

    function prime(){
        $anciennete=$this->anciennete();
        $prime = (0.05*$this->salaire)+((0.02*$this->salaire)*$anciennete);
        return $prime;
    }

    function primeMail(){
        $today=new DateTime();
        if ($today->format('d/m') == '30/11') {
            $prime = $this->prime;
            $message = "Un virement d'un montant de " . $prime . "€ a été envoyé aujourd'hui.";
            $titre = 'Ordre de virement pour ' . $this->_prenom . ' ' . $this->_nom;
            return mail('bank@bank.com', $titre, $message);
        }
    }

    public function chequesVacances() {
        return ($this->anciennete() > 0);
      }

      public function chequesNoel() {
        if (count($this->enfants) > 0) {
          foreach ($this->enfants as $age) {
            if ($age < 11) echo ' 20€ ';
            elseif ($age < 16) echo ' 30€ ';
            elseif ($age < 19) echo ' 50€ ';
          }
        }
      }
    
}

class Magasin 
{
    public string $nomMag;
    public string $adresse;
    public int $codePostal;
    public string $ville;
    public string $restaurant;

    public function __construct($nomMag, $adresse, $codePostal, $ville, $restaurant = null) {
        $this->nomMag = $nomMag;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->restaurant = $restaurant;
    }

}
?>







