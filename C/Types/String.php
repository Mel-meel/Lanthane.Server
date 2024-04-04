<?php

class Chaine {
    // Retourne la sous chaine entre deux caractères dans un texte
    public static function string_entre_deux(string $contenu, string $c1, string $c2) : array {
        $row = array() ;
        $c = 0 ;
        $tab = explode("\n", $contenu) ;
        foreach ($tab as $ligne) {
            $pos1 = strpos($ligne, $c1) ;
            if ($pos1 === false) {
                
            } else {
                $pos2 = strpos($ligne, $c2) ;
                $taille = $pos2-($pos1+1) ;
                $oc = substr($ligne, $pos1+1, $taille) ;
                $row[$c] = $oc ;
                $c = $c+1 ;
            }
        }
        return $row ;
    }
    
    // Calcule le pourcentage de lettres majuscules dans un texte
    public static function string_pourcent_maj(string $string) : string {
        $pourcentage = round(preg_match_all( "/[[:upper:]]/", $string, $x )/ strlen($string) * 100,0) ;
        return $pourcentage ;
    }
    
    // Nettoie un chaine des caractères \n et \t
    public static function string_nettoie(string $string) : string {
        $string = str_replace("\n", "", $string) ;
        $string = str_replace("\t", "", $string) ;
        return $string ;
    }
}