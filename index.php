<?php
include "partial/header.php";
include 'inc/User.php';
Session::checkLogin();
?>
<?php
$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    echo 'Register clicked';
    $userRegi = $user->userRegistration($_POST);
}else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    echo 'Login clicked';
    $userLogin = $user->userLogin($_POST);
}
else{
    echo 'nothing clicked';
}
?>


    <section class="back" style=" background-image: url(img/front.jpg);
padding-bottom: 12.8%;" id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    if (isset($userRegi)) {
                        echo $userRegi;
                    }
                    ?>
                    <h3 class="signup">Sign Up</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <br>
                            <input type="text"  name="name" class="form-control" placeholder="Your Name">

                        </div>
                        <div class="form-group">
                            <br>
                            <input type="text"  name="username" class="form-control" placeholder="User Name">

                        </div>
                        <div class="form-group">
                            <br>
                            <input type="email"  name="email" class="form-control" placeholder="Your Email">

                        </div>
                        <div class="form-group">
                            <br>
                            <input type="password"  name="password" class="form-control" placeholder="Your Password">
                        </div>
                        <button type="submit" name="register" class="btn btn-block btn-success">Register</button>

                    </form>

                </div>
                <div class="col-md-6">
                    <?php
                    if (isset($userLogin)) {
                        echo $userLogin;
                    }
                    ?>
                    <h3 class="signin">Sign In</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <br>
                            <input type="email" name="email"  class="form-control" placeholder="User Email">

                        </div>
                        <div class="form-group">
                            <br>
                            <input type="password"  name="password" class="form-control" placeholder="Your Password">

                        </div>
                        <button type="submit" name="login" class="btn btn-block  btn-success">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </section>
<?php include "partial/footer.php";?>