<!DOCTYPE HTML>
<!--
	Paradigm Shift by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Paradigm Shift by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				
				<!-- Section -->
					<section>
						<header>
							<h2>Feugiat consequat tempus ultrices</h2>
							
						</header>
						<div class="content">
							<p><strong>Etiam tristique libero</strong> eu nibh porttitor amet fermentum. Nullam venenatis erat id vehicula ultrices sed ultricies condimentum.</p>
							<ul class="feature-icons">
								<?
								$servername = "localhost";
								$username = "root";
								$password = "123";
								$dbname = "mydb";
								$conn = new mysqli($servername, $username, $password, $dbname);
								$query = "SELECT * from table2";
								$row = $conn-> query($query);
								while ($res = mysqli_fetch_assoc($row)) {
									echo $res['list']; echo "<br>";
								}
								?>

								<!-- <li class="icon fa-laptop">Consequat tempus</li>
								<li class="icon fa-bolt">Etiam adipiscing</li>
								<li class="icon fa-signal">Libero nullam</li>
								<li class="icon fa-gear">Blandit condimentum</li>
								<li class="icon fa-map-marker">Lorem ipsum dolor</li>
								<li class="icon fa-code">Nibh amet venenatis</li> -->
							</ul>
							<p>Vehicula ultrices sed ultricies condimentum. Magna sed etiam consequat, et lorem adipiscing sed nulla. Volutpat nisl et tempus et dolor libero, feugiat magna tempus, sed et lorem adipiscing.</p>
						</div>
					</section>



				<!-- Copyright -->
					<div class="copyright">&copy; Untitled. All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>