  <?php include 'partial/header.php';
        include 'inc/User.php';

        Session::checkLogin();

  ?>

  <?php

    $user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
      
      $userLogin = $user->userLogin($_POST);
    }

   ?>
   <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="login.php" class="active">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="register.php">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <?php 

                  if (isset($userLogin)) {
                    echo $userLogin;
                  }

                ?>
                <form action="login.php" method="POST" style="display: block;">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          Create an Account
                          <a href="register.php" tabindex="5" class="forgot-password">Click Here</a>
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