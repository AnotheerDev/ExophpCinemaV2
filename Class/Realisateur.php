<?php

class Realisateur extends Personne{
    // attributs ( ils sont repris de la class parent Personne mais on peut en rajouter plus tard)




    function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
    }




    // getter et setter pour chaque attribut de ma class Realisateur :

    public function get_dateDeNaissance(){
        return $this->dateDeNaissance;
    }

    public function set_dateDeNaissance($_dateDeNaissance){
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    public function get_nom(){
        return $this->nom;
    }

    public function set_nom($nom){
        $this->_nom = $nom;
    }

    public function get_prenom(){
        return $this->prenom;
    }

    public function set_prenom($prenom){
        $this->_prenom = $prenom;
    }

    public function get_sexe(){
        return $this->sexe;
    }

    public function set_sexe($sexe){
        $this->sexe = $sexe;
    }


}