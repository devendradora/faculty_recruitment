<div class="row" style="">

<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left cbp-spmenu-open hidden-print" id="cbp-spmenu-s1" role="navigation">

    <div class="bs-sidebar hidden-print" role="complementary">
     <ul class="nav bs-sidenav">
       <li class="text-center"><strong> APPLICATION FORM &nbsp;</strong><span class="glyphicon glyphicon-align-justify"></span></li>
       <li class="<?php echo (isset($current_page) && $current_page === "instructions")?"active":""; ?>">
         <a href="<?php echo base_url("recruitment/instructions"); ?>">
           <?php if (isset($filled['instructions']) && $filled['instructions'] === true) { ?>
           <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
           <?php } ?>
           Instructions
         </a>
       </li>

       <li class="<?php echo (isset($current_page) && $current_page === "applypost")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/applypost"); ?>">
          <?php if (isset($filled['applypost']) && $filled['applypost'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Application
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "personal")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/personal"); ?>">
          <?php if (isset($filled['personal']) && $filled['personal'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Personal Information
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "educational")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/educational"); ?>">
          <?php if (isset($filled['educational']) && $filled['educational'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Educational Information
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "experience")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/experience"); ?>">
          <?php if (isset($filled['experience']) && $filled['experience'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Work Experience
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "sponsored")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/sponsored"); ?>">
          <?php if (isset($filled['sponsored']) && $filled['sponsored'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Sponsored Projects
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "research")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/research"); ?>">
          <?php if (isset($filled['research']) && $filled['research'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Publications
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "contributions")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/contributions"); ?>">
          <?php if (isset($filled['contributions']) && $filled['contributions'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Co-Curricular activities
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "fee_details")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/fee"); ?>">
          <?php if (isset($filled['fee_details']) && $filled['fee_details'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Fee details
        </a>
      </li>

       <li class="<?php echo (isset($current_page) && $current_page === "submission")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/submission"); ?>">
          <?php if (isset($filled['submission']) && $filled['submission'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
         Submission
        </a>
      </li>
    </ul>
  </div><!--/span-->

</div>
<!-- <div class="clearfix visible-xs hidden-print"></div> -->
<div class="col-md-10 cbp-spmenu-push cbp-spmenu-push-toright" id="main-content">
  <br>