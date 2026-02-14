<?php

trait Rateable {
    private $rating;

    public function getRating($_rating) {
        return $this->rating = $_rating;
    }

    public function setRating($_rating) {
        if ($_rating >= 1 && $_rating <= 5) {
            $this->rating = $_rating;
        } else {
            echo "Errore: Il rating deve essere compreso tra 1 e 5.";
        }
    }
}

class Genre {
    private $name;
    private $iLikeIt;
    
    public function __construct($_name, $_iLikeIt) {
        $this->name = $_name;
        $this->iLikeIt = $_iLikeIt;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function getILikeIt() {
        return $this->iLikeIt;
    }

    public function setILikeIt($_iLikeIt) {
        $this->iLikeIt = $_iLikeIt;
    }
}

class Movie {

    private $title;
    private $director;
    private $year;
    private $genres = [];
    private $description;

    use Rateable;

    public function __construct($_title, $_director, $_year, Genre $_genre, $_description) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genres[] = $_genre;
        $this->description = $_description;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($_title) {
        $this->title = $_title;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($_director) {
        $this->director = $_director;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($_year) {
        $this->year = $_year;
    }

    public function getGenre() {
        return $this->genres;
    }

    public function setGenre(Genre $_genre) {
        $this->genre = [$_genre]; // Sostituisce l'intero array con un nuovo array contenente solo il nuovo genere
    }

     public function addGenre(Genre $_genre) {
        if (!in_array($_genre, $this->genres)) {
            $this->genres[] = $_genre; // Aggiunge un elemento all'array
        }
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($_description) {
        $this->description = $_description;
    }
}

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