<div class="panel panel-default">
    <div class="panel-heading">
        <p class="text-center lead">Instructions</p>
    </div>
    <div class="panel-body">
        <ul>
          
        <li> Candidates applying for AP6, AP7, or AP8 will be considered for that post in that department only. In case any person wishes to apply for more than one post in more than one department, multiple applications are possible. </li>
        <li> All candidates who are currently working in teaching institutions, industry and R&D organizations have to upload “No Objection Certificate” from competent authority.</li>
        <li>Persons employed in Government and Semi-Government organizations must apply through proper channel. All such candidates have to upload a request letter in the online application and submit the online application within the prescribed time.  The downloaded application along with all necessary documents can be sent as advance copy duly super-scribing on the envelope so as to reach on or before the last date. </li>
        <li>  Candidates who do not belong to the specializations, as popped up in the online form, need not apply.</li>
        <li> Mere fulfillment of minimum qualifications and experience does not entitle any candidate for interview call. </li>
        <li> Criteria for short-listing may vary from department to department. </li>
        <li>  The number of vacancies advertised is merely an indication of existing vacancies or that are likely vacancies to arise.  The Institute reserves right to fill or not to fill any or all the vacancies notified. </li>
        <li>  The Institute reserves the right to reject any or all applications without assigning any reason.</li>
        <li>Incomplete applications / applications without necessary enclosures will summarily be rejected.</li>
        <li> Candidates who are unable to attend the interview for being abroad may be considered in absentia. A specific request giving sufficient justification must be made in advance. Such candidates if shortlisted may be interviewed through video conferencing.</li> 
        <li> Candidates shall enclose at least three reference letters (one must be from Ph.D. guide or supervisor). </li>
        <li>No correspondence, whatsoever, will be entertained from the candidates regarding postal delays, conduct and result of interview and reasons for not being called for interview or selection. </li>
        <li> The filled in application should be accompanied by application fee of Rs. 500/- (Rs.200/- in case of SC/ST candidates) in the form of Crossed Demand Draft drawn in favour of “The Director, National Institute of Technology, Warangal” payable at the State Bank of Hyderabad, N.I.T. Branch, Warangal – 506 004 (IFSC Code – SBHY0020149) or any Nationalized Bank payable at Warangal.  </li>
        <li>Fee can also be paid through online transfer to “Director, NIT Warangal” Account Number 52109375198, IFSC Code SBHY0020149. For transfer from abroad fee amount of USD 10 be sent to Director, NIT Warangal, Account number 52109375198, Swift Code SBHYINBB018</li>


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
