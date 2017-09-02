<?php
	$path = $_SERVER['DOCUMENT_ROOT'].'/ScavengerHunt/php/'; // The path to the included php files
	$title = "Home"; // The page/navigation bar title
	$index1 = "active"; // Set the first index in the navigation to 'active'
?>

<html>
	<head>
		<?php include $path.'__head.php'; ?> <!-- Include the global document header -->
	</head>
	<body>
		<header>
			<?php include $path.'__js.php'; ?> <!-- Load the Javascript Libraries -->
		</header>

		<nav>
			<?php include $path.'__navbar.php'; ?> <!-- Load the navigation bar -->
		</nav>

		<main>
			<div class="row">

				<!-- This is the sample card dimensions-->
				<div class='col s12 m10 offset-m1 l6 offset-l3'>
					<div class="card darken-1">
						<div class="card-content">
							<span class="card-title">Home!!!!</span>
							<p>I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
					</div>
				</div>
				<!-- End of card -->

			</div>
		</main>


	</body>
</html>
