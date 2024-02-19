<?php

   include "conn.php";

    $ref_id = $_GET['inv_id'];

    $delete = mysqli_query($conn, "DELETE FROM inventory_records WHERE inv_id='$ref_id'");


    if($delete == true){
        ?>
        <script>
          alert("DATA HAS BEEN DELETED");
          window.location.href="tables.php";
          </script>
          <?php
      }else {
        ?>
        <script>
          alert("FAILED TO DELETE  \n Try Again");
          window.location.href"tables.php";
          </script>
          <?php
     
      }

?>