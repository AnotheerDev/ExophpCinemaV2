<?php

class Role
{
    // attributs
    private string $role;
    private array $castings;


    public function __construct(string $role)
    {
        $this->role = $role;
        $this->castings = [];
    }



    // getter et setter pour chaque attribut de ma class Role :
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }


    // __toString ne pas trop mettre d'info dedans juste l'attribut MAJEUR
    public function __toString()
    {
        return $this->role;
    }


    public function ajoutCasting(Casting $castings)
    {
        //permet de vérifier si l'acteur correspond bien 
        if ($castings->getRole() == $this) {
            $this->castings[] = $castings;
        }
    }


    public function getActeurRole()
    {
        $result = "<h2>Le role de $this a été joué par : </h2><br>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getActeur() . " dans " . $casting->getFilm() . "<br>";
        }
        echo $result;
    }
}
