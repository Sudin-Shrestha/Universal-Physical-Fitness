<?php
    include '../includes/verification.php';

    

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
    table, th , td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 10px;

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
          <a class="navbar-brand brand-logo" href="index.php">UPF Admin</a>
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
              <span class="menu-title">View Orders <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/orders/all");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
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
              <span class="menu-title">View Users <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/user/view/asc");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span</span>
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
              <span class="menu-title">Edit Products <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/product/view");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span</span>
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
              <span class="menu-title">Edit Blog <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/blog/view");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="queries.php">
              <i class="mdi mdi-bullhorn menu-icon"></i>
              <span class="menu-title">Queries <span class="badge-sm badge-pill badge-primary"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/queries/all");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></span></span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your dashboard is ready.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-primary mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Today date</small>
                            <div class="">
                              <?php echo "". date("l"). " " . date("Y/m/d"); ?>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Product</small>
                            <h5 class="mr-2 mb-0"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/product/view");
                               $data = json_decode($dataJson, true);
                                echo count($data);
                              ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Queries</small>
                            <h5 class="mr-2 mb-0"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/queries/all");
                               $data = json_decode($dataJson, true);
                                echo count($data); ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Blog</small>
                            <h5 class="mr-2 mb-0"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/blog/view");
                               $data = json_decode($dataJson, true);
                                echo count($data);
                              ?></h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Members</small>
                            <h5 class="mr-2 mb-0"><?php 
                               $dataJson = file_get_contents("http://localhost/fitness/api/user/view/asc");
                               $data = json_decode($dataJson, true);
                                echo count($data);
                              ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
     
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
              <div class="card-header">
              <strong>Users</strong> 
                    <?php 
                        if(isset($_GET['view']) && $_GET['view']=='desc'){
                          $str_data = file_get_contents("http://localhost/fitness/api/user/view/desc");
                          echo '<a href="../dashboard/" class="float-right">Sort by Ascending</a>';
                        }else{
                          $str_data = file_get_contents("http://localhost/fitness/api/user/view/asc");
                          echo '<a href="../dashboard/viewUser.php?view=desc" class="float-right">Sort by Descending</a>';
                        }
                    ?>
              </div>
                <div class="card-body  mx-2" style="overflow-x:auto;">
                 
                  <?php
                    // echo "<pre>";
                    //   var_dump($data);
                    //   echo "</pre>";
                    /*Fetching JSON file content using php file_get_contents method*/
                    // $str_data = file_get_contents("http://localhost/fitness/api/user/view");
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
                    // $temp .= "<td>" . $data["member"][$i]["action"] . "</td>";
                    $temp .= "</tr>";
                    }
                    
                    /*End tag of table*/
                    $temp .= "</table>";
                    echo $temp;
                    ?>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row mt-5">
          <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-header bg-white">
                    <strong>Orders</strong> 
                </div>

                <div class="card-body mx-2" style="overflow-x:auto;">
                <?php
                    /*Fetching JSON file content using php file_get_contents method*/
                    $str_data = file_get_contents("http://localhost/fitness/api/orders/each");
                    $data = json_decode($str_data, true);
                    if(count($data) == 0){
                      echo '
                      <div class="container">
                      <div class="row">
                        <div class="col-md-5">
                          <img src="images/nocontent.png" alt="" height="400" width="400">
                        </div>
                        <div class="col-md-7 display-1">
                           <strong>No orders found</strong> 
                        </div>
                      </div>
                      </div>
                      ';
                    }else{
                      $temp = "<table>";
 
                      /*Defining table Column headers depending upon JSON records*/
                      $temp .= "<tr><th>Id</th>";
                      $temp .= "<th>Product ID</th>";
                      $temp .= "<th>Member ID</th>";
                      $temp .= "<th>Customer ID</th>";
                      $temp .= "<th>Order Date</th>";
                      $temp .= "<th>Order Status</th>";
                      $temp .= "<th>Quantity</th>";
                      $temp .= "<th>Total Amount</th>";
                      $temp .= "<th>Product Name</th>";
                   
                      /*Dynamically generating rows & columns*/
                      for($i = 0; $i < sizeof($data); $i++)
                      {
                      $temp .= "<tr>";
                      $temp .= "<td>" . $data[$i]["id"] . "</td>";
                      $temp .= "<td>" . $data[$i]["productId"] . "</td>";
                      $temp .= "<td>" . $data[$i]["memberId"] . "</td>";
                      $temp .= "<td>" . $data[$i]["customerId"] . "</td>";
                      $temp .= "<td>" . $data[$i]["date"] . "</td>";
                      $temp .= "<td>" . $data[$i]["status"] . "</td>";
                      $temp .= "<td>" . $data[$i]["quantity"] . "</td>";
                      $temp .= "<td>" . $data[$i]["amount"] . "</td>";
                      $temp .= "<td>" . $data[$i]["productName"] . "</td>";
                      
                      }
                      
                      /*End tag of table*/
                      $temp .= "</table>";
                      echo $temp;
                    }

             
                    ?>
                </div>
            </div>
            </div>
        </div>
        

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">Islington</a>. All rights reserved.</span>
          </div>
        </footer>
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

