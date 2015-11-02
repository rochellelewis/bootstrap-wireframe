<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap latest complied and minified CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

		<!-- Optional Bootstrap theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- Bootstap latest complied and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

		<title>Basic Bootstrap Wireframe Exercise</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!--begin navbar-->
							<nav class="navbar navbar-inverse">

								<!--logo and mobile toggle button get grouped together-->
								<div class="navbar-header">
									<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar" aria-expanded="false">
										<span class="sr-only">Main Menu</span>
										<span class="glyphicon glyphicon-plus"></span>
									</button>
									<a href="#" class="navbar-brand">
										<span class="glyphicon glyphicon-equalizer"></span>
										Bootstrap Wireframe
									</a>
								</div>

								<!--nav links are grouped together here -->
								<div class="collapse navbar-collapse navbar-right" id="my-navbar">
									<ul class="nav navbar-nav">
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<main>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="jumbotron">
								<h1>Basic Bootstrap Wireframe</h1>
								<p>This example uses the Bootstrap navbar, Jumbotron, and the Flexbox Sticky Footer.</p>
								<div>View Source for details. Shrink your browser window down to see this layout's responsive behavior in action.</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="text-box bg-pink">
								<h3>Try-hard Kitsch</h3>
								<p>Four loko ethical williamsburg austin lo-fi try-hard kitsch, 90's cliche lomo fanny pack poutine. Venmo blog viral wayfarers before they sold out fingerstache.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-box bg-pink">
								<h3>Art Party Swag</h3>
								<p>Meh waistcoat kitsch shabby chic. Roof party tumblr thundercats kombucha intelligentsia tote bag, heirloom ugh readymade art party swag.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-box bg-pink">
								<h3>Fingerstache</h3>
								<p>Kitsch squid hoodie vice kale chips messenger bag. Microdosing farm-to-table synth shoreditch. Portland roof party health goth, beard artisan truffaut.</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-box bg-pink">
								<h3>Cliche Waistcoat</h3>
								<p>Kitsch microdosing XOXO umami cold-pressed, jean shorts pabst. Cliche waistcoat crucifix selvage squid hashtag wayfarers sustainable street art locavore brunch.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="text-box bg-gray">
								<h3>About This Layout</h3>
								<p>Bootstrap default styles have been used primarily throughout. View CSS source to see the custom styles.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="text-box bg-gray">
								<h3>About This Code</h3>
								<p>View the source for the CSS to see the Flexbox Sticky Footer. This Flexbox hack will keep a footer at the bottom of a page even if the content above it is short.</p>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div>This is some fancy footer text :D</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>