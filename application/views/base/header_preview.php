<?php if (!isset($current_section)) { $current_section = ''; } ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Faculty Recruitment">
<meta name="author" content="WSDC">
<head>
    <title><?php if(!empty($title)) echo $title; else echo 'Faculty Recruitment'; ?></title>
    <link href="<?php echo base_url()."assets/css/ubuntu.bootstrap.min.css" ?> " rel="stylesheet" media="all">
    <!-- <link href="<?php //echo base_url()."assets/css/introjs.min.css" ?>" rel="stylesheet"> -->
    <link href="<?php echo base_url()."assets/css/offcanvas.css" ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url()."assets/css/datepicker.css" ?>" rel="stylesheet">
    <!-- Notify CSS -->
    <!-- <link href="<?php //echo base_url()."assets/css/bootstrap-notify.css" ?>" rel="stylesheet"> -->

    <!-- Custom Styles -->
    <!-- <link href="<?php //echo base_url()."assets/css/alert-bangtidy.css" ?>" rel="stylesheet"> -->
    <!-- <link href="<?php //echo base_url()."assets/css/alert-blackgloss.css" ?>" rel="stylesheet"> -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50475262-1', 'nitw.ac.in');
  ga('send', 'pageview');

</script>
<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>

</head>
<body>
    <div class="container-fluid">