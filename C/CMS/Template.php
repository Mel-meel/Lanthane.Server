<?php

final class Template {
    
    public function __construct(
        private string $fichier = '',
        private array $vars = []
    ) {}
    
    public function add_var(mixed $var) : void {
        $this->vars[] = $var ;
    }
    
    public function template_html() : string {
        // Récupère le contenu du Template
        $contenu = File::file_read($this->fichier) ;
        // Initialise le tableau des variables
        $vars = [] ;
        $debut = 0 ;
        // Boucle pour rechercher toutes les variables dans le template
        while ($debut < strlen($contenu) && $debut < strpos($contenu, "{", $debut+1)) {
            $debut = strpos($contenu, "{", $debut+1) ;
            $fin = strpos($contenu, "}", $debut+1) ;
            $var = substr($contenu, $debut+1, $fin-$debut-1) ;
            // Ajoute la variable au tableau
            //$vars = array_add($vars, $var) ;  Ancienne façon de faire, nécessite une fonction supplémentaire
            $vars[] = $var ;
            $debut = $fin ;
        }
        $html = $contenu ;
        // Boucle pour remplacer les variables par leurs valeurs
        foreach ($vars as $var) {
            $mot = "{".$var."}" ;
            if (isset($vars_o[$var])) {
                $replace = $vars_o[$var] ;
            } else {
                $replace = "INC" ;
            }
            $html = str_replace($mot, $replace, $html) ;
        }
        return $html ;
    }
    
    /**
     * Getters et Setters
     */
    
    public function get_fichier() : string {
        return $this->fichier ;
    }
    
    public function set_fichier(string $fichier) : void {
        $this->fichier = $fichier ;
    }
    
    public function get_vars() : array {
        return $this->vars ;
    }
    
    public function set_vars(array $vars) : void {
        $this->vars = $vars ;
    }
}