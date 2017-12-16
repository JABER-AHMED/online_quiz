<?php include "partial/adminheader.php"; 
      include "partial/adminsidebar.php";
      include "inc/Event.php";

      Session::checkSession();

?>

<section class="event-list-top-padding" id="event-list">

<div class="container">
    <div class="row">
      <div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="text-center">LeaderBoard </h2>
		</div>
		<div class="panel-body">
			<table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial</th>
                  <th>User Name</th>
                  <th>User Point</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>1</td>
                  <td>User 1</td>
                  <td>10</td>
                </tr>
                <tr class="gradeC">
                  <td>2</td>
                  <td>User 1</td>
                  <td>10</td>
                </tr>
                <tr class="gradeC">
                  <td>3</td>
                  <td>User 1</td>
                  <td>10</td>
                </tr>
                <tr class="gradeC">
                  <td>4</td>
                  <td>User 1</td>
                  <td>10</td>
                </tr>
                 
              </tbody>
            </table>
		</div>
	</div>
	</div>
</div>


</section>

<?php include "partial/adminfooter.php"; ?>