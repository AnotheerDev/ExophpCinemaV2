<?php

class Genre
{

    // attributs
    private string $type;
    private array $films;



    public function __construct(string $type)
    {
        $this->type = $type;
        $this->films = [];
    }




    // getter et setter pour chaque attribut de ma class
    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;
    }



    // __toString ne pas trop mettre d'info dedans juste l'attribut MAJEUR
    public function __toString()
    {
        return  $this->type;
    }

    public function ajoutFilm(Film $film)
    {
        $this->films[] = $film;
    }


    public function listeGenreFilm()
    {
        $result = "<h2> Les films de $this </h2>";
        foreach ($this->films as $film) {
            $result .= $film . "<br>";
        }
        return $result;
    }
}
