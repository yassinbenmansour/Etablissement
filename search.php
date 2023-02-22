<?php
include "./traitement/function.php";
session_start();

    if(empty($_SESSION["clelogin"])){
        header("Location:./Signin.php");
    }

    $Userlogin = $_SESSION["clelogin"] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="bg-secondary p-1 m-2">
        <ul class="nav justify-content-end ">
            <li class="nav-item">
            <a class="nav-link text-white" href="./upload.php" > <img src="./assets/login.png" style="width: 20px;" alt="logo"> Upload</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="./List.php" > <img src="./assets/login.png" style="width: 20px;" alt="logo"> List</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="./search.php" > <img src="./assets/login.png" style="width: 20px;" alt="logo"> Search</a>
            </li>
        </ul>
    </div>





    <div class="row">
        <div class="col-4"></div>
            <div class="col-4">
                <div class="m-5 bg-secondary p-3 rounded-3 text-white   ">
                     <form action="./search.php" method="post">
                         <label>Recherche par ville :</label>
                         <input class="form-control mb-2" style="width: 300px;" type="text" name="ville" placeholder="Ville..">
                         <input class="btn btn-primary" type="submit" value="Rechercher" name="submit">
                     </form>
                </div>
            </div>
        </div>
    </div>



    <?php   

       
        $ville = $_POST["ville"];

        if(!empty($_POST["submit"])) {
            recherche($ville);
        }
    ?>


    



    
</body>
</html>