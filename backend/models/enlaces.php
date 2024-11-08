<?php 
class EnlacesModels{

    static public function enlacesModel($enlaces){

        if($enlaces == "inicio"    ||
           $enlaces == "ingreso"   ||
           $enlaces == "about"     ||
           $enlaces == "agenda"    ||
           $enlaces == "chef"      ||
           $enlaces == "special"   ||
           $enlaces == "menu"      ||
           $enlaces ==  "slide"){
            $module = "views/modules/".$enlaces.".php";
        }else if($enlaces == "index"){
            $module = "views/modules/ingreso.php";
        }else{
            $module = "views/modules/ingreso.php";
        }
        return $module;
    }

}