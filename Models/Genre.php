<?php

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

?>