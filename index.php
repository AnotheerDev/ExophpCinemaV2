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
spl_autoload_register(function ($class_name){
    require 'class/' . $class_name . '.php';
})