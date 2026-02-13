<?php

class Genre {
    public $name;
    public $iLikeIt;
    
    public function __construct($_name, $_iLikeIt) {
        $this->name = $_name;
        $this->iLikeIt = $_iLikeIt;
    }
}

class Movie {

    private $title;
    private $director;
    private $year;
    private $genre;
    private $description;

    public function __construct($_title, $_director, $_year, Genre $_genre, $_description) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
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

var_dump($Avatar);

echo "----------------------------------<br/>";

$Inception_description = "Un film di fantascienza che segue un ladro che entra nei sogni delle persone per rubare segreti, ma viene incaricato di impiantare un'idea nella mente di qualcuno.";
$Inception_genre = new Genre("Fantascienza", true);

$Inception = new Movie("Inception", "Christopher Nolan", 2010, $Inception_genre, $Inception_description);

var_dump($Inception);
?>