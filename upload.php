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
            <a class="nav-link text-white" href="./" > <img src="./assets/login.png" style="width: 20px;" alt="logo"> Search</a>
            </li>
        </ul>
    </div>


    <div class="container pt-5">
        <div class="p-2">
            <form action="./upload.php" method="post" enctype="multipart/form-data">
                <label for="User"> Username: </label>
                <input type="text" class="form-control mb-2" style="width: 300px;" name="username" placeholder="Username" />
                <label for="gmail"> gmail: </label>
                <input type="email" class="form-control mb-2" style="width: 300px;" name="mail" placeholder="Email" />
                <label for="ville"> ville: </label>
                <input type="text" class="form-control mb-2" style="width: 300px;" name="ville" placeholder="Ville" />
                <label for="pic"> photo: </label>
                <input type="file" class="form-control mb-2" style="width: 300px;" name="pic" placeholder="upload file" />
                
                <br>
                <input type="submit" class="btn btn-primary" value="Enregistre" name="Enregistre">
                <input type="reset" class="btn btn-danger" value="Annuler" name="Annuler">
            </form>
        </div>
    </div>



    <?php

        if(!empty($_POST["Enregistre"])){
            echo "test save" ;
        }
    
    ?>
    
</body>
</html>