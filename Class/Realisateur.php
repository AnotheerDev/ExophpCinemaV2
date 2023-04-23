<?php

class Realisateur extends Personne
{
    // attributs ( ils sont repris de la class parent Personne mais on peut en rajouter plus tard)
    private array $films;



    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->films = [];
    }





    public function ajoutFilm(Film $nouveau_film)
    {
        $this->films[] = $nouveau_film;
    }


    public function getFilmographie()
    {
        $result = "<h2>$this a réalisé les films suivants : </h2><br>";
        foreach ($this->films as $film) {
            $result .= $film . "<br>";
        }
        echo $result;
    }
}
