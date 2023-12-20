<?php

class FichierImporte extends FichierAbs {
    
    public function __construct(
        private string $chemin_tmp
    ) {
        $nom = $this->set_nom_chemin() ;
        $ext = $this->set_ext_nom() ;
        $type = $this->set_type_ext() ;
        parent::__construct($nom, $ext, $type) ;
    }
    
    private function set_nom_chemin() {
        return "" ;
    }
    
    private function set_ext_nom() {
        return "" ;
    }
    
    private function set_type_ext() {
        return "" ;
    }
    
    /**
     * Getters et Setters
     */
    public function get_chemin_tmp() : string {
        return $this->chemin_tmp ;
    }
    
    public function set_chemin_tmp(string $chemin_tmp) {
        $this->chemin_tmp = $chemin_tmp ;
    }
}
