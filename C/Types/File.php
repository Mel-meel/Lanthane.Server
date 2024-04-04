<?php

class File {
    public static function file_read(string $fichier) : string {
        $contenu = "" ;
        if (file_exists($fichier)) {
            $open = fopen($fichier, "r+") ;
            if ($open) {
                while (!feof($open)) {
                    $buffer = fgets($open, 2048) ;
                    //$this->contenu->Add($buffer->GetValue()) ;
                    $contenu = $contenu.$buffer ;
                }
                fclose($open) ;
            }
        }
        return $contenu ;
    }
    
    public static function file_get_content(string $fichier) : void {
    
    }
    
    public static function file_type_mime(string $fichier) : string {
        $fi = new finfo(FILEINFO_MIME, "/usr/share/misc/magic") ;
        $mime_type = $fi->buffer(file_get_contents($fichier)) ;
        $mime_type = explode("; ", $mime_type)[0] ;
        return $mime_type ;
    }
    
    public static function file_charset(string $fichier) : string {
        $fi = new finfo(FILEINFO_MIME, "/usr/share/misc/magic") ;
        $mime_type = $fi->buffer(file_get_contents($fichier)) ;
        $mime_type = explode("; ", $mime_type)[1] ;
        return $mime_type ;
    }
    
    public static function file_extension(string $fichier) : string {
        $extension = pathinfo($fichier, PATHINFO_EXTENSION) ;
        return $extension ;
    }
    
    public static function file_nom(string $fichier) : string {
        $tab = explode("/", $fichier) ;
        $nom = $tab[sizeof($tab)-1] ;
        return $nom ;
    }
}