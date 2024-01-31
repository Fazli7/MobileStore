<?php 
        include_once '../database.php';
        $sql = "Select * from gallery;";
        $result = mysqli_query($con, $sql);
       
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
          echo  "<tr><th>ID</th><th>Name of image</th></tr> ";
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['img_url'] . "</td>";
              
            echo "</tr>";
            }
        }

    

    ?>