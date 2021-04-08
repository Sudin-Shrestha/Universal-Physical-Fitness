<?php include '../includes/toast.php'; ?>


    <div class="row bg-light p-2 mx-0 sticky-top">
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
								$USER['email'] = $token['email'];
								
								if($USER['email'] == 'admin'){
									header ('location: ../dashboard');
								}
							
							}
							
						}			
						else if($PAGENAME == 'profile' || $PAGENAME == 'checkout' || $PAGENAME == 'shipping'){
							header('Location: ../home');
            				exit;
						}						
						

						if(!isset($USER)){
							echo '<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</a>';
							echo '<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Signup</a>';
            				
						}

						else{
							echo '<a href="../profile/" class="mx-2 text-dark font-weight-bold">Welcome '.$USER['name'].'</a>';
							echo '<a href="../controller/logout.php" class="mx-2 text-dark font-weight-bold">Logout</a>';
						}

						unset($CURRENT_PAGE);
						unset($USER);

						?>
            <a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#cart">Check Out(<span class="total-count"></span>) </a>
        </div>
    </div>


    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		  <div class="modal-content">
			<div class="modal-header bg-light">
			  <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<div class="row">
						<div class="col-md-6">
							<img src="../img/login.svg" class="" alt="">
							<p class="text-center h1">Get Started</p>
							<button type="button" class="btn btn-primary btn-lg btn-block my-3">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
							<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
							</svg>
									Facebook
							</button>

						</div>
						<div class="col-md-6">
							<h4 class="mb-4">Register</h4>
							<form action="../controller/signup.php" method="POST" id='signupForm' class="">
							
								
										<div class="form-group">
											<small id="firstNameStatus"></small>
											<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
										</div>
							
										<div class="form-group">
											<small id="lastNameStatus"></small>
											<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
										</div>
		
										<div class="form-group">
											<small id="addressStatus"></small>
											<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
										</div>
								
										<div class="form-group">
											<small id="phoneStatus"></small>
											<input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required>
										</div>
							
								<div class="form-group">
									<small id="emailStatus"></small>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
									
								</div>
							
									
										<div class="form-group">
											<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
										</div>
									
											<div class="form-group">
												<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
											</div>
											<input type="checkbox" onclick="showPw()">Show Password
							
								<span id='message'></span>
								<span class="float-right" id='messages'></span>
								
								<button type="submit" class="btn btn-warning btn-lg btn-block my-3" value="signup" id="submitBtn" >
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
									</svg>
									Signup
								</button>

								
								<p>By clicking “SIGN UP”, I agree to fitness Terms of Use and Privacy Policy</p>
								
							</form>
						</div>
				</div>
			</div>
			<!-- <div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div> -->
		  </div>
		</div>
	</div>


    <!--lOGIN modal-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="../img/login.svg" alt="">
					</div>
					<div class="col-md-6">
						<strong class="my-3 h4">Welcome Please login to Continue</strong>
						<p>New Member? Please signup </p>
						<form action="../controller/login.php" method="POST" id="loginForm" class="was-validated">
							<div class="form-group">		
								<label for="email" class="col-form-label">Email:</label>
								<input type="text" class="form-control" id="email" name="username" required>
							</div>
							<div class="form-group">
								<label for="password" class="col-form-label">Password:</label>
								<input type="password" class="form-control pwd" id="passwords" name="password" required> 	
							</div>
							<input type="checkbox" onclick="showPws()">Show Password
							<a href="../recovery" class="float-right mb-3">Forgot Password?</a>
		
							<button type="submit" class="btn btn-warning btn-lg btn-block my-3" value="login">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
								</svg>
								Login
							</button>
						</form>
					</div>
				</div>
            </div>
        </div>
        </div>
    </div>
	
	<!-- Cart Modal -->
	<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: Rs.<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
		<small>You have to login to make an order</small>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button class="clear-cart btn btn-danger">Clear Cart</button>

		<?php 
			if(isset($_COOKIE['token'])){
				$accesstoken = file_get_contents('http://localhost/fitness/api/token/verify/'.$_COOKIE['token']);
		
				$accesstoken = json_decode($accesstoken,TRUE);
				if($accesstoken != FALSE){
					echo '
					<a href="../checkout" class="btn btn-primary">Check Out</a>
					';
				}
			}
		
		?>
		
        <!-- <button type="button" class="btn btn-primary"></button> -->
	
      </div>
    </div>
  </div>
</div> 


	

	<header class="header-section bg-white sticky-top">
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
