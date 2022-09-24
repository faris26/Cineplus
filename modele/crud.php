<?php 

function test($test){
    echo "$test";
}

$var = "un truc";

function test2(){
    global $var;
    echo $var;
}

function ajouterPersonne($nom, $prenom, $age){
    global $connexion;
    $sql = "INSERT INTO personne (Nom,Prenom,Age) VALUES ('$nom','$prenom',$age)";
    $resultat = mysqli_query($connexion,$sql);
    if($resultat){
        echo "Personne ajoutée";
    }else{
        echo "Echec de la requête d'ajout";
}
}