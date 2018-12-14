<!DOCTYPE html>

<?php

// PRIVATE PAGE

// needs to be at the start of every page where you will use $_SESSION
session_start();

if (! isset($_SESSION["loggedIn"]) && ! $_SESSION["loggedIn"] == 1) {
    // throw you off the page if not logged in
    // just in case someone trys the page with a direct URL
    header("Location:index.php");
}

$menuActive_privatepage1 = "active";
define("MY_INC_CODE", 888);
define("APPLICATION_PATH", "app");
define("VIEW_PATH", APPLICATION_PATH . "/view");
define("MODEL_PATH", APPLICATION_PATH . "/model");
include (APPLICATION_PATH . "/inc/config.inc.php");
?>

<html lang="en">

<head>
    
<?php include (VIEW_PATH . "/head.php"); ?>
    
</head>

<body>

	<!-- HEADER ------------------------------------------------>
        
<?php
echo "<header>";
include (VIEW_PATH . "/private/navigation.php");
echo "</header>";

include (APPLICATION_PATH . "/inc/db.inc.php");
?>

	<main class="margin-top-6">
	<div class="container">
		<section id="feature">
			<div class="row">
				<div class="col-sm-12">

					<p>This site is part of a basic introduction to web applications.
						The technologies of HTML, CSS, JavaScript, SQLite and PHP.</p>

					<p>The code shown here is not intended for production deployment
						it. It's intent is to explain the principles of the technologies.
						The examples evolve towards production deployable caode as the
						cource evolves and takes into account best practices, team
						development, continious build, loosly coupled components for
						maintainability and security issues.</p>

				</div>
			</div>
		</section>
	</div>
	</main>
	<footer>
        <?php include (VIEW_PATH . "/private/footer.php"); ?>
    	<?php include (VIEW_PATH . "/foot.php"); ?>
	</footer>

</body>
</html>


