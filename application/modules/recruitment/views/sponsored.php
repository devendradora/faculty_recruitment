<form role="form" class="row clearfix" name="sponsored_form" action="<?php echo base_url("recruitment/sponsored/submit"); ?>" method="POST">
    <legend class="text-center">Sponsored projects</legend>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
            if($this->session->flashdata('other') == TRUE)
              echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
          ?>
      </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a role="button" href="<?php echo base_url("recruitment/educational"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
        <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
    </div>
    <div class="clearfix"></div>
    <br>
    <input id="proceed_val" type="hidden" value="1" name="proceed">

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Agency</th>
                        <th>Co-Investigator (if any)</th>
                        <th>Title of the Project</th>
                        <th>Date of Sanction</th>
                        <th>Amount Sanctioned</th>
                        <th>Status (Completed / Ongoing)</th>
                    </tr>
                </thead>
                <tbody id="sponsored"></tbody>
            </table>
            </div>
            <button type="button" class="btn btn-default btn-sm" id="sponsored-projects-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </div>
    <div class="panel">
        <div class="col-md-4 col-md-offset-1">
            <!-- TO BE ENABLED -->
            <!-- <button type="submit" id="save_details" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button> -->
        </div>
        <div class="col-md-4 col-md-offset-1">
            <button type="submit" class="btn btn-block btn-primary">Save &amp; Continue</button>
        </div>
    </div>
</form>
