<?php

class Casting{
    //Attributs
    private Acteur $acteur;
    private Film $film;
    private Role $role;


    public function __construct(Acteur $acteur, Film $film, Role $role){
        $this->acteur = $acteur;
        $this->film = $film;
        $this->role = $role;
        $this->film->ajoutCasting($this);
        $this->acteur->ajoutCasting($this);
        $this->role->ajoutCasting($this);
    }




    // getter et setter pour chaque attribut de ma class Casting :
    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function getFilm(){
        return $this->film;
    }

    public function setFilm($film){
        $this->film = $film;
    }

    public function getActeur(){
        return $this->acteur;
    }

    public function setActeur($acteur){
        $this->acteur = $acteur;
    }






}