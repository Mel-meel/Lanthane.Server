<?php

class Fichier extends FichierAbs {

    public function __construct(
        private int $id,
        string $nom,
        string $ext,
        string $type
    ) {
        parent::__construct($nom, $ext, $type) ;
    }
    
    /**
     * Getters et Setters
     */
    public function get_id() : int {
        return $this->id ;
    }
    
    public function set_id($id) {
        $this->id = $id ;
    }
}
