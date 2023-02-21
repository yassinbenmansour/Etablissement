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
?>
