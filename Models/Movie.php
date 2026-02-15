<?php

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

?>