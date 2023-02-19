<?php

    function checklogin($User,$password){
        if($User == "ybenmans" && $password === "01234"){
            header("Location:./upload.php");
        }
        else{
            echo "<h1 style='color:red; text-align:center;'>Error user not found !</h1>" ;
        }
    }

?>