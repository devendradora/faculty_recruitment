<div class="panel panel-default">
    <div class="panel-heading">
        <p class="text-center lead">Instructions</p>
    </div>
    <div class="panel-body">
        <ul>
            <li>
                Candidates applying for AP6, AP7, or AP8 will be considered for that post in that department only. In case any person wishes to apply for more than one post in more than one department, multiple applications are possible.
            </li>
            <li>
                All candidates who are currently working in teaching institutions, industry and R&amp;D
                organizations have to upload “No Objection Certificate” from competent authority.
            </li>
            <li>
                Candidates who do not belong to the specializations, as popped up, need not apply.
            </li>
        </ul>
    </div>
    </div>
    <div class="alert alert-info">
        <p class="lead">Undertaking:</p>
        I have read all the instructions above and I agree to the above mentioned terms and conditions. I will

        abide by the decision of National Institute of Technology, Warangal with regard to my candidature for

        the post I have applied for.
    <p class="text-danger">If you agree write your name in the following box and click on “agree and continue”.</p>
    </div>
    <form action="<?php echo base_url("recruitment/applypost"); ?>" method="POST" role="form" name="terms_conditions">
        <input type="hidden" value="1" name="instructions">
        <div class="col-md-6">

            <input type="text" class="form-control" placeholder="Name" name="name_of_candidate" required>
        </div>
        <div class="col-md-6">
            <div class="col-md-6"><button type="submit" class="btn btn-block btn-success">Agree and Continue</button></div>
            <div class="col-md-6"><center><a role="button" href="<?php echo base_url('auth/logout');?>" class="form-control btn-danger">Discontinue</a></center></div>
        </div>
    </form>
    <script>
    document.terms_conditions.name_of_candidate.value='<?php echo (isset($saved_data)) ? $saved_data : "" ?>';
    </script>