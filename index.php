<?php

class Movie {

    private $title;
    private $director;
    private $year;
    private $description;

    public function __construct($_title, $_director, $_year, $_description) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
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

?>