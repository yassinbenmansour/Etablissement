<?php
//function signup
    function checklogin($User,$password){
        if($User == "ybenmans" && $password === "01234"){
            header("Location:./upload.php");
        }
        else{
            echo "<h1 style='color:red; text-align:center;'>Error user not found !</h1>" ;
        }
    }



//function upload 

    function enregistre($user , $mail, $ville , $filetmp , $dest){

        // open file student 
        $fs = fopen("student.txt","a");

        // declaration d'enregistrement 

        $enr = "$user - $mail - $ville - $dest" ;

        //ecrire f file 
        fwrite($fs,$enr);
        fwrite($fs, "\r\n");

        // close file 
        fclose($fs);


        //upload photo 

        move_uploaded_file($filetmp , $dest );
    }
?>