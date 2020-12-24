<?php include '../includes/toast.php'; ?>


    <div class="row bg-light p-2 mx-0">
        <div class="col-md-5">
            Get Variety of GYM prodcuts and Supplements. 
            <a a class="<?php if ($PAGENAME=='shop') echo 'active'; ?> text-warning mx-2" href="../shop/">Order Now
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
                </svg>
            </a>
        </div>
        <div class="col-md-7 text-right">

					<?php

						// Including global constants
						include_once 'config.php';

						// Checking user exist or not
						if (isset($_COOKIE['token'])) {
							$token = file_get_contents(API_ENDPOINT.'/token/verify/'.$_COOKIE['token']);
							$token = json_decode($token,TRUE);
							
							if(isset($token) && $token!= FALSE){
								$token = $token[0];
								$USER = [];
								$USER['id'] = $token['id'];
								$USER['name'] = $token['firstName'];
							
							}
						}						

						if(!isset($USER)){
							echo '<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</a>';
							echo '<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Signup</a>';
            				
						}

						else{
							echo '<a href="" class="mx-2 text-dark font-weight-bold">Welcome '.$USER['name'].'</a>';
							echo '<a href="../controller/logout.php" class="mx-2 text-dark font-weight-bold">Logout</a>';
						}

						unset($CURRENT_PAGE);
						unset($USER);

						?>
            <a href="../checkout/" class="mx-2 text-dark font-weight-bold">Check Out</a>
        </div>
    </div>


	
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<strong class="my-3 h4">Welcome Please Signup to Continue</strong>
				<p>Already Have an account the please login</p>
				<form action="../controller/signup.php" method="POST" id='signupForm'>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
									<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
								</div>
						</div>
					</div>
					<span id='message'></span>
					<span class="float-right" id='messages'></span>
					
					<button type="submit" class="btn btn-warning btn-lg btn-block my-3" value="signup" id="submitBtn" >
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
						  </svg>
						Signup
					</button>

					
					<p>By clicking “SIGN UP”, I agree to fitness Terms of Use and Privacy Policy</p>
					<p class="text-center h4">Or signup with</p>
					<button type="button" class="btn btn-danger btn-lg btn-block my-3">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
						  </svg>
						Google
					</button>
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	</div>


    <!--lOGIN modal-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <strong class="my-3 h4">Welcome Please login to Continue</strong>
                <p>New Member? Please signup </p>
                <form action="../controller/login.php" method="POST" id="loginForm">
                    <div class="form-group">		
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control pwd" id="password" name="password"> 	
                    </div>
                    <P><a href="recovery" class="float-right mb-4">Forgot Password?</a></P>
  
                    <button type="submit" class="btn btn-warning btn-lg btn-block my-3" value="login">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
                        </svg>
                        Login
                    </button>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

    
	<header class="header-section bg-white">
		<a href="index.php" class="site-logo">
			<img src="../img/logos-01.png" alt="" height="64">
		</a>
		<ul class="main-menu">
			<li><a class="<?php if ($PAGENAME=='home') echo 'active'; ?>" href="../home/">Home</a></li>
			<li><a class="<?php if ($PAGENAME=='about') echo 'active'; ?>" href="../about/">About Us</a></li>
			<li><a class="<?php if ($PAGENAME=='classes') echo 'active'; ?>" href="../classes/">Classes</a></li>
			<li><a class="<?php if ($PAGENAME=='shop') echo 'active'; ?>" href="../shop/">Shop</a></li>
			<li><a class="<?php if ($PAGENAME=='blog') echo 'active'; ?>" href="../blog/">Blog</a></li>
			<li><a class="<?php if ($PAGENAME=='contact') echo 'active'; ?>" href="../contact/">Contact</a></li>
			<li class="header-right">
				<div class="hr-box">
					<img src="../img/location-icon.png" alt="">
					<h6>Koteshor, Kathmandu Nepal</h6>
				</div>
			</li>
		</ul>
	</header>
    <div class="clearfix"></div>
