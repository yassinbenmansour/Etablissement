<?php
include "./traitement/function.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <div class="m-5 bg-secondary p-3 rounded-3 text-white   ">
            <h1 class="text-center">Login</h1>

            <form action="./Signin.php" method="post">
                <label for="User"> User Login : </label>
                <input type="text" class="form-control mb-2" style="width: 300px;" name="username" placeholder="Username" />
                <label for="password">Password : </label>
                <input type="password" class="form-control" name="pwd" style="width: 300px;" placeholder="Password" />
                <br>
                <input type="submit" class="btn btn-primary" value="Validation" name="submit">
                <input type="reset" class="btn btn-danger" value="Annuler" name="Annuler">
            </form>

        </div> 

            </div>
            <div class="col-4"></div>
    </div>
        

    <?php
       
       $User = $_POST["username"] ;
       $password = $_POST["pwd"] ;

       if(!empty($_POST["submit"])) {
         checklogin($User,$passwod);
        }
            
?>

</body>
</html>
