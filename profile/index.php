<?php include '../includes/toast.php'; ?>	
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='profile';
	include '../includes/import.php'; 
	?>
    <style>
    body{
            background-color: #eff0f5;
        }
   
    table.userProductsTable, table.userProductsTable th , table.userProductsTable td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 15px;
    width: 100%;
    white-space: nowrap;
    }
    /*Style for Table Header*/
    table.userProductsTable th {
    background: darkblue;
    color: white;
    text-align: left;
    }
    /*Style for Alternate Rows*/
    table.userProductsTable tr:nth-child(odd) {
    background-color: #C2EBC3;
    }
    table.userProductsTable tr:nth-child(even) {
    background-color: #FFFFFF;
    }
    .card-body{
        overflow-x:auto;
    }

    </style>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
    

	<!-- Header incude -->
    <?php include '../includes/header.php';
        include '../includes/toast.php';


        
        
        if(isset($_COOKIE['token'])){
            

            $accesstoken = file_get_contents('http://localhost/fitness/api/token/verify/'.$_COOKIE['token']);

            $accesstoken = json_decode($accesstoken,TRUE);

         


            if ($accesstoken['usertype'] == "member"){
                if($accesstoken != FALSE){
                       //days calculation for membership expiry
                        $future = strtotime($token['validTo']);
                        $timefromdb = time();
                        $timeleft = $future-$timefromdb;
                        $daysleft = round((($timeleft/24)/60)/60);
                    echo '
                        <div class="container">
                            <div class="row my-5">
                                <div class="col-md-4">
                                    <h4 class="mb-4 text-center text-info">Welcome '.$token['firstName'].' </h4>
                                    <div class="row justify-content-center mb-2">
                                        <img src="https://i.stack.imgur.com/gBMMe.png?s=328&g=1" alt="" height="300">
                                    </div>
                                    <div class="bg-white p-4">
                                        <h5 class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> '.$token['address'].'</h5>
                                        <h5 class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg> '.$token['phone'].'</h5>
                                        <hr>
                                        <p>Membership details</p>
                                        <p>Valid From: <span class="text-danger"> '.$token['validFrom'].' </span>  </P>
                                        <p>Valid TO: <span class="text-danger"> '.$token['validTo'].' </span> </P>
                                        <p>Days left: <span class="text-danger"> '.$daysleft.' </span>  </P>
                                        <a href="../controller/logout.php"><button type="button" class="btn btn-info w-100">Logout</button></a>
                                    </div>
                                </div>
        
        
                                <div class="col-md-8">
                                    <h4 class="mb-4 text-info">Manage My Account</h4>
        
                                    <div class="row mb-4">
                                        <div class="col-md-4 bg-white mx-3 pt-2">
                                            <strong>Personal Detail</strong>
                                            <div class="py-2">'.$token['firstName'].' '.$token['lastName'].'</div>
                                            <div class="py-2">'.$token['email'].'</div>
                                        </div>
                                        <div class="col-md-7 bg-white ml-3 pt-2">
                                            <strong>Shipping Detail</strong>
                                            <div class="py-2">Nepal, Kathmandu, '.$token['address'].'</div>
                                            <div class="py-2">Shipping Name: '.$token['firstName'].' '.$token['lastName'].'</div>
                                        </div>
                                    </div>
                                    
        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Recent Order
                                                </div>
                                              
                                               
                                                      
                                                    <div class="card-body"> ';
                                                    $str_data = file_get_contents('http://localhost/fitness/api/orders/user/'.$token['id']);
                                                    $data = json_decode($str_data, true);

                                                    if(count($data) == 0){
                                                    echo '
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                        <img src="../img/nocontent.png" alt="" height="300" width="300">
                                                        </div>
                                                        <div class="col-md-7 display-1">
                                                        <h1>No Orders found</h1> 
                                                        </div>
                                                    </div>
                                                    </div>
                                                    ';
                                                    }else{
                                                    $temp = "<table class='userProductsTable'>";

                                                
                                                    /*Defining table Column headers depending upon JSON records*/
                                                    $temp .= "<tr><th>ProductName</th>";
                                                    $temp .= "<th>Date</th>";
                                                    $temp .= "<th>Status</th>";
                                                    $temp .= "<th>Quantity</th>";
                                                    $temp .= "<th>Amount</th></tr>";
                                        
                                                    /*Dynamically generating rows & columns*/
                                                    for($i = 0; $i < sizeof($data); $i++)
                                                    {
                                                    
                                                    $temp .= "<tr>";
                                                    $temp .= "<td>" . $data[$i]["productName"] . "</td>";
                                                    $temp .= "<td>" . $data[$i]["date"] . "</td>";
                                                    $temp .= "<td>" . $data[$i]["status"] . "</td>";
                                                    $temp .= "<td>" . $data[$i]["quantity"] . "</td>";
                                                    $temp .= "<td>" . $data[$i]["amount"] . "</td>";

                        
                                                    
                                                }
                                                    /*End tag of table*/
                                                    $temp .= "</table>";
                                                    echo $temp;
                                                    
                                                    }

                                                    echo '
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                                               
                                        
        
                        
                      
        
        
                    }else{
                        header('Location: ../home');
                        setcookie('toast_message', "Token is invalid or expired", time()+60*60, "/");
                        exit;
                    }
        
            }else{
                echo '
                <input type="hidden" value='.$token['password'].' id="oldPasswords">
                <div class="container">
                <div class="row my-5">
                    <div class="col-md-4">
                        <h4 class="mb-4 text-center text-info">Welcome '.$token['firstName'].' </h4>
                        <div class="row justify-content-center mb-2">
                            <img src="https://i.stack.imgur.com/gBMMe.png?s=328&g=1" alt="" height="300">
                        </div>
                        <div class="bg-white p-4">
                            <h5 class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg> '.$token['address'].'</h5>
                            <h5 class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg> '.$token['phone'].'</h5>
                            <hr>
                            
                            <button type="button" class="btn btn-warning w-100 mb-2" data-toggle="modal" data-target="#editModal'.$token['id'].'">Edit Details</button>
                            <button type="button" class="btn btn-success w-100 mb-2" data-toggle="modal" data-target="#password'.$token['id'].'">Change Password</button>
                            <button type="button" class="btn btn-danger w-100 mb-2" data-toggle="modal" data-target="#delete'.$token['id'].'">Delete Account</button>
                            <a href="../controller/logout.php"><button type="button" class="btn btn-info w-100">Logout</button></a>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <h4 class="mb-4 text-info">Manage My Account</h4>

                        <div class="row mb-4">
                            <div class="col-md-4 bg-white mx-3 pt-2">
                                <strong>Personal Detail</strong>
                                <div class="py-2">'.$token['firstName'].' '.$token['lastName'].'</div>
                                <div class="py-2">'.$token['email'].'</div>
                            </div>
                            <div class="col-md-7 bg-white ml-3 pt-2">
                                <strong>Shipping Detail</strong>
                                <div class="py-2">Nepal, Kathmandu, '.$token['address'].'</div>
                                <div class="py-2">Shipping Name: '.$token['firstName'].' '.$token['lastName'].'</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Recent Order
                                    </div>
                                    <div class="card-body">';
                                    $str_data = file_get_contents('http://localhost/fitness/api/orders/customer/'.$token['id']);
                                    $data = json_decode($str_data, true);

                                    if(count($data) == 0){
                                    echo '
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                        <img src="../img/nocontent.png" alt="" height="300" width="300">
                                        </div>
                                        <div class="col-md-7 display-1">
                                        <h2>No orders found</h2> 
                                        </div>
                                    </div>
                                    </div>
                                    ';
                                    }else{
                                    $temp = "<table class='userProductsTable'>";

                                
                                    /*Defining table Column headers depending upon JSON records*/
                                    $temp .= "<tr><th>ProductName</th>";
                                    $temp .= "<th>Date</th>";
                                    $temp .= "<th>Status</th>";
                                    $temp .= "<th>Quantity</th>";
                                    $temp .= "<th>Amount</th></tr>";
                        
                                    /*Dynamically generating rows & columns*/
                                    for($i = 0; $i < sizeof($data); $i++)
                                    {
                                    
                                    $temp .= "<tr>";
                                    $temp .= "<td>" . $data[$i]["productName"] . "</td>";
                                    $temp .= "<td>" . $data[$i]["date"] . "</td>";
                                    $temp .= "<td>" . $data[$i]["status"] . "</td>";
                                    $temp .= "<td>" . $data[$i]["quantity"] . "</td>";
                                    $temp .= "<td>" . $data[$i]["amount"] . "</td>";

        
                                    
                                }
                                    /*End tag of table*/
                                    $temp .= "</table>";
                                    echo $temp;
                                    
                                    }

                                    echo '
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editModal'.$token['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form action="../controller/editCustomer.php"  method="POST">
                        <p>First Name: <input type="text" class="form-control" id="updatedfirstName" name="updatedfirstName" value="'.$token['firstName'].'" required></p>
                        <p>Last Name: <input type="text" class="form-control" id="updatedlastName" name="updatedlastName" value="'.$token['lastName'].'" required></p>
                        <p>Address: <input type="text" class="form-control" id="updatedAddress" name="updatedAddress" value="'.$token['address'].'" required></p>
                        <p>Phone: <input type="text" class="form-control" id="updatedPhone" name="updatedPhone" value="'.$token['phone'].'" required></p>
                        <p>Email: <small id="emailMatch"></small> <input type="email" class="form-control" id="updatedEmail" name="updatedEmail" value="'.$token['email'].'" required></p>
                        <small>*You will be logged out after save change please login again</small>
                    </div>

                        <div class="modal-footer">
                     
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="hidden" name="edit_id" value="'.$token['id'].'">
                            <button type="submit" class="btn btn-warning" name="updateCustomer" id="updateCustomer" value="save">Save changes</button>
                    </form>
                     
                    </div>
                  </div>
                </div>
              </div>

            <div class="modal fade" id="password'.$token['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="../controller/updatePassword.php"  method="POST">
                                <p>Old Password: <small id="pwOldMatch"></small><input type="text" class="form-control" id="oldPassword" onkeyup="changePassword()" name="oldPassword" required></p>
                                <p>New Password: <small id="validChar"></small><input type="text" class="form-control" id="updatedPassword" name="updatedPassword" required></p>
                                <p>Re-Type New Password: <small id="twoPwMatch"></small><input type="text" class="form-control" id="matchPassword" name="matchPassword required></p>
                            
                                <small>*You will be logged out after save change please login again</small>
                                <span class="float-right" id="pwMessage"></span>
                            </div>
                                <div class="modal-footer">
                            
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="hidden" name="edit_id" value="'.$token['id'].'">
                                    <button type="submit" class="btn btn-warning" name="updatePassword" id="passwordChangeBtn" value="save">Save changes</button>
                            
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="delete'.$token['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../controller/deleteCustomer.php"  method="POST">
                            Do you want to delete this account!!
                        </div>
                            <div class="modal-footer">
                        
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="hidden" name="delete_id" value="'.$token['id'].'">
                                <button type="submit" class="btn btn-danger" name="deleteAccount" id="deleteAccount" value="save">Delete</button>
                        
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
                ';  
            }
        }
        

            
            
?>
 



	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>	
							


	</body>
</html>
