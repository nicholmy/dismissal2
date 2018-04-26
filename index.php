<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dismissal System</title>
	<meta name="description" content="Check out the Bus Dismissal System and how it can improve life for your school's operations team here.">
	
	
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Bus Dismissal System" />
	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="css/main.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://www.mylesnicholson.com/">Myles Nicholson</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#features">Product</a></li>
					<li><a href="#why">Why?</a></li>
					<li><a href="#testimonials">Testimonials</a></li>
					<li><a href="./dismissal/index.php">Online Trial</a></li>
					<li><a href="#demo">Request A Demo</a></li>
				</ul>
				<form class="navbar-form navbar-right" action="login.php" method="post">
					<div class="form-group">
						<input type="text" placeholder="Username" class="form-control" name="username">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control" name="password">
					</div>
					<button type="submit" class="btn btn-success">Sign in</button>
				</form>
			</div>
		</div>
	</nav>
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Dismissal System</h1>
        <p>Getting kids home safely since 2013.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Request a demo &raquo;</a></p>
      </div>
    </div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Features</h2>
			</div>
		</div>
		
		<hr>
		<!-- Example row of columns -->
		<div id="features" class="row">
			<div class="col-md-6">
				<img src="./img/studentreportscreenshot.png" width="100%" />
			</div>
			<div class="col-md-6">
				<h2>Daily Scheduling with Overrides</h2>
				<p>Handling the countless dismissal changes from parents throughout the day shouldn't be a hassle. Ditch the spreadsheets so you can focus on more important tasks!</p>
				<ul>
					<li>Manage typical bus assignments on a daily basis including weekends</li>
					<li>Schedule overrides to a student's schedule for parents ahead of time</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2>Clean and Functional Reports</h2>
				<p>No extra bells and whistles. Everything is presented in a straightforward manner with valuable information anyone, from office managers to teachers, can use.</p>
				<ul>
					<li>Print rosters for each teacher with overrides highlighted</li>
					<li>Order the students by bus line up order on every report</li>
					<li>View a student's weekly schedule and their overrides for the current day</li>
					<li>View all students riding on a given bus, including changes from overrides</li>
				</ul>
			</div>
			<div class="col-md-6">
				<img src="./img/teacherreportscreenshot.png" width="100%" />
			</div>
		</div>
		<div id="features" class="row">
			<div class="col-md-6">
				<img src="./img/importscreenshot2.png" width="100%" />
			</div>
			<div class="col-md-6">
				<h2>Flexible Data Management</h2>
				<p>Ensuring data accuracy should be a breeze. Get your system quickly ready at the beginning of your school year with the new import features.</p>
				<ul>
					<li>Import student, teacher, and bus data into the system with .csv files</li>
					<li>Add, edit, or delete data with a simple interface</li>
					<li>Apply changes to multiple bus assignments at once</li>
				</ul>
			</div>
		</div>
		<div id="contact" class="row">
			<div class="col-md-12">
				<h2>Contact</h2>
				<p>Would you like to try out this system at your school? Do you have any burning questions? Feel free to reach out to me by email at <a href="mailto:myles2nicholson@gmail.com">myles2nicholson@gmail.com!</a></p>
			</div>
		</div>
      <hr>

      <footer>
        <!-- <p>&copy; 2016 Company, Inc.</p> -->
      </footer>
    </div> <!-- /container -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>