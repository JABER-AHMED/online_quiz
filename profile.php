  <?php include 'partial/header.php';
      include 'inc/User.php';

      Session::checkSession();
     

   ?>

   <?php 

      if (isset($_GET['id'])) {
         $userid = (int)$_GET['id'];
      }
       $user = new User();
       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
      
          $userUP = $user->userUpdate($userid, $_POST);
    }

   ?>
  <div class="container" style="margin-top: 40px;">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h2>User Profile<span class="pull-right"><a type="button" class="btn btn-success" href="index.php">Back</a></button>
      </span></h2>
    </div>
    <div class="panel-body">
      <?php 
          if (isset($userUP)) {
               echo $userUP;
          }
      ?>
      <?php 

          $userData = $user->getUserDataById($userid);
          if ($userData) {
      ?>
      <form action="" method="POST" style="display: block;">
        <div class="form-group">
                    <input type="text" name="name" class="form-control" value="<?php echo $userData->name?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" value="<?php echo $userData->username ?>">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" value="<?php echo $userData->email ?>">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <?php 
                           $sessionId = Session::get('id');
                           if ($sessionId == $userid) {
                        ?>
                        <button type="submit" name="update" class="btn btn-block btn-primary">Update</button>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </form>
                <?php } ?>
    </div>
  </div>
  </div>
  <?php include 'partial/footer.php'; ?>