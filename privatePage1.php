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

					<p>
						<b>WEBSITE REPORT</b>
					</p>
					<p>
						<b>DOUGLAS MESQUITA - 2018274</b>
					</p>
					<p>
						<b>Website design material (web technologies used)?</b>
					</p>

					<p>I've used serveral technology for web development such as Ajax,
						Javascript, Sqlite, Bootstrap 4, PHP.</p>

					<ul>
						<li>Sqlite - responsable to store the data about User and
							Subscription.</li>
						<li>Ajax - was used to load a form component without refresh the
							whole view.</li>
						<li>Javascript - support Ajax toload the form on a database view.</li>
						<li>PHP - It was used for example to include fragments on a
							webpage, communication between the database with the view.</li>
						<li>Bootstrap - ensure the website is responsive.</li>
					</ul>

					<p>
						<b>Explanation of technology used and features of the site</b>
					</p>

					<p>The website is structure by a main menu with three tabs such as
						report, detail and database. On database view, you can see a form
						that show all the users stored. Also, this view is responsable to
						edit, update and delete a user. On detail view, It shows a video
						gallery (Bootstrap component)about Capoeira. Finally, the article
						(home) view show a subscription, an text relate to Capoeira, and a
						image gallery.</p>

					<p>
						<b>Browsers tested with</b>
					</p>

					<p>Chorme, Firefox and IE 10</p>

					<p>
						<b>Future features</b>
					</p>

					<p>I would like to implement a proper MVP pattern to separate the
						project in layers such as model, view, and presenter. Another
						interesting thing is developing unit test, integration test and
						interface test to ensure the quality of the project. At least,
						remove the bootstrap and use a framework for instance, Angular.</p>

					<p>
						<b>Reflection - what was learnt and what would you do differently</b>
					</p>

					<p>A lot of good stuff was learned. Php, Javascript, HTML, Ajax,
						Bootstrap. As I said above, I'd like to use Angulas instead of
						Bootstrap. Angular has a friendly architecture which is lead by
						Angular team, and Google. It's to easy to reuse code. Another this
						that I would do differently is remove the SQLite from the project
						and use a robust database like PostgreSQL.</p>

					<p>
						<b>Reflection - what parts you found most difficult and would like
							to be able to do better</b>
					</p>

					<p>For me, the front end develop is very complite. Usually,
						front-end develop should have knowledge about UI/UX which I don't
						know much about UI. It's has a lot of trouble like release
						differents build for each browser, most of the IDE doesn't support
						feature like rename a variable and the IDE refactory that change
						in the whole project. I'd like to use a proper IDE (PHP Storm) and
						make the website more professional</p>

					<a href="https://github.com/douglasalipio/ca2_web_dev">project on
						Github </a>

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


