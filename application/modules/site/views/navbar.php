<div class="row">
<header id="header" class="navbar navbar-inverse">
  <div class="container">
  <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo (URL_HOME.'home');?>">Discussion Forum</a>
  </div>
        <?php
          if(isset($logged))
          { 
            echo '<nav class="navbar-collapse bs-navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">';
          if($logged)
          {
         echo '
          <li><a href="'.URL_HOME.'home'.'"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;'.$_SESSION['username'].'<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="'.URL_HOME.'profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
              <li><a href="'.URL_HOME.'settings"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
              <li><a href="'.URL_HOME.'logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
              <!-- <li><a href="#">Separated link</a></li> -->
            </ul>
          </li>';
          }
           else{
            echo '<li>
              <a href="'.URL_HOME.'login'.'">SignIn</a>
            </li>
            <li>
              <a href="'.URL_HOME.'register'.'">Register</a>  
           </li>';
           }
           echo '</ul>
        </nav><!-- /.navbar-collapse -->';
         }
        ?>   
    </div>
</header><!-- /header -->
</div>