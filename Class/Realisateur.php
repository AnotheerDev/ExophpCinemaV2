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









    //--------------------- test de tri ----------------------

    public static function cmp($a, $b) 
    {
    return strcmp($a->sortie, $b->sortie);
    }


    public function getFilmographie()
    {
        $result = "<h2>$this a réalisé les films suivants : </h2><br>";
        usort($this->films, function($a, $b) {
            return (int) ($a->getSortie() < $b->getSortie());
        });
        foreach ($this->films as $film) {
            $result .= $film . "<br>";
        }
        echo $result;
    }


// modifier avec le usort pour sortir les films du plus recent au moins recent
    // public function getFilmographie()
    // {
    //     $result = "<h2>$this a réalisé les films suivants : </h2><br>";
    //     foreach ($this->films as $film) {
    //         $result .= $film . "<br>";
    //     }
    //     echo $result;
    // }
}
