<?php
    try{
        $db = new PDO ('mysql:host=localhost; dbname=ismi; sarcheet=utf', 'root','');
        // echo"ok";
    }catch (dbexcepion $ex){
        die ('erreur:' .$ex->getMessage());
    }
?>