<?php
       

       
        if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['phone']) && isset($_GET['email']) && isset($_GET['adresse'])) { 


        $name = htmlspecialchars($_GET['name']);
        $surname = htmlspecialchars($_GET['surname']);
        $adresse = htmlspecialchars($_GET['adresse']);
        $tel = ($_GET['phone']);
        $email = ($_GET['email']);

        print_r($_GET);
        
        }

        if(empty($name) || empty($surname) || empty($adresse) || empty($tel) || empty($email)){
                echo "tous les champs sont requis";
        }

?>