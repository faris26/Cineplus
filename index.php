<!doctype html>
<html lang="fr">
<head>
         <! -- link allow to connect with Bootstrap and use it after (line 51) -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <title>Ciné plus</title>
</head>

<body>
    <?php
/* Connexion to our database */
$dsn = 'mysql:dbname=creation_app_bts;host=127.0.0.1';
$user = '123_data';
$password = '1809';
$pdo = new PDO($dsn, $user, $password);
$req = "SELECT * FROM film ";
$stmt = $pdo->prepare($req);
$stmt->execute();
$film = $stmt->fetchAll(PDO::FETCH_ASSOC);
$showcookie
?>

     <! -- Nav bar menu -->
<div class="a">
    <div id="container">
    <nav style="top: 0px;">
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

 <! -- here we used Bootstrap to implement card and we call with php image,title ... (replace your name that you have on database) -->


<div class="row align-items-start">
    <?php foreach($film as $f) :?>
        <div class="col-3">
            <div class="card border-0" style="width: 18rem; margin-top: 70px; ">
                <a href="pagedetail.php"><img src="<?= $f['image'] ?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $f['Titre'] ?></h5>
                    </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?php if(!isset($_COOKIE['cdd'])): ?>
    <div class="cookie-alert">
        <p>Mon site utilise des cookies pour vous offrir le meilleur service possible. En continuant votre navigation, vous en acceptez l'utilisation.  <a href="accept_cookie.php"> X</a></p>
    </div>
<?php endif; ?>
 




   
    </body>
</html>

