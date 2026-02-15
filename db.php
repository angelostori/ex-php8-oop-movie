<?php

require_once "./Traits/Rateable.php";

require_once "./Models/Genre.php";

require_once "./Models/Movie.php";

$Avatar_description = "Un film di fantascienza che racconta la storia di un ex-marine che si ritrova su un pianeta alieno e si innamora di una donna nativa.";
$Avatar_genre = new Genre("Fantascienza", true);

$Avatar = new Movie("Avatar", "James Cameron", 2009, $Avatar_genre, $Avatar_description);
$Avatar->setRating(5);

var_dump($Avatar);

echo "----------------------------------<br/>";

$Inception_description = "Un film di fantascienza che segue un ladro che entra nei sogni delle persone per rubare segreti, ma viene incaricato di impiantare un'idea nella mente di qualcuno.";
$Inception_genre = new Genre("Fantascienza", true);

$Inception = new Movie("Inception", "Christopher Nolan", 2010, $Inception_genre, $Inception_description);

$Inception->addGenre(new Genre("Thriller", false));
$Inception->setRating(4);

var_dump($Inception);
?>