<!-- PUBLIC MENU -->
<!-- this goes in the header section --> 

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

      <a class="navbar-brand" href="index.php">
        <img src="img/capoeira_stencil.jpg" alt="robot logo" style="width:60px;">
      </a>
        
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <!-- wrapper for collapsing nav bar -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
          
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo "$menuActive_index"; ?>" href="index.php">Article</a>
        </li>
      </ul> 
      
      <ul class="nav nav-button ml-auto">
        <li><button class="btn btn-danger" type="button" onclick="location.href='login.php'">Sign In</button></li>
      </ul>
          
      </div><!-- END: menu collapse wrapper-->
        
    </nav>           
        
<!-- the end of header is in the main html file -->
