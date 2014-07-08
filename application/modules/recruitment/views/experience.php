<form role="form" class="row clearfix" id="experience" onsubmit="return validate();" name="experience_form" action="<?php echo base_url("recruitment/experience/submit"); ?>" method="POST">
    <legend class="text-center">Experience</legend>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
            if($this->session->flashdata('other') == TRUE)
              echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
          ?>
      </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a role="button" href="<?php echo base_url("recruitment/sponsored"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
    <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
</div>
<div class="clearfix"></div>
<br>
<input id="proceed_val" type="hidden" value="1" name="proceed">
<div class="panel panel-default">
    <div class="panel-heading">Teaching</div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <th>
                    Name of Institution
                </th>
                <th>
                    Position
                </th>
                <th>
                    Date of Joining(DOJ)
                </th>
                <th>
                    Date of Leaving(DOL)
                </th>
                <th>
                    Years
                </th>
                <th>
                    Months
                </th>
            </tr>
        </thead>
        <tbody id="teaching">
        </tbody>
    </table>
    <button type="button" class="btn btn-default btn-sm" id="teaching-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
</div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Research</div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Name of Organization/Institution
                    </th>
                    <th>
                        Position
                    </th>
                    <th>
                        Date of Joining(DOJ)
                    </th>
                    <th>
                        Date of Leaving(DOL)
                    </th>
                    <th>
                        Years
                    </th>
                    <th>
                        Months
                    </th>
                </tr>
            </thead>
            <tbody id="organization">
            </tbody>
        </table>
        <button type="button" class="btn btn-default btn-sm" id="organization-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Industry</div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Name of Industry
                    </th>
                    <th>
                        Position
                    </th>
                    <th>
                        Date of Joining(DOJ)
                    </th>
                    <th>
                        Date of Leaving(DOL)
                    </th>
                    <th>
                        Years
                    </th>
                    <th>
                        Months
                    </th>
                </tr>
            </thead>
            <tbody id="industry">
            </tbody>
        </table>
        <button type="button" class="btn btn-default btn-sm" id="industry-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">No Objection Certificate</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="">Are you currently employed?</label>
            <select name="currently_employed" class="form-control input-sm" id="currently-employed">
                <option value="yes">Yes</option>
                <option value="no" selected>No</option>
            </select>
        </div>
        <div class="form-group hidden" id="noc_pdf-upload-div">
            Upload No Objection Certificate from current employer here:
            <input type="file" name="noc_pdf" class="form-control input-sm">
            <div id="noc_pdf-cert-input">

            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Total Experience</div>
    <div class="panel-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>
                        Experience
                    </th>
                    <th>
                        Years
                    </th>
                    <th>
                        Months
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>After award of Ph.D.</td>
                    <td>
                        <!-- Years -->
                        <input type="number" min="0" step="any"
                        <?php if($post=="AP7"): ?>
                            data-toggle="popover" data-placement="top" data-content="<p class='text-danger'>Post-phd Experience >= 1 years</p>"
                        <?php elseif($post=="AP8"): ?>
                            data-toggle="popover" data-placement="top" data-content="<p class='text-danger'>Post-Phd experience >= 3 years or Post-M.Tech experience >=6 years</p>"
                        <?php endif ?>
                        class="form-control input-sm" value="" name="after_phd_exp_years" required/>
                    </td>
                    <td>
                        <!-- Months -->
                        <input type="number" max="12" min="0" step="any" class="form-control input-sm" value="" name="after_phd_exp_months" required/>
                    </td>
                </tr>
                <tr>
                    <td>After M. Tech excluding PhD registration period.</td>
                    <td>
                        <input type="number" min="0"
                        <?php if($post=="AP8"): ?>
                            data-toggle="popover" data-placement="top" data-content="<p class='text-danger'>Post-Phd experience >= 3 years or Post-M.Tech experience >=6 years</p>"
                        <?php endif ?>
                        step="any" class="form-control input-sm" value="" name="after_mtech_exp_years" required/>
                    </td>
                    <td>
                        <input type="number" min="0" max="12" step="any" class="form-control input-sm" value="" name="after_mtech_exp_months" required/>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-1">
        <!-- TO BE ENABLED -->
        <!-- <button type="submit" id="save_details" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button> -->
    </div>
    <div class="col-md-4 col-md-offset-1">
        <button type="submit" class="btn btn-block btn-primary">Save &amp; Continue</button>
    </div>

</form>
<script>
    var post="<?php echo $post ?>";

    $(document).ready(function(){
        $("input").popover({
            trigger :"manual",
            html:true
        });
    });
<?php if(isset($saved_data)) { ?>
    $('form[name=experience_form] input[name=after_phd_exp_years]').val('<?php echo  $saved_data['after_phd_exp_years'];?>');
    $('form[name=experience_form] input[name=after_phd_exp_months]').val('<?php echo  $saved_data['after_phd_exp_months'];?>');
    $('form[name=experience_form] input[name=after_mtech_exp_years]').val('<?php echo $saved_data['after_mtech_exp_years']; ?>');
    $('form[name=experience_form] input[name=after_mtech_exp_months]').val('<?php echo $saved_data['after_mtech_exp_months']; ?>');
<?php } ?>

function validate(){
    if(post=="AP7")
    {
        var totalExperiencePhd = parseInt($("input[name='after_phd_exp_years']").val()) * 12 + parseInt($("input[name='after_phd_exp_months']").val());
        if(totalExperiencePhd >= 12)
            return true;
        $("input[name='after_phd_exp_years']").parent().addClass("has-error");
        $("input[name='after_phd_exp_years']").focus();
        $("input[name='after_phd_exp_years']").popover('show');
        return confirm("You are not qualified for the post you are applying. Do you still want to continue?");
    }
    else if(post=="AP8")
    {
        var totalExperiencePhd = parseInt($("input[name='after_phd_exp_years']").val()) * 12 +parseInt($("input[name='after_phd_exp_months']").val());
        var totalExperienceMtech = parseInt($("input[name='after_mtech_exp_years']").val()) * 12 +parseInt($("input[name='after_mtech_exp_months']").val());
        if(totalExperiencePhd >= 36 || totalExperienceMtech >= 72)
            return true;
        if(totalExperiencePhd < 36)
        {
            $("input[name='after_phd_exp_years']").parent().addClass("has-error");
            $("input[name='after_phd_exp_years']").focus();
            $("input[name='after_phd_exp_years']").popover('show');
        }
        else
        {
            $("input[name='after_mtech_exp_years']").parent().addClass("has-error");
            $("input[name='after_mtech_exp_years']").focus();
            $("input[name='after_mtech_exp_years']").popover('show');
        }
        return confirm("You are not qualified for the post you are applying. Do you still want to continue?");
    }
}

$('#currently-employed').on('change', function() {
    switch($(this).val()) {
        case 'yes':
            $('#noc_pdf-upload-div').removeClass('hidden');
            $('input[name="noc_pdf"]').prop('required', true);
            break;
        case 'no':
            $('#noc_pdf-upload-div').addClass('hidden');
            $('input[name="noc_pdf"]').prop('required', false);
            break;
    }
});
</script>