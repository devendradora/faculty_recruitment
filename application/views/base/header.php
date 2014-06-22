<?php if (!isset($current_section)) { $current_section = ''; } ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Faculty Recruitment">
<meta name="author" content="WSDC">
<head>
    <title><?php if(!empty($title)) echo $title; else echo 'Faculty Recruitment'; ?></title>
    <link href="<?php echo base_url()."assets/css/ubuntu.bootstrap.min.css" ?> " rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/introjs.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/offcanvas.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/docs.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/datepicker.css" ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/notify/alertify.core.css" ?>" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/notify/alertify.default.css" ?>"/>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50475262-1', 'nitw.ac.in');
  ga('send', 'pageview');

</script>
<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap-datepicker.js"); ?>"></script>

<script src="<?php echo base_url("assets/js/notify/alertify.min.js"); ?>"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="navbar navbar-inverse navbar-fixed-top hidden-print" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon"></span> FACULTY RECRUITMENT</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <?php if(isset($admin_logged) && $admin_logged==1) { ?>
                        <li class="tips <?php echo ($current_section === 'profile')?'active':''; ?>" title="Admin authentication">
                            <a href="<?php echo base_url('auth/'); ?>">
                                <span class="glyphicon glyphicon-user"> Authentication</span> <!-- <span class="hidden-sm">Authentication</span> -->
                            </a>
                        </li>
                        <?php } ?>
                        <li class="tips <?php echo ($current_section === 'application')?'active':''; ?>" title="Faculty recruitment application">
                            <a href="<?php echo base_url('recruitment/instructions'); ?>">
                                <span class="glyphicon glyphicon-list-alt"> Application</span><!--  <span class="hidden-sm">Application</span> -->
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="pops" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" data-content="" role="button" data-original-title="About">
                    <a href="#"></a>
                </li> -->
                        <li id="instructions-show" data-html="true" data-title="Instructions"
                            data-content="<ul>
                            <li>
                Candidates applying for AP6, AP7, or AP8 will be considered for that post in that department only. In case any person wishes to apply for more than one post in more than one department, multiple applications are possible.
            </li>
            <li>
                All candidates who are currently working in teaching institutions, industry and R&amp;D
                organizations have to upload No Objection Certificate from competent authority.
            </li>
            <li>
                Candidates who do not belong to the specializations, as popped up, need not apply.
            </li>

                            </ul>" data-placement="bottom">
                       <a href="#">
                        Instructions
                      </a>
                </li>
                <li class="" id="user-details" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" data-content="
                        <label> <?php echo $this->session->userdata('email'); ?></label> <br>
                        Username: <label><?php echo $this->session->userdata('username'); ?></label>  <br>
                        Faculty Id: <label><?php echo $this->session->userdata('user_id'); ?></label>  <br>
                        <?php date_default_timezone_set('Asia/Calcutta'); ?>
                        Last Login : <label><?php echo date('d-M-y H:i:s', $this->session->userdata('old_last_login')); ?></label>
                        " role="button" data-original-title="About">
                        <a href="#"><?php $user_data=$this->ion_auth->user()->row();echo $user_data->first_name.' '.$user_data->last_name; ?></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         Settings <span class="glyphicon glyphicon-cog"></span><!-- <b class="caret"></b> -->
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('auth/change_password') ?>"><span class="glyphicon glyphicon-barcode"></span> Change Password</a> </li>
                        <li><a href="<?php echo base_url('auth/logout') ?>"><span class="glyphicon glyphicon-off"></span> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="helper_modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="helper_modal_title">Helper Modal</h4>
            </div>
            <div class="modal-body">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->