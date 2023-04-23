<?php

class Film{

    // attributs
    private string $titre;
    private string $sortie;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genres;



    function __construct(string $titre, string $sortie, int $duree, Realisateur $realisateur, Genre $genres){
        $this->titre = $titre;
        $this->sortie = $sortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genres = $genres;
        $this->genres->ajoutFilm($this);
    }





    // getter et setter pour chaque attribut de ma class Film :
    public function get_titre(){
        return $this->titre;
    }

    public function set_titre($titre){
        $this->titre = $titre;
    }

    public function get_sortie(){
        return $this->sortie;
    }

    public function set_sortie($sortie){
        $this->sortie = $sortie;
    }

    public function get_duree(){
        return $this->duree;
    }

    public function set_duree($duree){
        $this->duree = $duree;
    }

    public function get_realisateur(){
        return $this->realisateur;
    }

    public function set_realisateur($realisateur){
        $this->realisateur = $realisateur;
    }

    public function get_genres(){
        return $this->genres;
    }

    public function set_genres($genres){
        $this->genres = $genres;
    }


    // __toString ne pas trop mettre d'info dedans juste l'attribut MAJEUR
    public function __toString(){
        return  $this->titre . " : " . $this->sortie . " " . $this->duree . " " . $this->realisateur . " " . $this->genres ."<br>";
    }


    public function getInfoFilm(){
        echo "Information autour du film : $this->titre : <br>";
        echo "Le film est sorti le $this->sortie  <br>";
        echo "La durée est de : $this->duree minutes <br>";
        echo " Le réalisateur est : $this->realisateur <br>";
        echo " Le genre du film est : $this->genres <br>";
    }
    
}