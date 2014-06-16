<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Discussion Forum">
<meta name="author" content="Abhishek">
<head>
    <title><?php if(!empty($title)) echo $title; else echo 'Forum'; ?></title>
    <link href="<?php echo CSS."bootstrap.min.css" ?> " rel="stylesheet">
    <link href="<?php echo CSS."introjs.min.css" ?> " rel="stylesheet">
    <link href="<?php echo (URL.'assets/custom-css/signin.css');?>" rel="stylesheet">
    <!-- <link href="<?php //echo CSS."offcanvas.css" ?> " rel="stylesheet"> -->
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo (URL_HOME.'home');?>"><span class="glyphicon glyphicon-user"></span>&nbsp;Discussion Forum</a>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if ($this->ion_auth->logged_in()) { ?>
                        
                        <li>
                            <a href="#" class="navbar-link">
                                <?php 
                                $first_name=$this->ion_auth->user()->row()->first_name;
                                echo 'Signed in as '.$first_name;
                                ?>
                            </a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
            <!-- <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li> -->
            <li class="divider"></li>
            <li><a href="<?php echo base_url().'auth/logout';?>">Logout</a></li>
        </ul>
    </li>
    
    <?php } else { ?>
    <li><a  class="navbar-link" href="<?php echo base_url().'auth/login';?>" >SignIn</a></li>
    <li><a  class="navbar-link" href="<?php echo URL_HOME.'register';?>">Register</a></li>
    <?php } ?>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</div>
</div>
</div>