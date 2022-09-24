<?php
//Récupération des données à enregistrer
$nom = 'Durand';
$prenom = 'Nadia';
$age = 31;

//Ecriture de la requête SQL pour ajouter une personne 
$sql = "INSERT INTO personne (Nom,Prenom,Age) VALUES ('$nom','$prenom',$age)";
//Exécuter la requête SQL pour ajouter une personne 
$resultat = mysqli_query($connexion,$sql);
//Verification de l'ajout de notre ligne 
if($resultat){
    echo "Personne ajoutée";
}else{
    echo "Echec de la requête d'ajout";
}

