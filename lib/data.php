<?php
    $ville = array("Tunis","Sfax","Nabeul","Gabes");
    $profession = array("Agent immobilier","Architecte","Commerce et artisanat","Comptable et gestionnaire");
    $loisir = array("Sport"=>"Sport","Music"=>"Music","Voyage"=>"Voyage","Lecture"=>"Lecture","internet"=>"internet","Cinema"=>"Cinema");
    function genre($g){
        if ($g==1){
            return "M";
        }
        else{
            return "F";
        }
    }
?>