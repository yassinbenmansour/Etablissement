<?php
//function signup
    function checklogin($User,$password){
        if($User == "yassine" && $password === "0123"){
            //start session 

            session_start();
            //stocker login dans la session

            $_SESSION["clelogin"] = $User ;
            
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
        echo "<h1 style='color:green;text-align:center; margin-top:20px;'> upload successfely </h1>" ;
    }

    //function file read

    function show(){

?>

<table class="table table-bordered container">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>ville</th>
        <th>photo</th>
      </tr>
    </thead>
    <tbody>
      

<?php

        // read file student
        $fs = fopen("student.txt","r");
        $cpt = 1;
        // Output one line until end-of-file
        while(!feof($fs)) {
            $enrg = fgets($fs);
            if($enrg != ""){
                $tab = explode("-", $enrg);

                echo " <tr> ";
                    echo "<td>$tab[0]</td>";
                    echo "<td>$tab[1]</td>";
                    echo "<td>$tab[2]</td>";
                    echo "<td><img src='$tab[3]' witdh='60px' height='60px'</td>";

                    
                echo "</tr>";
                
                echo "<br>";

                $cpt++;
            }
        }

        fclose($fs);
        ?>
    </tbody>
    </table>

        <?php
    } 


    function recherche ($ville){

        $search = $ville;
        $lines = file('student.txt');
        // Store true when the text is found
        $found = false;
        foreach($lines as $line)
        {
        if(strpos($line, $search) !== false)
        {
            $found = true;
            echo $line;
            echo "<br>";
        }
        }
        // If the text was not found, show a message
        if(!$found)
        {
        echo 'No match found';
        }

    }







?>
