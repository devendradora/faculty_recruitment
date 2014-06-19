<form role="form" class="row clearfix" name="education_form" action="<?php echo base_url("recruitment/educational/submit"); ?>" method="POST">
    <legend class="text-center">Educational Information</legend>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a role="button" href="<?php echo base_url("recruitment/personal"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
        <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
    </div>

    <hr>
    <!-- Displaying any error messages -->
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
            if($this->session->flashdata('other') == TRUE)
              echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
          ?>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Schooling ( Class X / Class XII or equivalent)
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-sm-3">Certificate</th>
                            <th class="col-sm-3">Board/University</th>
                            <th class="col-sm-3">Year of Passing</th>
                            <th class="col-sm-3">Percentage/CGPA</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="schooling">

                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-default btn-sm" id="schooling-add-row">
                Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">First Degree</div>
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-sm-2">Degree</th>
                        <th class="col-sm-3">Branch</th>
                        <th class="col-sm-3">University/Institution</th>
                        <th class="col-sm-1">Year of Passing</th>
                        <th class="col-sm-1">Class/Division</th>
                        <th class="col-sm-1">Assessment</th>
                        <th class="col-sm-1">Score</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="undergraduation">

                </tbody>
            </table>
            </div>
            <button type="button" class="btn btn-default btn-sm" id="undergraduation-add-row">
                Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">Second Degree</div>
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-sm-1">Degree</th>
                        <th class="col-sm-3">Branch</th>
                        <th class="col-sm-3">Specialization</th>
                        <th class="col-sm-1">University/Institution</th>
                        <th class="col-sm-1">Year of Passing</th>
                        <th class="col-sm-1">Class/Division</th>
                        <th class="col-sm-1">Assessment</th>
                        <th class="col-sm-1">Score</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="masters">

                </tbody>
            </table>
            </div>
            <button type="button" class="btn btn-default btn-sm" id="masters-add-row">
                Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">Ph.D(Awarded)</div>
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Month &amp; Year of Award</th>
                        <th>University/Institution</th>
                        <th>Department</th>
                        <th>Title of Thesis</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="phd-awarded">

                </tbody>
            </table>
            </div>
            <button type="button" class="btn btn-default btn-sm" id="phd-awarded-add-row">
                Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">Ph.D(Pursuing)</div>
        <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date of Registration</th>
                        <th>University/Institution</th>
                        <th>Department</th>
                        <th class="col-sm-1">Synopsis Submitted</th>
                        <th class="col-sm-1">Thesis Submitted</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="phd-pursuing"></tbody>
            </table>
            </div>
            <button type="button" class="btn btn-default btn-sm" id="phd-pursuing-add-row">
                Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span>
            </button>
        </div>
    </div>


    <div class="panel">
        <div class="col-md-4 col-md-offset-1">
            <button type="submit" id="save_details" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <button type="submit" class="btn btn-block btn-primary">Save &amp; Continue</button>
        </div>
    </div>

</form>
<script type="text/javascript">

function undergraduation_add_row() {
    var tdsNames = new Array("undergraduation_degree[]", "undergraduation_subject[]", "undergraduation_boardu[]", "undergraduation_yopass[]", "undergraduation_division[]","undergraduation_percentage[]","undergraduation_score[]");
    var tdsTypes = new Array("select" ,"select","text" ,"datepicker_year_month" ,"text","number","number");
    var tdsRequired = new Array("","","","","","","");
    var noColumns=7;
    var options=new Array(
        [
            <?php
            $output = '';
            foreach ($fdegree[$dept][$post] as $key => $deg) {
                $output .= "'"."$deg"."', ";
            }
            echo rtrim($output, ", ");
            ?>
        ],
        [
            <?php
            $output = '';
            foreach ($fdbranch[$dept][$post] as $key => $bran) {
                $output .= "'$bran', ";
            }

            echo rtrim($output, ", ");
            ?>
        ],
        [],[],[],[
        'CGPA', 'Percentage'],[]
        );
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"undergraduation",options);
}
function masters_add_row() {
    var tdsNames = new Array("masters_degree[]","masters_subject[]","masters_specialization[]","masters_boardu[]", "masters_yopass[]","masters_division[]", "masters_percentage[]","masters_score[]");
    var tdsTypes = new Array("select" ,"select","select","text" ,"datepicker_year_month" ,"text" ,"number","number");
    var tdsRequired = new Array("","","","","","","");
    var noColumns=8;
    var options=new Array(
        [
            <?php
                $output = '';
                foreach ($sdegree[$dept][$post] as $key => $deg) {
                    $output .= "'"."$deg"."', ";
                }
                echo rtrim($output, ", ");
            ?>
        ],
        [
            <?php
                $output = '';
                foreach ($sdspecialization[$dept][$post] as $key => $spe) {
                    $output .= "'"."$spe"."', ";
                }
                echo rtrim($output, ", ");
            ?>
        ],
        [
            <?php
                $output = '';
                foreach ($sdareasofspecialization[$dept][$post] as $key => $spe) {
                    $output .= "'"."$spe"."', ";
                }
                echo rtrim($output, ", ");
            ?>
        ],
        [],[],[],[],[]
        );
    add(tdsNames,tdsTypes,tdsRequired,noColumns,"masters",options);
}
</script>