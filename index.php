<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- My Custom CSS rlewis37@cnm.edu -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>Basic Bootstrap Wireframe Exercise</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<!--begin header and navbar-->
			<header>
				<div class="container">
					<!--Begin the Bootstrap Navbar - see documentation: http://getbootstrap.com/components/#navbar -->
					<nav class="navbar navbar-inverse">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Bootstrap Wireframe Challenge!</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Catnip</a></li>
								<li><a href="#">Toys</a></li>
								<li><a href="#">Kitty Treats</a></li>
								<li><a href="https://senator-arlo.bowtied.io/" target="_blank">Feel the Fuzzy</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</header>

			<!--begin main page content-->
			<main>
				<div class="container">

					<!--begin welcome row-->
					<div class="row">
						<div class="col-md-12">
							<div class="jumbotron">
								<h1>Meow! =^. .^=</h1>
								<p>Welcome to Senator Arlo's Bootstrap page!</p>
							</div>
						</div>
					</div>

					<!--begin 2 column row-->
					<div class="row">
						<div class="col-md-6">
							<div class="content-box">
								<h3>Navbar</h3>
								<p>This example uses Bootstrap's built-in Navbar. RTFM here: <a
										href="http://getbootstrap.com/components/#navbar" target="_blank">http://getbootstrap.com/components/#navbar</a></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<h3>Flexbox Sticky Footer</h3>
								<p>Keep the footer at the bottom of the page, always. Even if the content-area is "short". This is the finest sticky footer I've ever used. View the source code.</p>
							</div>
						</div>
					</div>

					<!--begin 4 column row-->
					<div class="row">
						<div class="col-md-3">
							<div class="content-box">
								<h3>Jumbotron</h3>
								<p>The Bootstrap "jumbotron" made the "Meow!" big. This is also sometimes referred to as a "Hero Message", lol. RTFM <a href="http://getbootstrap.com/components/#jumbotron" target="_blank">here</a>.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>Box Styling</h3>
								<p>See these fancy round-corner boxes? I did that with some custom CSS. Open devtools and look for the &lt;div class="content-box"&gt;. Yay!</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>Mobile First</h3>
								<p>Check this page out on your mobile device! Bootstrap powers the responsive behavior by default when build websites the Bootstrap way. :D</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="content-box">
								<h3>View Source</h3>
								<p>This is a lotta Bootstrap, I know. View the source code, it's well commented. Take a look in devtools. Try stuff. Break things. Have fun.</p>
							</div>
						</div>
					</div>

				</div>
			</main>
		</div><!--.sfooter-content-->

		<!--begin footer content-->
		<footer>
			<div class="container">
				&copy; 2016 Back Paws for Bernie Campaign
			</div>
		</footer>
	</body>
</html>