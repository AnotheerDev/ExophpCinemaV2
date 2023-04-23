<?php

class Acteur extends Personne
{
    // attributs ( ils sont repris de la class parent Personne mais on peut en rajouter plus tard)
    private array $casting;
    private Film $films;


    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->casting = [];
    }





    public function ajoutCasting(Casting $casting)
    {
        //permet de vérifier si l'acteur correspond bien 
        if ($casting->getActeur() == $this) {
            $this->casting[] = $casting;
        }
    }


    public function getFilmographie()
    {
        $result = "<h2>$this a joué les films suivants : </h2><br>";
        foreach ($this->casting as $casting) {
            $result .= $casting->getFilm() . "<br>";
        }
        echo $result;
    }
}
