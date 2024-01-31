<?php 
        include_once '../database.php';
        $sql = "SELECT * FROM accounts";
        $result = $con->query($sql);
        
        // header("Location: ../header.php");
        if ($result->num_rows > 0) {
          // output data of each row
          echo  "<tr><th>Table Heading</th><th>Table Heading</th><th>Table Heading</th></tr> ";
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "0 results";
        }
        $con->close();
    ?>