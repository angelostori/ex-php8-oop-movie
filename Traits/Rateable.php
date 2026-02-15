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

?>