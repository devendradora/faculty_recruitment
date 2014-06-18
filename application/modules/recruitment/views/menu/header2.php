<div class="row" style="">
  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 hidden-print" id="sidebar" role="navigation">
    <div class="bs-sidebar hidden-print affix" role="complementary">
     <ul class="nav bs-sidenav">
       <li class="<?php echo (isset($current_page) && $current_page === "instructions")?"active":""; ?>">
         <a href="<?php echo base_url("recruitment/home/instructions"); ?>">
          Instructions
        </a>
      </li>

      <li class="<?php echo (isset($current_page) && $current_page === "applypost")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/home/applypost"); ?>">
          <?php if (isset($completed['application']) && $completed['application'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Application
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "personal")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/home/personal"); ?>">
          <?php if (isset($completed['personal']) && $completed['personal'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Personal Information
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "educational")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/home/educational"); ?>">
          <?php if (isset($completed['educational']) && $completed['educational'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Educational Information
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "experience")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/home/experience"); ?>">
          <?php if (isset($completed['experience']) && $completed['experience'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Work Experience
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "research")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/home/research"); ?>">
          <?php if (isset($completed['research']) && $completed['research'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Publications
        </a>
      </li>
      <li class="<?php echo (isset($current_page) && $current_page === "contributions")?"active":""; ?>">
        <a href="<?php echo base_url("recruitment/home/contributions"); ?>">
          <?php if (isset($completed['activities']) && $completed['activities'] === true) { ?>
          <span class="pull-right glyphicon glyphicon-ok" style="color:green"> </span>
          <?php } ?>
          Co-Curricular activities
        </a>
      </li>
    </ul>
  </div><!--/span-->
</div>
<div class="clearfix visible-xs hidden-print"></div>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
  <br>