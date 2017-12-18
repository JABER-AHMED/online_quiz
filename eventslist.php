<?php
include 'partial/header.php';
// include 'inc/User.php';
include 'inc/Event.php';
Session::checkSession();
?>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
Session::destroy();
}
?>


    <section id="app" class="event-list-top-padding" id="Uevent-list">

        <div class="container">
            <?php

            $loginmessage = Session::get("loginmessage");

            if (isset($loginmessage)) {
                echo $loginmessage;
            }
            Session::set("loginmessage", NULL);

            ?>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Event List<span class="pull-right"><strong>Welcome! </strong>

			</span></h2>
                    </div>


                    <div  class="panel-body" v-for="item in evenList">
                        <a type="button" class="btn btn-primary btn-block" href="">{{item.event_name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'partial/footer.php'; ?>