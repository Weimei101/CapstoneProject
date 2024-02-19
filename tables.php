<?php
  include "conn.php";

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/ui3.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
    <title>ITSD - Tables</title>
     
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="tables.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">ITSD<sup>Inventory</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Components
            </div>
             <!-- IYA NI SA KA UTILITIES DASHBOARD-->
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Inventory Management</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="#"data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Records</a>                          
                        <a class="collapse-item" href="tables.php">Inventory Records</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

  

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Records
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Inventory</span></a>
            </li>

             <!-- Nav - Reservation -->
             <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reservation</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                             <!--CODE NISA PARA SA DROPDOWN SANG PROFILE SA KILID2 NGA MAY LOGOUT-->
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       
                            <!--KILID KA -Profile sang tawo alert center ->
                            
                        !-- Nav Item - Messages -->
                        
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                
                                   
                               
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src=""
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    
                                </a>
                                
                            </div>
                        </li>

                       
                        <!-- sa babaw upod admin nga profile sa kilid -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Account</span>
                                <img class="img-profile rounded-circle"
                                    src="img/ui3.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                     <!-- table sulat2 -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                   

                    <!-- DataTales Example -->
                     <!-- Iya ka table ni sa inventory -->
                     <div class="card shadow mb-4">
                     <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary">Inventory</h1>
</div>

<!-------------------------- Logout Modal----------------------->
<!-- ############################################################################################################################################# -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

 
                       <!------------- ADD INVENTORY MODAL------------->
 <!-- ############################################################################################################################################# -->
 
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header bg-primary">
        <h1 class="modal-title text-white" id="staticBackdropLabel">Add Inventory</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="process.php" method="POST">
            <div class="input-group" style="border: 4px solid; padding: 4px;">                
             <div class="input-group-text bg-primary text-white">
             <i class="bi bi-pc-display-horizontal"></i>
</div>
         <select name="devicename" id="" required placeholder="Device Name">
         <option disabled selected value="">--Please choose a Device Name--</option>
                    <option value="NUC">NUC</option>
                    <option value="PRINTER">PRINTER</option>
                    <option value="MONITOR">MONITOR</option>
                    <option value="SYSTEM UNIT">SYSTEM UNIT</option>
                    <option value="PROJECTOR">PROJECTOR</option>
                </select> </p>
</div><br>
            <div class="input-group" style="border: 4px solid; padding: 4px;">
              <div class="input-group-text bg-primary text-white">
              <i class="bi bi-list-ol"></i>
</div>
        <input type="text" class="form-control"  name="serialnum" placeholder="Serial Number:">
</div><br>
            <div class="input-group" style="border: 4px solid; padding: 4px;">
              <div class="input-group-text bg-primary text-white">
              <i class="bi bi-buildings-fill"></i>           
</div>
         <input type="text" class="form-control" name="department" placeholder="Department">
</div><br>
            <div class="input-group" style="border: 4px solid; padding: 4px;">
             <div class="input-group-text bg-primary text-white">
             <i class="bi bi-chat-square-quote-fill"></i>             
</div>
        <select name="status" id="" required placeholder="Status">
        <option disabled selected value="">--Choose the Status of the Device--</option>
                    <option value="AVAILABLE">AVAIABLE</option>
                    <option value="USED">USED</option>
                    <option value="DISPOSAL">DISPOSAL</option>
                    <option value="DAMANGE">DAMANGE</option>
                </select> </p>
</div><br>
      <div class="modal-footer">
      <div class="modal-footer">             
                <input type="reset" class="btn btn-primary btn-lg" value="Clear">               
                <input type="submit" class="btn btn-success btn-lg" name="Add_inventory" value="Add Inventory">
      </div>
    </div>
  </div>
</div>
</form>

<!-- ############################################################################################################################################# -->


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <div class="card-body">
    <div class="table-responsive">
    <?php
       
        $query = "SELECT * FROM inventory_records";
        $query_run = mysqli_query($conn, $query);
    ?>
   
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Device Name</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Department</th>
                    <th scope="col">Status</th>                  
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  if($query_run)
                  {
                    foreach($query_run as $row)
                  {
            ?>
                    <tr>
                        <td><?php echo $row['inv_id']; ?></td>
                        <td><?php echo $row['devicename']; ?></td>
                        <td><?php echo $row['serialnum']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                       
                       

                        <td>
                           
                            <button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editmodal-<?php echo $row['inv_id']; ?>">
                            <i class="fas fa-edit"></i></button> 

                            <button class="btn btn-danger">
                                <a href="deleteinventory.php?inv_id=<?php echo $row['inv_id']; ?>" class="text-light">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </button>


                                                         
                           <!-- Modal --> 
              <div class="modal fade" id="editmodal-<?php echo $row['inv_id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h4 class="modal-title text-white" style="font-weight: bold;" id="staticBackdropLabel">Login as User</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     
                     <!--Modal UPDATE Inventory Form -->
          <form action="process.php" method="POST">
            <input type="hidden" name="update_id" value="<?php echo $row['inv_id']; ?>">
            <div class="input-group" style="border: 4px solid; padding: 4px;">                
             <div class="input-group-text bg-primary text-white">
             <i class="bi bi-pc-display-horizontal"></i>
</div>           
            
         <select name="devicename" id="devicename" required placeholder="Device Name">
                    <option value="<?php echo $row['devicename']; ?>"><?php echo $row['devicename']; ?></option>
                    <option value="NUC">NUC</option>
                    <option value="SYSTEM UNIT">SYSTEM UNIT</option>
                    <option value="PRINTER">PRINTER</option>
                    <option value="SWITCH">SWITCH</option>
                    <option value="PROJECTOR">PROJECTOR</option>
                    
                </select> </p>
</div><br>
            <div class="input-group" style="border: 4px solid; padding: 4px;">
              <div class="input-group-text bg-primary text-white">
              <i class="bi bi-list-ol"></i>
</div>
        <input type="text" class="form-control"  name="serialnum" id="serialnum" placeholder="Serial Number:" value="<?php echo $row['serialnum']; ?>">
</div><br>
            <div class="input-group" style="border: 4px solid; padding: 4px;">
              <div class="input-group-text bg-primary text-white">
              <i class="bi bi-buildings-fill"></i>           
</div>
         <input type="text" class="form-control" name="department" id="department" placeholder="Department" value="<?php echo $row['department']; ?>">
</div><br>
            <div class="input-group" style="border: 4px solid; padding: 4px;">
             <div class="input-group-text bg-primary text-white">
             <i class="bi bi-chat-square-quote-fill"></i>             
</div>
          <select name="status" id="status" required placeholder="Device Name">
          <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                    <option value="USED">USED</option>
                    <option value="AVAILABLE">AVAILABLE</option>
                    <option value="DAMANGE">DAMANGE</option>
                    <option value="DISPOSAL">DISPOSAL</option>
                </select> </p>
</div><br>
        <div class="modal-footer">             
                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
                <input type="submit" name="update" class="btn btn-success btn-lg"value="Save Data">
        </div>
     </div>
   </div>
</div>
</form>
                    </div>
                  </div>
                </div>
            </div>        
                        </td>
                    </tr>

                    </div>
             <?php
                }
            }
            else
            {
                echo "no record";
            }
           
            
    
                
        ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    // DataTables initialization
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>


                                
 
                    

     <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

   
    
 
</body>

</html>