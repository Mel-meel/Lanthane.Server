<?php

class Route {
    
    public function __construct(
        private string $nom,
        private string $chemin,
        private string $methode,
    ) {}
    
    public function get_rendu() : string {
        
    }
    
    public function get_nom() : string {
        return $this->nom ;
    }
    
    public function get_chemin() : string {
        return $this->chemin ;
    }
    
    public function get_methode() : string {
        return $this->methode ;
    }
}