<?php 
        include_once '../database.php';
        $sql = "Select * from posts;";
        $result = mysqli_query($con, $sql);
       
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
          echo  "<tr><th>ID</th><th>Title</th><th>Content</th></tr> ";
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['title'] . "</td>";
              echo "<td>" . $row['content'] . "</td>";
            echo "</tr>";
            }
        }

    

    ?>