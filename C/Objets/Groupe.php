<?php

class Groupe {
    
    public function __construct(
        private string $id ;
        private string $nom ;
        private array $utilisateurs ;
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
     
     public function get_utilisateurs() : array {
         return $this->utilisateurs ;
     }
     
     public function set_id($id) {
         $this->id = $id ;
     }
     
     public function set_nom($nom) {
         $this->nom = $nom ;
     }
     
     public function set_utilisateurs$utilisateurs) {
         $this->utilisateurs = $utilisateurs ;
     }
}
