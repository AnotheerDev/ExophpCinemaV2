<?php

class Film
{

    // attributs
    private string $titre;
    private DateTime $sortie;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genre;
    private array $castings;



    public function __construct(string $titre, string $sortie, int $duree, Realisateur $realisateur, Genre $genre)
    {
        $this->titre = $titre;
        $this->sortie = new DateTime ($sortie);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->genre->ajoutFilm($this);
        $this->realisateur->ajoutFilm($this);
        $this->castings = [];
    }

    // getter et setter pour chaque attribut de ma class Film :
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getSortie()
    {
        return $this->sortie;
    }

    public function setSortie($sortie)
    {
        $this->sortie = $sortie;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function getDureeHeuresMinutes()
    {
        return date('H:i', mktime(0, $this->duree));
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }


    // __toString ne pas trop mettre d'info dedans juste l'attribut MAJEUR
    public function __toString()
    {
        return  $this->titre . "  " . "(" . $this->sortie->format('Y') . ")";
    }


    



    public function ajoutCasting(Casting $casting)
    {
        //permet de vérifier si l'acteur correspond bien 
        if ($casting->getFilm() == $this) {
            $this->casting[] = $casting;
        }
    }


    public function getInfoFilm()
    {
        echo "Information autour du film : $this->titre : <br>";
        echo "Le film est sorti le (".$this->sortie->format('Y').")<br>";
        echo "La durée est de : ".$this->getDureeHeuresMinutes() ." <br>";
        echo "Le réalisateur est : $this->realisateur <br>";
        echo "Le genre du film est : $this->genre <br>";
    }



    public function getGenerique()
    {
        $result =   "Le film " . $this . "a été réalisé par " . $this->realisateur . "<br>";
        "Avec : <br>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getActeur() .
                " dans le role de : " . $casting->getRole() . "<br>";
        }
        echo $result;
    }








    
}
