<?php
class Personnage 
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($value) {
        return $this->_nom = $value;
    }
    
    public function setPrenom($value) {
        return $this->_prenom = $value;
    }
    
    public function setAge($value) {
        return $this->_age = $value;
    }
    
    public function setSexe($value) {
        return $this->_sexe = $value;
    }
}
?>