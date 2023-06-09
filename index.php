<h1>Exercice Cinema</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.<br>
    Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)
    ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film
    (synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
    cinématographique (science-fiction, aventure, action, ...).<br>
    Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
    nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage)
    joué par l’acteur dans le(s) film(s) concerné(s).<br>
    Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre
    en place correctement !<br>
    Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure
    où ce rôle a été incarné par plusieurs acteurs.)<br></p>

<h2>Résultat</h2>



<?php


// façon plus rapide de faire ( autochargement des class) ça evite d'oublier des class sur des plus gros projets :
spl_autoload_register(function ($class_name) {
    require 'class/' . $class_name . '.php';
});

// harmoniser mon code virer les echo de mes functions et les remplacer pour des $result puis echo le $result à la fin 
// Penser à créer une classe puis à la tester puis passer à la suite (ne pas tout créer d'un coup) realisateur => genre => film 

// créer une classe associative pour mettre plusieurs classe ( acteur film ) dedans ex fin de la video 2
// class associative pour acteur et film et Role / film et réal = filmographie.
// supprimer les snakecase  | mettre l'array casting au pluriel | trouver comment passer la durée des films de minutes à heure minute sans division
// fonction usort pour faire sortir dans l'ordre de parution du plus recent au moins recent les films d'un réal (fonction anonyme)

$mickaelKeaton = new Acteur("Mickaël", "Keaton", "masculin", "05-11-1951");
$markHamill = new Acteur("Mark", "Hamill", "masculin", "25-11-1951");
$valKilmer = new Acteur("Val", "Kilmer", "masculin", "31-1-1959");
$georgesClooney = new Acteur("Georges", "Clooney", "masculin", "06-05-1961");
$harrisonFord = new Acteur("Harrison", "Ford", "masculin", "13-07-1942");


$georgesLucas = new Realisateur("Georges", "Lucas", "masculin", "14-05-1944");
$ridleyScott = new Realisateur("Ridley", "Scott", "masculin", "30-11-1937");
$joelScott = new Realisateur("Joel", "Scott", "masculin", "29-08-1939");


$fantastique = new Genre("Fantastique");
$action = new Genre("Action");
$sf = new Genre("Science-fiction");


$starWars = new Film("Star-Wars", "19-10-1977", 121, $georgesLucas, $sf);
$batmanFilm = new Film("Batman", "19-07-1995", 122, $joelScott, $action);
$bladeRunner = new Film("Blade Runner", "15-09-1982", 117, $ridleyScott, $fantastique);
$leDernierDuel = new Film("Le dernier duel", "15-10-2021", 152, $ridleyScott, $fantastique);
$exodus = new Film("Exodus", "24-12-2014", 150, $ridleyScott, $fantastique);

$batman = new Role("Batman");
$hanSolo = new Role("Han Solo");
$lukeSkywalker = new Role("Luke Skywalker");

$castingBatman1 = new Casting($georgesClooney, $batmanFilm, $batman);
$castingBatman2 = new Casting($valKilmer, $batmanFilm, $batman);
$castingBatman3 = new Casting($mickaelKeaton, $batmanFilm, $batman);

$castingStarWars1 = new Casting($harrisonFord, $starWars, $hanSolo);
$castingStarWars2 = new Casting($markHamill, $starWars, $lukeSkywalker);


$mickaelKeaton->getInfo();
echo "____________________________________<br>";
$markHamill->getInfo();
echo "____________________________________<br>";
$valKilmer->getInfo();
echo "____________________________________<br>";
$harrisonFord->getInfo();
echo "____________________________________<br>";
$georgesLucas->getInfo();
echo "____________________________________<br>";
$ridleyScott->getInfo();
echo "____________________________________<br>";
$joelScott->getInfo();
echo "____________________________________<br>";
$sf->listeGenreFilm();
echo "____________________________________<br>";
$batman->getActeurRole();
echo "____________________________________<br>";
$georgesLucas->getFilmographie();
echo "____________________________________<br>";
$harrisonFord->getFilmographie();
echo "____________________________________<br>";
$batmanFilm->getGenerique();
echo "____________________________________<br>";
echo $batmanFilm->getDureeHeuresMinutes();
echo "____________________________________<br>";
echo $batmanFilm->getInfoFilm();
echo "____________________________________<br>";
$ridleyScott->getFilmographie();