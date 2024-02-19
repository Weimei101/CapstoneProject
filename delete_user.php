<?php

   include "conn.php";

   $ref_id = $_GET['id'];

      $delete = mysqli_query($conn, "DELETE FROM user WHERE id='$ref_id'");
  
      if($delete == true){
        ?>
        <script>
          alert("Account has been Deleted");
          window.location.href="record_user.php";
          </script>
          <?php
      }else {
        ?>
        <script>
          alert("Error Deleting your Data \n Try Again");
          window.location.href"record_user.php";
          </script>
          <?php
     
      }
    
  
      
        
      
    
    
    ?>