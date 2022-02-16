<?php  
    require_once __DIR__ . "/classes/Wine.php";

    
    try {

        $newWine = new Wine("Nero di troia", 10, new Winery("San Fabio", 
        "Via Fabio, 12", "02352566"));
    
        echo $newWine->getName();
        
    } catch (Exception $error) {
        echo $error->getMessage();
    }

?>