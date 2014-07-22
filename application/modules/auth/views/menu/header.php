<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Authentication of credentials">
<meta name="author" content="WSDC">
<title>Login | Faculty recruitment Portal</title>

<head>
    <title>Faculty Login</title>
    <link href="<?php echo base_url(); ?>assets/css/0.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/signin.css" rel="stylesheet">
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

    <div class="container">

        <div class="row" id="nitw-row">
            <div class="col-sm-2">
                <div class="pull-right" id="nitw-logo">
                    <a href="http://www.nitw.ac.in/">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo_nitw.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="pull-left">
                    <h3>NATIONAL INSTITUTE OF TECHNOLOGY,</h3>
                    <font size="5px">WARANGAL </font>
                    <h4 align="center">An Institute of National Importance</h4>
                </div>
            </div>
        </div>

        <div class="row" id="details-row">
            <!-- the left most column over here -->

            <div class="col-sm-7" id="instructions-column">
                <div id="homepage-instructions">
                    <blockquote>
                        <h4>Please read the following instruction before you proceed with the application</h4>
                        <br>
                        <ul class="list-unstyled">
                            <li>
                                To fill the application form you need to create a account on this site first.
                            </li>
                            <li>
                                You will require a working email-id to fill the application form.
                            </li>
                            <li>
                                Before filling up the application please ensure that you have the following documents ready.
                                <ul>
                                    <li>Passport size photograph</li>
                                    <li>All educational certificates</li>
                                    <li>In case of publications the first page of each publication</li>
                                    <li>A No-Objection certificate if you are currently employed</li>
                                    <li>Two Reference addressess</li>
                                </ul>
                            </li>
                            <li>
                                Payment for the application can be done though DD or a direct bank transfer.
                            </li>
                            <li>
                                Further details are provided once you login.
                            </li>
                            <li>
                                Please use modern browsers like <a href="http://www.mozilla.org/en-US/firefox/new/">Firefox 4.0 or newer</a>, <a href="https://www.google.com/intl/en_in/chrome/browser/">Google Chrome</a>, Internet Explorer <b>8</b> or newer and <a href="https://www.apple.com/in/safari/">Safari</a>. We cannot guarantee a error free experience on other browsers
                            </li>
                            <li>
                                In case of any issue or support please send a mail to <a href="mailto:wsdc.nitw@gmail.com">wsdc.nitw@gmail.com</a>
                            </li>
                        </ul>
                    </blockquote>
                </div>
            </div>

            <!-- the center column -->
            <!--
            <div class="hidden-xs col-sm-6">
                <div id="center">
                    <div id="main_name">
                        <a href="http://www.nitw.ac.in/">
                            <img src="<?php echo base_url(); ?>assets/images/logo_nitw.png" alt="">
                        </a>
                    </div>
                    <div id="full_form">
                        NATIONAL INSTITUTE OF TECHNOLOGY WARANGAL
                        <br>
                        <br>An Institute of National Importance
                    </div>
                </div>
            </div>
            -->
            <!-- In case of mobile phones -->
            <!--
            <div class="visible-xs">
                <div>
                    <div id="main_name">
                        <a href="http://www.nitw.ac.in/">
                            <img src="<?php echo base_url(); ?>assets/images/logo_nitw.png" alt="">
                        </a>
                    </div>
                    <div id="full_form">
                        NATIONAL INSTITUTE OF TECHNOLOGY WARANGAL
                        <br>
                        <br>An Institute of National Importance
                    </div>
                </div>
            </div>
            -->


            <!-- No idea why this clearfix is here -->
            <div class="clearfix visible-xs"></div>

            <!-- The rightmost column is here -->
            <div class="col-xs-12 col-sm-5" id="login-column">
