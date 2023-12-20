<?php

abstract class FichierAbs {
    
    public function __construct(
        private string $nom,
        private string $ext,
        private string $type
    ) {}
    
    /**
     * Getters et Setters
     */
    
    public function get_nom() : string {
        return $this->nom ;
    }
    
    public function get_ext() : string {
        return $this->ext ;
    }
    
    public function get_type() : string {
        return $this->type ;
    }
    
    public function set_nom(string $nom) {
        $this->nom = $nom ;
    }
    
    public function set_ext(string $ext) {
        $this->ext = $ext ;
    }
    
    public function set_type(string $type) {
        $this->type = $type ;
    }
}
