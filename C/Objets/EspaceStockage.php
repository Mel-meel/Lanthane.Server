<?php

class EspaceStockage {
    
    private array $fichiers ;
    
    public function __construct(
        private int $id ;
        private string $nom ;
        private string $taille_allouee ;
        private Groupe $proprietaires ;
        private array $configurations ;
    ) {}
}
