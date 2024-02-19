<?php
    include "conn.php";
    $get_id =  $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM user
    WHERE id='$get_id'");

    while($row=mysqli_fetch_object($getdata)){

        $firstname = $row -> fname;
        $lastname = $row -> lname;
        $email = $row -> email;
        $pass = $row -> pass;
        $schoolid = $row -> schoolid;
        $department = $row -> department;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update USER</title>
</head>
<body>
    
    <form class="row g-4" action="process.php?id=<?php echo $get_id; ?>" method="POST">                                                           
    <div class="col-md-12">
        <label class="fw-bold">First Name: </label><br>
        <input type="text" name="up_fname" value="<?php echo $firstname; ?>" class="form-control" required placeholder="Item Name">
    </div>

                      <div class="col fw-bold">
                        <div class="col-md-12">
                        <label class="fw-bold">Last Name: </label><br>
                         <input type="text" name="up_lname" value="<?php echo $lastname; ?>" class="form-control" required placeholder="Quantity">
            </div>
                      <div class="col-md-12">
                        <label class="fw-bold">Email: </label><br>
                         <input type="text" name="up_email" value="<?php echo $email;?>"class="form-control" required placeholder="Price Per Unit">
            </div>
                     <div class="col-md-12">
                        <label class="fw-bold">Password: </label><br>
                         <input type="text" name="up_pass" value="<?php echo $pass;?>"class="form-control" required placeholder="Price Per Unit">
            </div> 
                     <div class="col-md-12">
                        <label class="fw-bold">School ID: </label><br>
                         <input type="text" name="up_schoolid" value="<?php echo $schoolid;?>"class="form-control" required placeholder="Price Per Unit">
            </div>
                        <div class="col fw-bold">
                         <div class="col-md-12">
                          <label class="fw-bold">Department: </label><br>            
                          <select id="inputState" name="up_department" class="form-select" required>
            <option value="ITSD" <?php if ($department == 'ITSD') echo 'selected="selected"'; ?>>ITSD</option>
            <option value="CRIM" <?php if ($department == 'CRIM') echo 'selected="selected"'; ?>>CRIM</option>
            <option value="BOT" <?php if ($department == 'BOT') echo 'selected="selected"'; ?>>BOT</option>
            <option value="BAT" <?php if ($department == 'BAT') echo 'selected="selected"'; ?>>BAT</option>
           
        </select>

                        <div class="modal-footer">
        <input type="reset" value="Clear" class="btn btn-secondary btn-lg"> &nbsp;&nbsp;&nbsp;
        <input type="submit" name="up_user" value="Change">
    </div>
</body>
</form>
</html>
