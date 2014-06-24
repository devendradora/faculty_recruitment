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
                        <th class="col-sm-1">Degree</th>
                        <th class="col-sm-3">Branch</th>
                        <th class="col-sm-3">University/Institution</th>
                        <th class="col-sm-1">Year of Passing</th>
                        <th class="col-sm-1">Class/Division</th>
                        <th class="col-sm-1">Assessment</th>
                        <th class="col-sm-2 score" >Score</th>
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
                        <th class="col-sm-3">Branch / Specialization</th>
                        <!-- <th class="col-sm-3">Specialization</th> -->
                        <th class="col-sm-2">University/Institution</th>
                        <th class="col-sm-1">Year of Passing</th>
                        <th class="col-sm-1">Class/Division</th>
                        <th class="col-sm-1">Assessment</th>
                        <th class="col-sm-2 score" >Score</th>
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
    <!-- To be enabled later -->
    <div class="col-md-4 col-md-offset-1">
        <!-- <button type="submit" id="save_details" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button> -->
    </div>
    <div class="col-md-4 col-md-offset-1">
        <button type="submit" class="btn btn-block btn-primary">Save &amp; Continue</button>
    </div>
</div>

</form>
<script type="text/javascript">

    function undergraduation_add_row() {
        var tdsNames = new Array("undergraduation_degree[]", "undergraduation_subject[]", "undergraduation_boardu[]", "undergraduation_yopass[]", "undergraduation_division[]","undergraduation_assessment[]","undergraduation_score[]");
        var tdsTypes = new Array("select" ,"select","text" ,"datepicker_year_month" ,"text","select","number");
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
        var tdsNames = new Array("masters_degree[]","masters_subject[]","masters_boardu[]", "masters_yopass[]","masters_division[]", "masters_assessment[]","masters_score[]");
        var tdsTypes = new Array("select" ,"select","text" ,"datepicker_year_month" ,"text" ,"select","number");
        var tdsRequired = new Array("","","","","","");
        var noColumns=7;
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
            [],[],[],['CGPA', 'Percentage'],[]
            );
        add(tdsNames,tdsTypes,tdsRequired,noColumns,"masters",options);
    }
    var dept="<?php echo $dept ?>";
    $("form[name='education_form']").submit(function(){
    //First Degree Direct
    // candidates who have done integrated 5 year M Tech in the same branch.
    var FDD=false;

    if($("#undergraduation > tr > td:nth-child(1) >select").val()=="MTech")
    {
        FDD=true;
    }
    //First Degree Direct
    // candidates who have done direct Ph.D
    var SDD=false;

    if($("#masters > tr > td:nth-child(1) >select").val()=="Ph.D")
    {
        SDD=true;
    }
    //Phd status
    var count=$("#phd-awarded > tr").length;
    var PHS=count;
    if(count>=1)
        PHS=2;
    else if($("#phd-pursuing > tr >td:nth-child(5) >select").val()=="Yes")
        PHS=1;

    console.log('FDD is '+FDD);
    console.log('SDD is '+SDD);

    console.log('PHS is '+PHS);
    var FDAssessment=$("#undergraduation > tr > td:nth-child(6) >select").val();
    var SDAssessment=$("#masters > tr > td:nth-child(7) >select").val();
    var FDP=0,FDG=0,SDP=0,SDG=0;
    if(FDAssessment=="Percentage")
        FDP=parseInt($("#undergraduation > tr > td:nth-child(7) >input").val()); //(First Degree Percentage)
    else
        FDG= parseInt($("#undergraduation > tr > td:nth-child(7) >input").val());//(First Degree CGPA)
    if(SDAssessment=="Percentage")
        SDP =parseInt($("#undergraduation > tr > td:nth-child(8) >input").val());//(Second Degree Percentage)
    else
        SDG =parseInt($("#undergraduation > tr > td:nth-child(8) >input").val());//(Second Degree CGPA)

    var FDQ=false; //(First Degree Qualified)
    var SDQ=false; //(Second Degree Qualified)
    if(FDAssessment=="Percentage")
    {
        console.log('FDP is '+FDP);
    }
    else
        console.log('FDG is '+FDG);
    if(SDAssessment=="Percentage")
        console.log('SDP is '+SDP);
    else
        console.log('SDG is '+SDG);
    //Dcode array
    var dcode=['MA', 'ME', 'MM', 'PH'];
    FDQ=(FDD ||(jQuery.inArray( dept, dcode )!=-1) );
    SDQ=SDD;
    
    var cat="<?php echo $category ?>";
    var post="<?php echo $post ?>";
    if(cat==2 || cat==3)
    {
        FDQ = FDQ || (FDP >=55 || FDG >= 6.0);
        SDQ = SDQ || (SDP >=55 || SDG >= 6.0);
    }
    else
    {
        FDQ = FDQ || (FDP >=60 || FDG >= 6.5);
        SDQ = SDQ || (SDP >=60 || SDG >= 6.5);
    }
    console.log('FDQ is '+FDQ);
    console.log('SDQ is '+SDQ);
    var EQS=false;

    if(post=="AP6")
    {
        EQS = FDQ && SDQ && (PHS > 0);
    }
    else if(post=="AP7" || post=="AP8")
    {
        EQS = FDQ && SDQ && (PHS > 1);
    }
    console.log('FDQ is '+FDQ);
    console.log('SDQ is '+SDQ);
    console.log('EQS is '+EQS);
    if(EQS==false)
    {
        return confirm("You seem to be not satisfying the educational qualification for the post. Do you want to continue?");
    }
    return true;
});
</script>