<!-- <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    For each publication, attach a scanned pdf copy of the header page of the publication as an attachment.
</div> -->
<form role="form" class="row clearfix" name="research_form" onsubmit="return validate();" enctype="multipart/form-data" action="<?php echo base_url("recruitment/research/submit"); ?>" method="POST">
    <legend class="text-center">Publications</legend>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
            if($this->session->flashdata('other') == TRUE)
              echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
          ?>
        </div>
    </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

    <a role="button" class="btn btn-warning btn-sm" href="<?php echo base_url("recruitment/experience"); ?>">
    <span class="glyphicon glyphicon-chevron-left"></span> Previous
    </a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>For each publication, attach a scanned pdf copy of the header page of the publication as an attachment.
            The size of the pdf attachment should not exceed <b>1 Mb </b></p>
        </div>

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p> <a href="<?php echo base_url("assets/documents/sci_citation_index.pdf"); ?>" target="_blank">For SCI Journal Number refer to this PDF</a></p>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

    <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
    </div>
</div>
<div class="clearfix"></div>
<br>
<input id="proceed_val" type="hidden" value="1" name="proceed">
<h4><b>Publications from out of PhD work</b></h4>
<div class="panel panel-default">
    <div class="panel-heading">
        SCI journal publications
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #Co-authors
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Name Of Journal
                    </th>

                    <th>Vol &amp; Issue</th>
                    <th>Year of publication</th>
                    <th>
                        #Citations
                    </th>
                    <th>
                        Impact Factor
                    </th>
                    <th>
                        SCI Journal Sl No
                    </th>
                    <th>Upload pdf</th>
                    <th></th>
                </tr>

            </thead>
            <tbody id="phd-SCI-journal">
            </tbody>
        </table>
        <button type="button" class="btn btn-sm btn-default" id="phd-SCI-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        Journal publications in journals with impact factor(other than listed above)
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #Co-authors
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Name Of Journal
                    </th>

                    <th>Vol &amp; Issue</th>
                    <th>Year of publication</th>
                    <th>
                        #Citations
                    </th>
                    <th>
                        Impact Factor
                    </th>
                    <th>Upload pdf</th>
                    <th></th>
                </tr>

            </thead>
            <tbody id="phd-non-SCI-journal">
            </tbody>
        </table>
        <button type="button" class="btn btn-sm btn-default" id="phd-non-SCI-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
    </div>
</div>


<hr>
<h4 id="sci-publications-outside-phd"><b>Publications outside Phd work</b></h4>
    <div class="panel panel-default">
        <div class="panel-heading">
            SCI journal publications
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #Co-authors
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Name Of Journal
                        </th>
                        <th>Vol &amp; Issue</th>
                        <th>Year of publication</th>
                        <th>
                            #Citations
                        </th>
                        <th>
                            Impact Factor
                        </th>
                        <th>
                            SCI Journal Sl No
                        </th>
                        <th>Upload pdf</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody id="phd-outside-SCI-journal">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="phd-outside-SCI-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">Journal publications in journals with impact factor(other than listed above)</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #Co-authors
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Name Of Journal
                        </th>
                        <th>Vol &amp; Issue</th>
                        <th>Year of publication</th>
                        <th>
                            #Citations
                        </th>
                        <th>
                            Impact Factor
                        </th>
                        <th>Upload pdf</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody id="phd-outside-non-SCI-journal">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="phd-outside-non-SCI-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">Peer reviewed journals(Hard Copy)</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #Co-authors
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Name Of Journal
                        </th>
                        <th>Vol &amp; Issue</th>
                        <th>Year of publication</th>
                        <th>
                            #Citations
                        </th>
                        <th>
                            Impact Factor
                        </th>
                        <th>Upload pdf</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody id="hard-copy-peer-journal">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="hard-copy-peer-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Peer reviewed journals(Soft Copy)</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #Co-authors
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Name Of Journal
                        </th>
                        <th>Vol &amp; Issue</th>
                        <th>Year of publication</th>
                        <th>
                            #Citations
                        </th>
                        <th>
                            Impact Factor
                        </th>
                        <th>Upload pdf</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody id="soft-copy-peer-journal">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="soft-copy-peer-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Conference papers published in the form of proceedings</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #Co-authors
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Name Of Paper
                        </th>
                        <th>Vol &amp; Issue</th>
                        <th>Year of publication</th>
                        <th>
                            #Citations
                        </th>
                        <th>
                            Impact Factor
                        </th>
                        <th>Upload pdf</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody id="conference-journal">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="conference-journal-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </div>

<h4><b>Books / Chapters</b></h4>
    <div class="panel panel-default">
        <div class="panel-heading">Books/Chapter writing</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            #Co-authors
                        </th>
                        <th>
                            B/C
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Publisher
                        </th>
                        <th>
                            Year of publication
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="book">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="book-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </div>

<h4><b>Patents</b></h4>

    <div class="panel panel-default">
        <div class="panel-heading">Patents awarded</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Individual group/Organization
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Year of award
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="patents">
                </tbody>
            </table>
            <button type="button" class="btn btn-sm btn-default" id="patents-add-row">Add&nbsp; &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
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
<script type="text/javascript">
    var post="<?php echo $post ?>";
function validate(){
    var min=0;

    if(post=="AP8" || post=="AP7")
    {
        if(post=="AP7")
            min=1;
        else
            min=2;
        if($("#phd-outside-SCI-journal").find("tr").length<min) //not qualified condition
        {
            // var msg='<div class="alert alert-warning">'+
            //     '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+
            //     'SCI journal publications outside PhD must be >= '+min+' for Assistant Professor'+
            // '</div>'

            // $("#sci-publications-outside-phd").append(msg);
            // $('body').animate({
            //     scrollTop: 500
            // },
            // 1000);
            // return false;
            var msg='SCI journal publications outside PhD must be >= '+min+' for Assistant Professor';
            if(post=="AP7")
                msg+=' on contract';
            return confirm(msg+'. Do you want to continue?');
        }
    }
    return true;
}
</script>