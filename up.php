<?php
    include "conn.php";
    $ref_id =  $_GET['inv_id'];

    $getdata = mysqli_query($conn, "SELECT * FROM inventory_records
    WHERE inv_id='$ref_id'");

    while($row=mysqli_fetch_object($getdata)){

        $devicename = $row -> devicename;
        $serialnum = $row -> serialnum;
        $department = $row -> department;
        $status = $row -> status;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form class="row g-4" action="process.php?inv_id=<?php echo $ref_id;?>" method="POST">
                    <div class="col fw-bold">
                        <div class="col-md-12">
                          <label class="fw-bold">Device Name: </label><br>
                          <select id="inputState" name="up_devicename" class="form-select" required>
            <option <?php if ($serialnum == 'NUC') echo 'selected'; ?>>NUC</option>
            <option <?php if ($serialnum == 'PRINTER') echo 'selected'; ?>>PRINTER</option>
            <option <?php if ($serialnum == 'MONITOR') echo 'selected'; ?>>MONITOR</option>
            <option <?php if ($serialnum == 'SYSTEM UNIT') echo 'selected'; ?>>SYSTEM UNIT</option>
        </select>

        
                     
                        </div>
    <!-- ... (your other form elements) ... -->

    <div class="col-md-12">
        <label class="fw-bold">Serial Number: </label><br>
        <input type="text" name="up_sn" value="<?php echo $serialnum; ?>" class="form-control" required placeholder="Item Name">
    </div>

                      <div class="col fw-bold">
                        <div class="col-md-12">
                        <label class="fw-bold">Department: </label><br>
                        <input type="text" name="up_department" value="<?php echo $department; ?>" class="form-control" required placeholder="Quantity">
                        </div>
                        <div class="col-md-12">
                        <label class="fw-bold">Status: </label><br>
                        <input type="text" name="up_status" value="<?php echo $status;?>"class="form-control" required placeholder="Price Per Unit">
                        </div>
                        </div>
                        <div class="modal-footer">
        <input type="reset" value="Clear" class="btn btn-secondary btn-lg"> &nbsp;&nbsp;&nbsp;
        <input type="submit" name="update_tbl" value="Update">
    </div>
</form>
</html>



<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Device Name</th>
                    <th>Serial Number</th>
                    <th>Department</th>
                    <th>Status</th>                  
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $getdata = mysqli_query($conn, "SELECT * FROM inventory_records ");
                while ($row = mysqli_fetch_array($getdata)) {
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['inv_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['devicename']); ?></td>
                        <td><?php echo htmlspecialchars($row['serialnum']); ?></td>
                        <td><?php echo htmlspecialchars($row['department']); ?></td>
                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                       
                       

                        <td>
                            <button class="action btn btn-success">
                                <a href="up.php?inv_id=<?php echo $row['inv_id']; ?>">                       
                                <i class="fa-solid fa-pen"></i>
                            </button>
                            <button class="btn btn-danger">
                                <a href="deleteinventory.php?inv_id=<?php echo $row['inv_id']; ?>" class="text-light">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>
                        </td>
                    </tr>

                    </div>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
