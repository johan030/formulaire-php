<?php


        function securisation($donnees){
        $donnees = trim($donnees);  //suppression des espaces
        $donnees = htmlspecialchars($donnees); // suppressionss des caractères html/js
        $donnees = stripcslashes($donnees); //supprime les antislashes
        $donnees = strip_tags($donnees);
        
        return $donnees;       
}

         $name = securisation($_GET['name']);
         $surname = securisation($_GET['surname']);
         $tel = securisation($_GET['phone']);
         $adresse = securisation($_GET['adresse']);
         $email = securisation($_GET['email']);
         
         function validatePhoneNumber ($string) {  //création fonction pour valider le tél
                $phoneNumberArr = str_split($string); //création tableau avec str pour séparer les chiffres
                if($phoneNumberArr[0] != 0) {   //si le premier chiffre != 0 alors...
                    return false;
                }
                foreach($phoneNumberArr as $value) { //la foreach !! trop puissante mdr
                    if(!is_numeric($value)) { // vérif que chaque caractère = numérique
                        return false;
                    }
                }
                if(strlen($string) != 10) { //vérif taille du numéro
                    return false;
                }
                return true;
            }


        
   
        if(empty($name)  || empty($surname) || empty($tel) || empty($adresse) || empty($email)){ // si les champs sont vides

                 echo " tous les champs sont recquis";              
        
        }elseif(strlen($adresse)> 10){ // si l'adresse dépasse X caracteres
                echo "trop de caractere";

        }elseif(!ctype_alpha($name)){
                echo "votre nom contient des caracteres non autorises";


        }elseif(validatePhoneNumber($tel) === false ){ // si le numéro contient autre chose que des chiffres

          
                echo " votre numero de telephone ne doit contenir que des chiffres";
        }

   
 
   

      
?>