<?php

class Acteur extends Personne{
    // attributs ( ils sont repris de la class parent Personne mais on peut en rajouter plus tard)
    private array $casting;  



    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->casting = [];
    }




    // getter et setter pour chaque attribut de ma class Acteur :

    // public function get_dateDeNaissance(){
    //     return $this->dateDeNaissance;
    // }

    // public function set_dateDeNaissance($dateDeNaissance){
    //     $this->_dateDeNaissance = $dateDeNaissance;
    // }

    // public function get_nom(){
    //     return $this->nom;
    // }

    // public function set_nom($nom){
    //     $this->_nom = $nom;
    // }

    // public function get_prenom(){
    //     return $this->prenom;
    // }

    // public function set_prenom($prenom){
    //     $this->_prenom = $prenom;
    // }

    // public function get_sexe(){
    //     return $this->sexe;
    // }

    // public function set_sexe($sexe){
    //     $this->sexe = $sexe;
    // }


    public function ajoutCasting(Casting $casting){
    //permet de vérifier si l'acteur correspond bien 
        if($casting->getActeur() == $this){
            $this->casting[] = $casting;
        }
    }
}