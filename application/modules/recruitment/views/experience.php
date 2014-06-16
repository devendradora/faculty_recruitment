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
                    Years and Months
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
                        Years and Months
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
                        Years and Months
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
    <div class="panel-heading">Consolidated Non-overlapping Experience</div>
    <div class="panel-body">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>
                        Total experience
                    </th>
                    <th>
                        Years and Months
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>After award of Ph.D.</td>
                    <td>
                        <input type="number" step="any"
                        <?php if($post=="AP7"): ?>
                            min=1 data-toggle="popover" data-placement="top" data-content="<p class='text-danger'>Post-phd Experience >= 1.0 and Post-M.Tech experience >= 0 </p>"
                        <?php elseif($post=="AP8"): ?>
                            data-toggle="popover" data-placement="top" data-content="<p class='text-danger'>Post-Phd experience >= 3.0 or Post-M.Tech experience >= 6.0</p>"
                        <?php endif ?>
                        class="form-control input-sm" value="" name="after_phd_exp" required/>
                    </td>
                </tr>
                <tr>
                    <td>After M. Tech excluding PhD registration period.</td>
                    <td>
                        <input type="number"
                        <?php if($post=="AP8"): ?>
                            data-toggle="popover" data-placement="top" data-content="<p class='text-danger'>Post-Phd experience >= 3.0 or Post-M.Tech experience >=6.0</p>"
                        <?php endif ?>
                        step="any" class="form-control input-sm" value="" name="after_mtech_exp" required/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-1">
        <button type="submit" id="save_details" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button>
    </div>
    <div class="col-md-4 col-md-offset-1">
        <button type="submit" class="btn btn-block btn-primary">Save &amp; Continue</button>
    </div>

</form>
<script>
    var post="<?php echo $post ?>";
    var minimumexp1=0;
    $(document).ready(function(){
        $("input").popover({
            trigger :"manual",
            html:true
        });

    });
<?php if(isset($saved_data)) { ?>
    document.experience_form.after_phd_exp.value='<?php echo  $saved_data['after_phd_exp'];?>';
    document.experience_form.after_mtech_exp.value='<?php echo $saved_data['after_mtech_exp']; ?>';
    <?php } ?>
    function validate(){
        console.log('called');

        if(post=="AP7")
        {
            if($("input[name='after_phd_exp']").val() >=minimumexp1 && $("input[name='after_mtech_exp']").val()>=0)
                return true;
            $("input[name='after_phd_exp']").parent().addClass("has-error");
            $("input[name='after_phd_exp']").focus();
            $("input[name='after_phd_exp']").popover('show');
            return false;
        }
        else if(post=="AP8")
        {
            if($("input[name='after_phd_exp']").val()>=3.0||$("input[name='after_mtech_exp']").val() >=6.0)
                return true;
            if($("input[name='after_phd_exp']").val()<3.0)
            {
                $("input[name='after_phd_exp']").parent().addClass("has-error");
                $("input[name='after_phd_exp']").focus();
                $("input[name='after_phd_exp']").popover('show');
            }
            else
            {
                $("input[name='after_mtech_exp']").parent().addClass("has-error");
                $("input[name='after_mtech_exp']").focus();
                $("input[name='after_mtech_exp']").popover('show');
            }
            return false;
        }
    }
</script>