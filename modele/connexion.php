<?php
//mise en place de la connexion 
//$connect = mysqli_connect("127.0.0.1","root","","_sn1_test");

//dééclaration des variables pour la connexion 
$serveur = "127.0.0.1";
$login = "123_data";
$pass = "1809";
$base = "_sn1_test";
//connexion à la base de données
$connexion = mysqli_connect($serveur,$login,$pass,$base); 
//vérification que la connexion soit faites
if($connexion){
    echo "Connexion ok";
    echo "Information sur le serveur : ". mysqli_get_host_info($connexion); 
}else{
    echo "Erreur". mysqli_connect_errno($connexion);
}

//déconnexion de la base de données 
// function deco($connexion){
//     if(mysqli_close($connexion)){
//         echo "Deconnexion".BR;
//     }else{
//         echo "Echec".BR;
//     }
// }
