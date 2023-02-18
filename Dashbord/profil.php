<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="bg-secondary p-1 m-2">
        <ul class="nav justify-content-end ">
            <li class="nav-item">
            <a class="nav-link text-white" href="./acceuil.php" > <img src="./assets/login.png" style="width: 20px;" alt="logo"> Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="./profil.php"><img src="./assets/signup.png" style="width: 20px;" alt="logo"> Profil</a>
            </li>
        </ul>
    </div>


<?php

    echo "<h1> Profil </h1>";

    echo"<br>";

    $login = $_GET['users'];
    $password = $_GET['pwd'];

    echo "Login : $login , Password : $password";


?>
    
</body>
</html>