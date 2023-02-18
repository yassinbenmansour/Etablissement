<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="bg-secondary p-1 m-2">
        <ul class="nav justify-content-end ">
            <li class="nav-item">
            <a class="nav-link text-white" href="./signup.php"><img src="../assets/signup.png" style="width: 20px;" alt="logo"> Sign up</a>
            </li>
        </ul>
    </div>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <div class="m-5 bg-secondary p-3 rounded-3 text-white   ">
            <h1 class="text-center">Login</h1>

            <form action="" method="post">
                <label for="User"> User Login : </label>
                <input type="text" class="form-control mb-2" style="width: 300px;" name="username" placeholder="Username" />
                <label for="password">Password : </label>
                <input type="password" class="form-control" name="pwd" style="width: 300px;" placeholder="Password" required/>
                <br>
                <input type="submit" class="btn btn-primary" value="login" name="submit">
            </form>

        </div> 

            </div>
            <div class="col-4"></div>
    </div>
        

    <?php
       
       $User = $_POST["username"] ;
       $password = $_POST["pwd"] ;

       if(!empty($_POST["submit"])) {
       
        if($User == "ybenmans" && $password === "01234"){
            header("Location:../Dashbord/profil.php?users=$User&pwd=$password");
        }

        else{
            echo "<h1>Error user not found !</h1>" ;
        }

    }
            
?>

</body>
</html>