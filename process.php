<?php

include "conn.php";
session_start();

//////////////////////////////////// REGISTER USER   //////////////////////////////////////////////////////
if (isset($_POST['user_reg'])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $password = $_POST["password"];
    $schoolid = $_POST["schoolid"];
    $department = $_POST["department"];

    // Validation
    $validate = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'"); 

    $val_num = mysqli_num_rows($validate);

    if ($val_num <= 0) {
       

        $insert = mysqli_query($conn, "INSERT INTO user VALUES('0', '$firstname', '$lastname', '$email', '$password', '$schoolid','$department')");

        if ($insert) {
            ?>
            <script>
                alert("Your Registration was Successful");
                window.location.href = "index.php";
            </script>
            <?php
        } else {
          ?>
            <script>
                alert("Error Registration \n Try Again");
                window.location.href = "index.php"; 
            </script>
          <?php
        }
    } else {
       ?>
        <script>
            alert("This email is already in use!");
            window.location.href = "index.php"; 
        </script>
<?php
    }
}

      ////////////////   UPDATE USER    ////////////////////////////////
      if(isset($_POST['up_user'])){
        $get_id = $_GET['id'];
   
        $fname = $_POST['up_fname'];
        $lname = $_POST['up_lname'];
        $email = $_POST['up_email'];
        $pass = $_POST['up_pass'];
        $schoolid = $_POST['up_schoolid'];
        $department = $_POST['up_department'];
  
        $update_items = mysqli_query($conn, "UPDATE user SET fname='$fname', lname='$lname',
         email='$email', pass='$pass', schoolid='$schoolid', department='$department' WHERE id='$get_id'");
  
        if($update_items == TRUE) {
          ?>
          <script>
            alert("Account is Updated!");
            window.location.href="record_user.php";
          </script>
          <?php
        } else {
          ?>
          <script>
            alert("Failed Updating User Account!");
            window.location.href="record_user.php";
          </script>
          <?php
        }
      }
  
////////////////////////////  LOGIN USER  /////////////////////////////////////////////////
if(isset($_POST['login_user'])){
  $email=$_POST['login_email'];
  $pass=$_POST['login_pass'];

  $check=mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND pass='$pass'");

$num=mysqli_num_rows($check);

if($num >=1 ){
    
    $_SESSION['email']=$email;
    ?>
    <script>
      alert("Account Accepted Welcome User");
      window.location.href="faculty/user_dashboard.php";
    </script>
    <?php

}else{
  ?>
    <script>
      alert(" Account Not Found Try Again");
      window.location.href="index.php";
    </script>
    <?php

  
  }
}

  
////////////////////////////////////  REGISTER ADMIN //////////////////////////////////////////////////////
      if(isset($_POST['login'])){
          $name=$_POST["name"];
          $email=$_POST["email"];
          $password=$_POST["pass"];

    $insert=mysqli_query($conn, "INSERT INTO admins VALUES('0','$name','$email','$password')");
    if($insert==true){
        ?>
        <script>
          alert("Your Registration was Successful");
          window.location.href="index.php";
          </script>
                    <?php
            }else {
              ?>
              <script>
                alert("Error Registration \n Try Again");
                window.location.href="dashboard.php";
                </script>
                <?php
            }
          }
////////////////////////////  LOGIN ADMIN   /////////////////////////////////////////////////
    if(isset($_POST['login_button'])){
      $email=$_POST['login_email'];
      $pass=$_POST['login_pass'];

      $check=mysqli_query($conn, "SELECT * FROM admins WHERE email='$email' AND pass='$pass'");

    $num=mysqli_num_rows($check);

    if($num >=1 ){
        
        $_SESSION['email']=$email;
        ?>
        <script>
          alert("Account Accepted Welcome Admin");
          window.location.href="dashboard.php";
        </script>
        <?php

    }else{
      ?>
        <script>
          alert("Account Not Found Try Again");
          window.location.href="index.php";
        </script>
        <?php

      
    }

    }

  ///////////////////////////  ADD INVENTORY  ///////////////////
          if(isset($_POST['Add_inventory'])){
            $devicename=$_POST["devicename"];
            $serial=$_POST["serialnum"];
            $department=$_POST["department"];
            $status=$_POST["status"];
                    
            $insert = mysqli_query($conn, "INSERT INTO inventory_records VALUES('0', '$devicename', '$serial', '$department', '$status')");
            if($insert==true){
            ?>
                <script>
                  alert("Successfuly Added");
                  window.location.href="tables.php";
                  </script>
                  <?php
          }else {
            ?>
            <script>
              alert("Error Registration \n Try Again");
              window.location.href="tables.php";
              </script>
              <?php
          }
        }

    ////////////////   UPDATE INVENTORY    ////////////////////////////////
    if(isset($_POST['update']))
    {
          $id = $_POST['update_id'];
          
          $devicename=$_POST["devicename"];
          $serial=$_POST["serialnum"];
          $department=$_POST["department"];
          $status=$_POST["status"];
  
          $query = "UPDATE `inventory_records` SET `devicename`='$devicename',`serialnum`='$serial',`department`=' $department',`status`='$status'
          WHERE `inv_id`='$id'";
          $query_run = mysqli_query($conn, $query);
  
          if($query_run)
          {
            echo '<script>
             alert("data is updated");
             window.location.href="tables.php"; </script>';
            
          }
          else{
            echo'<script> alert("data Not updated"); </script>';
          }
    }
  
   
?>
 
 