<?php
try{
    $bdd= new PDO('mysql:host=localhost;dbname=ma base de données;charset=utf8', 'root','');
} catch(Exception $e)
?>
{
die('Erreur'.$e=>getMessage());
}