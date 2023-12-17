<?php

class FichierImporte extends FichierAsb {
    
    public function __construct(
        private string $chemin_tmp
    ) {
        $this->ext = $this->set_ext_nom() ;
    }
    
    private function set_ext_nom() {
        $this->ext = "" ;
    }
    
    private function set_type_ext() {
        $this->type = "" ;
    }
}
