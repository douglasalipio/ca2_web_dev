<!DOCTYPE html>

<?php
    $menuActive_index = "active"; // CHANGE
    define("MY_INC_CODE", 888);
    define("APPLICATION_PATH", "app");
    define("VIEW_PATH", APPLICATION_PATH . "/view");
    include (APPLICATION_PATH . "/inc/config.inc.php");
?>

<html lang="en">
    
<head>
    
<?php include (VIEW_PATH . "/head.php"); ?>
    
<!-- needed for the header image --> 
<style> 
html,
body,
header {
    height: 100%;
}
</style>
    
</head>

<body class="intro">
        
<!-- HEADER ------------------------------------------------>
        
<?php 
    
    echo '<header>';
    include (VIEW_PATH . "/public/navigation.php"); 
    include (VIEW_PATH . "/public/bossImage.php"); 
    echo "<header>";
    
    include (APPLICATION_PATH . "/inc/db.inc.php");   
?>
        
<!-- MAIN CONTENT ------------------------------------------>
<main class="margin-top-6">  
<div class="container">

<!-- .................................................... --> 
<div class="row">
<div class="col-sm-12">
<?php
    if( $_GET != NULL && !empty($_GET['login']))
    {
        $loginStatus = $_GET['login'];
        if($loginStatus == 'nouser')
            {echo '<p class="text-danger">Invalid user or password</p>';}
        elseif($loginStatus == 'dbfail')
            {echo '<p class="text-danger">Database connection issue</p>';}
        elseif($loginStatus == 'empty')
            {echo '<p class="text-info">Either username or password empty</p>';} 
        else
            {echo '';}
    }
?>
</div><!-- column -->
</div><!-- row -->
    
<!-- .................................................... -->    
<section id="theTop">
    
      <h2>HOME</h2>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/capoeira1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/capoeira_stencil.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/capoeira3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <!-- ROW 1 -->
      <div class="row">
      <div class="col-sm-12">

        

      </div>
        </div>
          <div class="row margin-top-3">
            <div class="col-sm-4">
                <h4>Contrary to popular belief, Lorem Ipsum is not simply?</h4>
                <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
            <div class="col-sm-4">
                <h4>Pellentesque adipiscing commodo elit at?</h4>
                <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
            </div>
            <div class="col-sm-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Gjf7D0Qj8C8" allowfullscreen></iframe>
              </div>
          </div>
      </div>                      
</section>      

<form action="submitSubscription.php?" method="post">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>Lorem ipsum text about why you should subscribe to our newsletter blabla. Lorem ipsum text about why you should subscribe to our newsletter blabla.</p>
  </div>

  <div class="container" style="background-color:white">
    <input id="name" type="text" placeholder="Name" name="name" required>
    <input id="email" type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>
</div> <!-- END container-->    
</main>

<!-- FOOTER ------------------------------------------------>
<footer>
    <?php include (VIEW_PATH . "/public/footer.php"); ?>
</footer>
        
<!-- all content above this line -->    
<?php include (VIEW_PATH . "/foot.php"); ?>
        
</body>
</html>

