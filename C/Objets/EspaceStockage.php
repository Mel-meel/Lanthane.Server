<?php

class EspaceStockage {
    
    private array $fichiers ;
    
    public function __construct(
        private int $id ;
        private string $nom ;
        private int $taille_allouee ;
        private Groupe $proprietaires ;
        private array $configurations ;
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
     
     public function get_taille_allouee() : int {
         return $this->taille_allouee ;
     }
     
     public function get_proprietaires() : Groupe {
         return $this->proprietaires ;
     }
     
     public function get_configurations() : array {
         return $this->configurations ;
     }
     
     public function set_id(int $id) {
         $this->id = $id ;
     }
     
     public function set_nom(string $nom) {
         $this->nom = $nom ;
     }
     
     public function set_taille_allouee(int $taille_allouee) {
         $this->taille_allouee = $taille_allouee ;
     }
     
     public function set_taille_allouee(Groupe $proprietaires) {
         $this->proprietaires = $proprietaires ;
     }
     
     public function set_taille_allouee(array $configurations) {
         $this->configurations = $configurations ;
     }
}
