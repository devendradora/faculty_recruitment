<form role="form" class="row clearfix" enctype="multipart/form-data" id="personal" name="personal_form" action="<?php echo base_url("recruitment/personal/submit"); ?>" method="POST">
    <legend class="text-center">Personal Information</legend>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
            if($this->session->flashdata('other') == TRUE)
              echo '<div class="text-danger">'.$this->session->flashdata('other').'</div>';
          ?>
        </div>
    </div>
    <div class="text-danger"><?php echo validation_errors(); ?></div>
    <input id="proceed_val" type="hidden" value="1" name="proceed">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a role="button" href="<?php echo base_url("recruitment/applypost"); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
            <button type="reset" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-refresh"></span> Reset form</button>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>First Name*</label>
                <input name = "first_name" type="text" class="form-control input-sm" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <label>Last Name*</label>
                <input name = "last_name" type="text" class="form-control input-sm" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <label>Gender*</label>
                <select name = "gender" class = "form-control input-sm" required>
                    <option value = "Male">Male</option>
                    <option value = "Female">Female</option>
                    <option value = "Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date of Birth (mm/dd/yyyy)*</label>
                <input name = "dob" type="date" class="form-control input-sm" placeholder="YYYY/MM/DD" required>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label>Email Id*</label>
                <input name = "email_id" type="email" class="form-control input-sm" required>
            </div>
            <div class="form-group">
                <label>Current contact Number*</label>
                <input name = "contact_num" type="text" class="form-control input-sm" minlength=10 required>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label>Address Line 1*</label>
                <input name = "address_line_1" type="text" class="form-control input-sm" placeholder="Address Line 1" required>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label>Address Line 2</label>
                <input name = "address_line_2" type="text" class="form-control input-sm" placeholder="Address Line 2">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label>City*</label>
                <input name = "address_city" type="text" class="form-control input-sm" placeholder="City" required>
            </div>
            <div class="form-group">
                <label>State*</label>
                <select name="State" class="form-control input-sm" id="signup-inputState" required>
                    <option value="">---Select State---</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Skype Interview Details</strong>
                <p>Director on request may permit candidates from abroad to attend interview through Skype</p>
            </div>
            <div class="form-group">
                <label>Skype-ID</label>
                <input name = "skype_id" type="text" class="form-control input-sm" placeholder="Skype-id">
            </div>
        </div>
    </div>

    <div class="clearfix"></div>


    <div class="row" style="margin-bottom:1%;">
        <div class="form-group col-md-4">
            <label>Category*</label>
            <select name  ="category" id = "category" class = "form-control input-sm">
                <option value = "0">OPEN</option>
                <option value = "1">OBC-NCL</option>
                <option value = "2">SC</option>
                <option value = "3">ST</option>
            </select>
        </div>
        <!-- <div class="col-md-8">
            <div id = "obc-ncl" class = "category">
                Check sequence number from <a href="https://google.com" target = "_blank">OBC-NCL Link</a> and enter here <br>
                <div class="form-group">
                    <label>Sequence</label>
                    <input name = "cat_obc_sequence" type="text" class="form-control input-sm">
                </div>
            </div>
            <div id = "sc" class = "category">
                Check sequence number from <a href="https://google.com" target = "_blank">SC Link</a> and enter here <br>
                <div class="form-group">
                    <label>Sequence</label>
                    <input name = "cat_sc_sequence" type="text" class="form-control input-sm">
                </div>
            </div>
            <div id = "st" class = "category">
                Check sequence number from <a href="https://google.com" target = "_blank">ST Link</a> and enter here <br>
                <div class="form-group">
                    <label>Sequence</label>
                    <input name = "cat_st_sequence" type="text" class="form-control input-sm">
                </div>
            </div>
        </div> -->
        <div class="col-md-8" id = "category_pdf_upload_div">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"  id = "category_pdf_cert_input">
                <div class="form-group">
                    <label>Upload relevant certificate pdf</label>
                    <input name = "category_pdf" type="file" class="form-control input-sm">
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="margin-bottom:1%;">
        <div class="form-group col-md-4">
            <label>Special category PDA*</label>
            <select name = "spcl_cat_pda" id = "pda" class = "form-control input-sm">
                <option value = "0">No</option>
                <option value = "1">Yes</option>
            </select>
        </div>
        <div id ="pda_pdf_upload_div" class = "category-pda col-md-8">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"  id = "pda_pdf_cert_input">
            <div class="form-group">
                <label>Upload relevant certificate pdf</label>
                <input name = "pda_pdf" type="file" class="form-control input-sm">
            </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label>Date of issue of certificate</label> <p class="text-danger">(Issued on or after 1st January 2014) </p>
                <input type="date" min="2014-01-01" class="form-control input-sm" placeholder="YYYY-MM-DD" name="pda_cert_doi">
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-6">
        <!-- TO BE ENABLED -->
        <!-- <button type = "submit" id="save_details" class = "btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Save details</button> -->
    </div>

    <div class="col-md-6"><button type = "submit" class = "btn btn-block btn-primary">Save &amp; Continue</button></div>

</form>
<script type="text/javascript">
    <?php if(isset($raw_data)) { ?>
        document.personal_form.first_name.value='<?php echo $raw_data['first_name'] ?>';
        document.personal_form.last_name.value='<?php echo $raw_data['last_name'] ?>';
        document.personal_form.gender.value='<?php echo $raw_data['gender'] ?>';
        document.personal_form.dob.value='<?php echo $raw_data['dob'] ?>';
        document.personal_form.email_id.value='<?php echo $raw_data['email_id'] ?>';
        document.personal_form.contact_num.value='<?php echo $raw_data['contact_num'] ?>';
        document.personal_form.address_line_1.value='<?php echo $raw_data['address_line_1'] ?>';
        document.personal_form.address_line_2.value='<?php echo $raw_data['address_line_2'] ?>';
        document.personal_form.address_city.value='<?php echo $raw_data['address_city'] ?>';
        document.personal_form.State.value='<?php echo $raw_data['State'] ?>';
        document.personal_form.category.value='<?php echo $raw_data['category'] ?>';
        var category_date='<?php echo isset($raw_data["category_cert_doi"]) ? $raw_data["category_cert_doi"] : ""; ?>';
        document.personal_form.pda_cert_doi.value='<?php echo $raw_data['pda_cert_doi'] ?>';
        document.personal_form.spcl_cat_pda.value='<?php echo $raw_data['spcl_cat_pda'] ?>';
        document.personal_form.skype_id.value='<?php echo isset($raw_data['skype_id']) ? $raw_data['skype_id']:""; ?>';
        <?php } ?>
    </script>