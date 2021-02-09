<?php 
//  $dataJson = file_get_contents("http://localhost/fitness/api/user/view");
 // $data = json_decode($dataJson, true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
    <style>
    table{
      overflow-x:auto;
    }
    table, th , td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 8px;
  
    }
    /*Style for Table Header*/
    th {
    background: darkblue;
    color: white;
    text-align: left;
    }
    /*Style for Alternate Rows*/
    table tr:nth-child(odd) {
    background-color: #C2EBC3;
    }
    table tr:nth-child(even) {
    background-color: #FFFFFF;
    }
    </style>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html">UPF Admin</a>
          <a class="navbar-brand brand-logo-mini" href="index.html">UPF</a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Sudin Shrestha</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a href="../controller/logout.php" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <i class="mdi mdi-cart menu-icon"></i>
              <span class="menu-title">View Orders</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="mdi mdi-account-plus menu-icon"></i>
              <span class="menu-title">Add Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewUser.php">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">View Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addProduct.php">
              <i class="mdi mdi-cart-plus menu-icon"></i>
              <span class="menu-title">Add Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editProduct.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Edit Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editBlog.php">
              <i class="mdi mdi-file-multiple menu-icon"></i>
              <span class="menu-title">Edit Blog</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
         
        <div class="container">
            <div class="card">
                <div class="card-header bg-white">
                    <strong>Users</strong> 
                    <?php 
                        if(isset($_GET['view']) && $_GET['view']=='desc'){
                          $str_data = file_get_contents("http://localhost/fitness/api/user/view/desc");
                          echo '<a href="../dashboard/viewUser.php" class="float-right">Sort by Ascending</a>';
                        }else{
                          $str_data = file_get_contents("http://localhost/fitness/api/user/view/asc");
                          echo '<a href="../dashboard/viewUser.php?view=desc" class="float-right">Sort by Descending</a>';
                        }
                    ?>
                  
                </div>
                <div class="card-body" >
                    <?php
                 
                    $data = json_decode($str_data, true);
                    $temp = "<table>";
 
                    /*Defining table Column headers depending upon JSON records*/
                    $temp .= "<tr><th>Id</th>";
                    $temp .= "<th>First Name</th>";
                    $temp .= "<th>Last Name</th>";
                    $temp .= "<th>Address</th>";
                    $temp .= "<th>Phone</th>";
                    $temp .= "<th>Email</th>";
                    $temp .= "<th>Password</th>";
                    $temp .= "<th>Valid From</th>";
                    $temp .= "<th>Valid To</th></tr>";
                    // $temp .= "<th>Action</th></tr>";
                  
                    // $temp .= "<th>Action</th></tr>";

                    /*Dynamically generating rows & columns*/
                    for($i = 0; $i < sizeof($data); $i++)
                    {
                    $temp .= "<tr>";
                    $temp .= "<td>" . $data[$i]["id"] . "</td>";
                    $temp .= "<td>" . $data[$i]["firstName"] . "</td>";
                    $temp .= "<td>" . $data[$i]["lastName"] . "</td>";
                    $temp .= "<td>" . $data[$i]["address"] . "</td>";
                    $temp .= "<td>" . $data[$i]["phone"] . "</td>";
                    $temp .= "<td>" . $data[$i]["email"] . "</td>";
                    $temp .= "<td>" . $data[$i]["password"] . "</td>";
                    $temp .= "<td>" . $data[$i]["validFrom"] . "</td>";
                    $temp .= "<td>" . $data[$i]["validTo"] . "</td>";

                    $temp .= "<td>" . '<a href="" class="btn" data-toggle="modal" data-target="#editModal'.$data[$i]['id'].'"><i class="mdi mdi-table-edit menu-icon"></i></a>' . "</td>";

                    $temp .= "<td>" . '<a href="" class="btn" data-toggle="modal" data-target="#deleteModal'.$data[$i]['id'].'"><i class="mdi mdi-delete menu-icon"></i></a>' . "</td>";

                    $temp .= "</tr>";

                    $temp .= '
                    <div class="modal fade" id="editModal'.$data[$i]['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="../controller/editUser.php"  method="POST">
                            <p>Email: <input type="text" class="form-control" id="updatedEmail" name="updatedEmail" value="'.$data[$i]['email'].'"></p>
                            <p>Password: <input type="text" class="form-control" id="updatedPassword" name="updatedPassword" value="'.$data[$i]['password'].'"></p>
                            <p>Valid From: <input type="date" class="form-control" id="updatedValidFrom" name="updatedValidFrom" value="'.$data[$i]['validFrom'].'"></p>
                            <p>Valid To: <input type="date" class="form-control" id="updatedValidTo" name="updatedValidTo" value="'.$data[$i]['validTo'].'"></p>
                          </div>
                          <div class="modal-footer">
                    
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="hidden" name="edit_id" value="'.$data[$i]['id'].'">
                          <button type="submit" class="btn btn-primary" name="updateUser" value="save">Save changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                    ';

                    $temp .= '
                    <div class="modal fade" id="deleteModal'.$data[$i]['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Do you want to remove <span class="text-danger"> '.$data[$i]['firstName'].' </span>
                        </div>
                        <div class="modal-footer">
                        <form action="../controller/productRemove.php"  method="POST">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="hidden" name="delete_id" value="'.$data[$i]['id'].'">
                           <button type="submit" class="btn btn-danger" name="deleteUser" value="delete">Delete User</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                    ';

                    }
                    
                    /*End tag of table*/
                    $temp .= "</table>";
                    echo $temp;
                    ?>
                </div>
            </div>
        </div>
        
      
        <!-- partial -->
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

