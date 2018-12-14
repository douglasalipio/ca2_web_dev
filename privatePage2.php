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

$menuActive_privatepage2 = "active";
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
        
<!-- MAIN CONTENT ------------------------------------------>
	<main class="margin-top-6">
	<div class="container">
		<!-- .................................................... -->
		<section id="feature">

			<div class="row">
				<div class="col-sm-12">

					<h3>Check out those videos!</h3>
					<br>

				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">

					<div class="clear"></div>

					<div>
						Orci porta non pulvinar neque laoreet suspendisse. Fames ac turpis
						egestas maecenas pharetra convallis posuere morbi leo. Venenatis
						tellus in metus vulputate eu scelerisque felis imperdiet. <br> <br>
					</div>

				</div>
			</div>

			<div class="container-fluid pb-video-container">
				<div class="col-md-10 offset-md-1">
					<h3 class="text-xs-center">Sample Video Gallery</h3>
					<div class="row pb-row">
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/pzAJKaDoew8" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Claydee
								- Alena</label>
						</div>
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/6H0D8VaIli0" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Best
								Capoeira Brazil</label>
						</div>
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame " width="100%" height="230"
								src="https://www.youtube.com/embed/Bq-6gXrZ84s" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">#ABC2015
								CM Barrãozinho Axé Capoeira</label>
						</div>
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/aTh9OScnSLc" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Filme:
								Capoeira, o valor de uma amizade.</label>
						</div>
					</div>
					<div class="row pb-row">
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/RthNTSgjql8" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Concurso
								Rei da Capoeira de Coburg 2011</label>
						</div>
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/068SGqHn2aw" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Roda de
								Capoeira na Praia - Boa Vontade</label>
						</div>
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/HfuD3Js_suI" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Beautiful
								Girls in Capoeira!</label>
						</div>
						<div class="col-md-3 pb-video">
							<iframe class="pb-video-frame" width="100%" height="230"
								src="https://www.youtube.com/embed/xgrEIu8BERM" frameborder="0"
								allowfullscreen></iframe>
							<label class="form-control label-warning text-xs-center">Best
								CAPOEIRA flow</label>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- .................................................... -->
	</div>
	<!-- END container--> </main>
	<!-- FOOTER ------------------------------------------------>
	<footer>
    <?php include (VIEW_PATH . "/private/footer.php"); ?>
</footer>

	<!-- all content above this line -->    
<?php include (VIEW_PATH . "/foot.php"); ?>
        
</body>
</html>


