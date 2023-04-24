<?php

class Acteur extends Personne
{
    // attributs ( ils sont repris de la class parent Personne mais on peut en rajouter plus tard)
    private array $castings;


    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->castings = [];
    }





    public function ajoutCasting(Casting $casting)
    {
        //permet de vérifier si l'acteur correspond bien 
        if ($casting->getActeur() == $this) {
            $this->castings[] = $casting;
        }
    }


    public function getFilmographie()
    {
        $result = "<h2>$this a joué les films suivants : </h2><br>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getFilm() . "<br>";
        }
        echo $result;
    }
}
