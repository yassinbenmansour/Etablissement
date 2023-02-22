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
    <title>Nouveau</title>
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




    <div>
      <div class="row align-items-center" >
        <div class="mx-auto col-10 col-md-8 col-lg-4">
            <form action="./upload.php" method="post" enctype="multipart/form-data">
                <label for="User"> Username: </label>
                <input type="text" class="form-control mb-2" style="width: 300px;" name="username" placeholder="Username" required/>
                <label for="gmail"> gmail: </label>
                <input type="email" class="form-control mb-2" style="width: 300px;" name="mail" placeholder="Email" required />
                <label for="ville"> ville: </label>
                <input type="text" class="form-control mb-2" style="width: 300px;" name="ville" placeholder="Ville" required />
                <label for="pic"> photo: </label>
                <input type="file" class="form-control mb-2" style="width: 300px;" name="pic" placeholder="upload file" required/>
                
                <br>
                <input type="submit" class="btn btn-primary" value="Enregistre" name="Enregistre">
                <input type="reset" class="btn btn-danger" value="Annuler" name="Annuler">
            </form>
        </div>
     </div>
    </div>




    <?php

        if(!empty($_POST["Enregistre"])){

            $user = $_POST["username"] ;
            $mail = $_POST["mail"] ;
            $ville = $_POST["ville"] ;

            $fileNm = $_FILES['pic']['name'];
            $filetmp = $_FILES['pic']['tmp_name'] ;
            $dest = "img/$fileNm" ;


            enregistre($user , $mail, $ville , $filetmp , $dest);


        }
    
    ?>
    
</body>
</html>