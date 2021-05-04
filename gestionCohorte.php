<?php

if(isset($_REQUEST['valider'])){
    extract($_REQUEST);
    define('dns','mysql:host=127.0.0.1;dbname=ges;charset=UTF8');
    define('user','root');
    define('pass','');
    try
    {
        $connexion= new PDO(dns,user,pass);
    }   
    catch(PDOExeption $e){
         echo "Erreur echec de la connexion".$e->getMessage();
         exit();
    }
}
   
?>
