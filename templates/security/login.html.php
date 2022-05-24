
     
   <!-- <body onLoad="document.fo.login.focus()"> -->
   <!-- <div class="erreur">
                <h1>Authentification</h1>
      
                <form name="fo" method="post" action="http://localhost:8002/">
                        
                    <input class="input" type="text" name="login" placeholder="Login" /><br />
                    <input class="input" type="password" name="password" placeholder="Mot de passe" /><br />
                    <input type="submit" name="valider" value="S'authentifier" />
                </form>
    </div> -->


	<body class="img js-fullheight" >
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Veuillez remplir le champ ci dessous</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Pour se connecter</h3>
		      	<form method="post" action="http://localhost:8002" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="login" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	        
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

