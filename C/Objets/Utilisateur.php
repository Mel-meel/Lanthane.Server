<?php

class Utilisateur {
    
    public function __construct(
        private string $id,
        private string $nom
    ) {}
    
    /**
     * Getters et Setters
     */
     
     public function get_id() : int {
         return $this->id ;
     }
     
     public function get_nom() : string {
         return $this->nom ;
     }
     
     public function set_id(int $id) {
         $this->id = $id ;
     }
     
     public function set_nom(string $nom) {
         $this->nom = $nom ;
     }
}
