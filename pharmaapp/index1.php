<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <link rel="icon" href="../../favicon.ico">

    <title>Pharma app</title>
    <!-- <link type="text/css" href="./css/timepicker.css" />
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-timepicker.js"></script> -->
    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  <!--  <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" />-->
    <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--model-->

<style>
#exTab1 .tab-content {
  background-color: #81DAF5;
  padding : 5px 15px;
  height: 550px;
}
#exTab2 .tab-content {
  background-color: #81DAF5;
  /*padding : 5px 15px;*/
  /*height: 500px;*/
}
.icon-chevron-up{
  display: inline-block;
  width: 14px;
  height: 14px;
  line-height: 14px;
  vertical-align: text-top;
  background-image: url("assets/img/glyphicons-halflings.png");
  background-repeat: no-repeat;
  margin-top: 1px;
  background-position: -288px -120px;
}
.icon-chevron-down {
  display: inline-block;
  width: 14px;
  height: 14px;
  line-height: 14px;
  vertical-align: text-top;
  background-image: url("assets/img/glyphicons-halflings.png");
  background-repeat: no-repeat;
  margin-top: 1px;
  background-position: -313px -119px;
}
.bootstrap-timepicker-widget.dropdown-menu{
  z-index: 9999;
}
#mode{
  padding-top: 220px;
}
.fade.in {
        background-color: transparent !important;
}
</style>

  <script>
    jQuery(document).ready(function($) {
      //alert('ready');
      $('#timepicker1').timepicker({
        showInputs: false
      });
      $('#timepicker2').timepicker({
        showInputs: false
      });
  });
  </script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pharma App </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="agenda.php">Tabview</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
  <div class="container"><h1>Schedule Cycle Meeting </h1></div>
  <div id="exTab1" >
  <ul  class="nav nav-pills">
    <li class="active"><a href="#meeting" data-toggle="tab">Meeting</a></li>
    <li><a href="#agenda" data-toggle="tab">Agenda</a></li>
    <li><a href="#content" data-toggle="tab">Content</a></li>
    <li><a href="#task" data-toggle="tab">Task</a></li>
    <li><a href="#notes" data-toggle="tab">Notes</a></li>
    <li><a href="#message" data-toggle="tab">Message</a></li>
    <li><a href="#que" data-toggle="tab">Questions</a></li>

  		</ul>
      <div class="tab-content clearfix">
			  <div class="tab-pane active" id="meeting">
          <h3>Meeting Content</h3>
				</div>

        <div class="tab-pane" id="agenda">
          <div id="exTab2" >
          <ul class="nav nav-pills">
              <li class="active"><a href="#tabs-11" data-toggle="tab">21-Aug-2016</a></li>
              <li><a href="#tabs-12" data-toggle="tab" >22-Aug-2016</a></li>
              <li><a href="#tabs-13" data-toggle="tab">23-Aug-2016</a></li>
              <li><a href="#tabs-14" data-toggle="tab">24-Aug-2016</a></li>
            </ul>
          </div>
          <div class="tab-content clearfix">

            <div class="tab-pane active" id="tabs-11">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add event</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog" id="mode">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add event</h4>
                  </div>
                  <div class="modal-body"   style="overflow-y:visible !important;">
                    <form class="form-horizontal" role="form">
                     <div class="form-group" >
                       <div class="col-md-4">
                      <label>Event Name</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text"  class="form-control" />
                      </div>
                   </div>
                   <div class="form-group">
                       <div class="col-md-4">
                      <label>Start Time</label>
                    </div>
                     <div class="col-md-8">
                       <div class="input-group bootstrap-timepicker timepicker">
                         <input id="timepicker1" type="text" class="form-control input-small">
                         <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                       </div>
                  </div>
                   </div>
                   <div class="form-group">
                     <div class="col-md-4">
                     <label>End Time</label>
                   </div>
                        <div class="col-md-8">
                          <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timepicker2" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                          </div>
                       </div>
                   </div>

                   <div class="form-group">
                     <div class="col-md-4">
                      <label>Event Description</label>
                    </div>
                    <div class="col-md-8">
                    <input type="text"  class="form-control" />
                  </div>
                   </div>
                 </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add event</button>
                  </div>
                </div>
                </form>
              </div>
            </div>




          </div> <!--innner tab-->

          <div class="tab-pane" id="tabs-12">
            <h1>day2</h1>
          </div>
          <div class="tab-pane" id="tabs-13">
            <h1>day3</h1>
          </div>
          <div class="tab-pane" id="tabs-14">
            <h1>day4</h1>
          </div>
          </div>
				</div>
        <div class="tab-pane" id="content">
            <h3>Manage Content</h3>
				</div>
        <div class="tab-pane" id="task">
          <h3>Manage Task</h3>
				</div>
        <div class="tab-pane" id="notes">
          <h3>Manage Notes</h3>
				</div>
        <div class="tab-pane" id="message">
          <h3>Message</h3>
				</div>
        <div class="tab-pane" id="que">
          <h3>Manage Question</h3>
        </div>

			</div>



  	</div>




    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
