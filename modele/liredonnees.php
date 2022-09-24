<?php
//Ecriture de la récupération d'informations 
$sql = "SELECT * FROM personne";
//Exécution de le requête 
$resultat = mysqli_query($connexion, $sql);
//Récupération des informations suite à l'éxécution de la requête
// if ($resultat){
//     echo "Nombre de personne : " . mysqli_num_rows($resultat).BR;
//     echo "<pre>";
//     var_dump($resultat);
//     echo "</pre>";

//     echo "<pre>";
//     var_dump($ligne = mysqli_fetch_assoc($resultat));
//     echo "</pre>";
    
    // while ($ligne = mysqli_fetch_assoc($resultat)){
    //     //afficher le retour de toute les informations
    //     echo "Nom : ". $ligne["Nom"] . " et prénom : " . $ligne["Prenom"] . " et l'âge : " . $ligne["Age"] . " et l'ID " . $ligne["Id"] . BR;  
    // }
// }else{
//     echo "Echec de l'éxécution".BR;
// }

$tableauRetour= [];
while ($row = mysqli_fetch_array($resultat)){
    array_push($tableauRetour, $row);
}