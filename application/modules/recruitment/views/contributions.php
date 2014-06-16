<form role="form" class="row clearfix form" name="contributions_form" action="<?php echo base_url("recruitment/contributions/submit"); ?>" method="POST">
  <legend class="text-center">Contributions to Curricular/Co-curricular activities</legend>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php
      if($this->session->flashdata('other') == TRUE)
        echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
      ?>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a role="button" href="<?php echo base_url("recruitment/research"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
    <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
  </div>
  <div class="clearfix"></div>
  <br>
  <input id="proceed_val" type="hidden" value="1" name="proceed">
  <br>
  <!-- <h4><b>Faculty development programs attended</b></h4> -->
  <div class="panel panel-default">
    <div class="panel-heading">
      Faculty development programs attended
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              Organization
            </th>
            <th>
              Program
            </th>
            <th>
              Year
            </th>
            <th>
              Duration
            </th>
            <th>
              Sponsoring
            </th>
            <th>
              Agency
            </th>
          </tr>
        </thead>
        <tbody id="FDP-attended">
        </tbody>
      </table>
      <button type="button" class="btn btn-sm btn-default" id="FDP-attended-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Faculty development programs conducted as coordinator
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              Organization
            </th>
            <th>
              Program
            </th>
            <th>
              Year
            </th>
            <th>
              Duration
            </th>
            <th>
              Sponsoring
            </th>
            <th>
              Agency
            </th>
          </tr>
        </thead>
        <tbody id="FDP-conducted">
        </tbody>
      </table>
      <button type="button" class="btn btn-sm btn-default" id="FDP-conducted-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Faculty in FDP organized within Institution
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              Organization
            </th>
            <th>
              Program
            </th>
            <th>
              Year
            </th>
            <th>
              Duration
            </th>
            <th>
              Sponsoring
            </th>
            <th>
              Agency
            </th>
          </tr>
        </thead>
        <tbody id="faculty-FDP">
        </tbody>
      </table>
      <button type="button" class="btn btn-sm btn-default" id="faculty-FDP-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Invited faculty in FDP organized outside Institution
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              Organization
            </th>
            <th>
              Program
            </th>
            <th>
              Year
            </th>
            <th>
              Duration
            </th>
            <th>
              Sponsoring
            </th>
            <th>
              Agency
            </th>
          </tr>
        </thead>
        <tbody id="invited-faculty-FDP">
        </tbody>
      </table>
      <button type="button" class="btn btn-sm btn-default" id="invited-faculty-FDP-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
  </div>
  <div class="form-group">
    <label for="member" class="col-md-6">Member of BOS of universities *</label>
    <div class="col-md-6">
      <select name="BOS_member" id="member" class="form-control input-sm" required="required">
        <option value="0">No</option>
        <option value="1">Yes</option>
      </select>
    </div>
  </div>
  <div class="clearfix"></div>
  <br>
  <div class="panel panel-default">
    <div class="panel-heading">
      Awards / Medals awarded
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <!-- <th>
              #
            </th> -->
            <th>
              Name of the award / Medal
            </th>
            <th>
              Issuing Organization
            </th>
            <th>
              Date of Issue
            </th>
            <th></th>
          </tr>
        </thead>
        <tbody id="medals-awarded">
        </tbody>
      </table>
      <button type="button" class="btn btn-sm btn-default" id="medals-awarded-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
  </div>
  <div class="form-group">
    <label for="other_info" class="col-md-12">Any other Information </label>
    <div class="col-md-12">
      <textarea name="other_information" class="form-control" id="other_info" cols="30" rows="5"></textarea>
    </div>
  </div>
  <div class="col-md-4 col-md-offset-1">
    <button type="submit" id="save_details" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button>
  </div>
  <div class="col-md-4 col-md-offset-1">
    <button type="submit" class="btn btn-block btn-primary">Save &amp; Continue</button>
  </div>
</form>
<script type="text/javascript">
  <?php if(isset($saved_data)) { ?>
  document.contributions_form.BOS_member.value='<?php echo $saved_data['BOS_member'] ?>';
  <?php } ?>
</script>