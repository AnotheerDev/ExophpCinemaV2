<?php

class Personne{
    //Attributs ( ou variables d'instances)
    private string $nom;
    private string $prenom;
    private string $sexe;
    private string $dateDeNaissance;



    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateDeNaissance = $dateDeNaissance;        
    }






    // getter et setter pour chaque attribut de ma class Personne :
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getSexe(){
        return $this->sexe;
    }

    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function getDateDeNaissance(){
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance){
        $this->dateDeNaissance = $dateDeNaissance;
    }


    // __toString ne pas trop mettre d'info dedans juste l'attribut MAJEUR, qu'on peut appeler après avec juste un $this au lieu de $this->_nom et $this->_prenom.
    public function __toString(){
        return  $this->_nom . "  " . $this->_prenom ."<br>";
    }



    public function getInfo(){
        echo "Nom : $this->_nom <br>";
        echo "Prenom : $this->_prenom <br>";
        echo "Sexe : $this->_sexe <br>";
        echo "Date de naissance : $this->_dateDeNaissance <br>";
        }
}