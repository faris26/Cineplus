 <! -- This file  -->   
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/style.css">
    <title>Ciné plus</title>
</head>



<body>
     <! -- Nav bar menu -->

    <div id="container">
    <nav>
        <ul>
            <li><a href="index.php" style="font-weight: 900; font-size: 25px;"  class="text-decoration-none">Ciné +</a></li>
            <li><a href="#" style="margin-left: 50px;">Films & évenements</a></li>     
            <li><a href="#">Réalisateurs</a> 
            <li><a href="#">Acteurs</a>
            <li><a href="#">Se connecter</a></li>
            <li> 
             <! -- Search bar w/ method get -->   
                <form action = "verif-form.php" method = "get">
                    <input type = "search" name = "terme" required>
                    <input type = "submit" name = "s" value="rechercher" required>
                </form>
            </li>         
        </ul>
    </nav>
</div>


 <! -- Connexion to data base -->

<?php
$serveur = '127.0.0.1';
$login = "123_data";
$pass = "1809";
$base = "creation_app_bts";
$connexion = mysqli_connect($serveur,$login,$pass,$base);

// Rename the $_GET['terme'] to $id 

$id = $_GET['terme'];
// Execute request with the title, image ... From the table Film. Like allows you to find in the database what you typed in the search bar. Listed in alphabetical order
$req = 'SELECT Titre, Image, Date_sortie, Note_moy FROM film WHERE Titre LIKE "%'.$id.'%" ORDER BY Titre ASC';
$resultat = mysqli_query($connexion, $req);
$films= [];

while ($row = mysqli_fetch_array($resultat)){
    array_push($films,$row);
}

        // Displaying data in a table 
        echo "<table>
        <tr>
            <th>Voici les résultats de votre recherche</th>
        </tr>";
        foreach ($films as $array){               
        echo "<tr>";
        echo "<td>" . $array['Titre'] . "</td>";
        echo "<td>" . $array['Date_sortie'] . "</td>";
        echo "<td>" . round($array['Note_moy'],1) . "</td>";

        }
        echo "</table>";
?>
  
    </body>
</html>