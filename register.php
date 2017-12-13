  <?php include 'partial/header.php'; 
  		include 'inc/User.php';

  ?>

  <?php

  	$user = new User();
  	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
  		
  		$userRegi = $user->userRegistration($_POST);
  	}

   ?>
   <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="login.php" >Login</a>
              </div>
              <div class="col-xs-6">
                <a href="register.php" class="active">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
              	<?php 

              		if (isset($userRegi)) {
              			echo $userRegi;
              		}

              	?>
                <form action="register.php" method="POST" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="submit" name="register" class="btn btn-block btn-primary">Register</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          Already have Account
                          <a href="login.php" tabindex="5" class="forgot-password">Click Here</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include 'partial/footer.php'; ?>