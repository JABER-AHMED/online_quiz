<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Quiz</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="create-quiz">

  <!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Online Quiz</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>


<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="dashboard.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  
    <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Events</span> <span class="label label-important">3</span></a>
      <ul>
         <li><a href="create-event.html">Create Event</a></li>
        <li><a href="event-list.html">Event list</a></li>
        <li><a href="create-quiz.html">Create Quiz</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>Create Quiz</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Event Title:</label>
                  <div class="controls">
                    <select class="form-control-select" v-model="QuizCreate.event_title">
                      <option disabled value = "" > Please Select a Title</option>
                      <option>Laravel one</option>
                      <option>Laravel two</option>
                      <option>Laravel three</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Question:</label>
                  <div class="controls">
                    <input type="text" name="question" class="form-control"  v-model="QuizCreate.question"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 1:</label>
                  <div class="controls">
                    <input type="text" name="optionone" class="form-control" v-model="QuizCreate.optionone"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 2:</label>
                  <div class="controls">
                    <input type="text" name="optiontwo" class="form-control" v-model="QuizCreate.optiontwo"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 3:</label>
                  <div class="controls">
                    <input type="text" name="optionthree" class="form-control" v-model="QuizCreate.optionthree"/>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Option 4:</label>
                  <div class="controls">
                    <input type="text" name="optionfour" class="form-control" v-model="QuizCreate.optionfour"/>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Correct Answer:</label>
                  <div class="controls">
                    <input type="text" name="correct_answer" class="form-control" v-model="QuizCreate.correct_answer"/>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" @click.prevent="storeCreateQuiz" class="btn btn-block btn-primary form-control-button">Submit</button>
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


<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Online Quiz Admin. </div>
</div>

  
</div>


<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.wizard.js"></script>
<script src="js/vue.js"></script>
<script src="js/event-js.js"></script>
</body>
</html>
