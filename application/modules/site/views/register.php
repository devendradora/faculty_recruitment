<div class='container'>
  <div class="row">
  <?php echo form_open(URL_HOME.'registration_submit');?>
    <div class='col-md-6 col-md-offset-1 clearfix' id='image_div' style="">
      <!-- <div class="1"></div>
      <div class="2"></div> -->
      <img src='<?php echo(IMG.'2.jpg');?>' style=''>
      <img src='<?php echo(IMG.'3.gif');?>' style=''>
    </div>
    <div class='col-md-5 clearfix' id='form_div'>
      <div class="form-group">
        <label for="firstname" style="font-size:16px;">Name <span style='color:#d9534f'>*</span></label>
        <input type="text" required value="<?php echo set_value('firstname'); ?>" class="form-control" style="border-radius:0px; "id="firstname" name="firstname" placeholder="Enter firstname *">
        <input type="text" value="<?php echo set_value('lastname'); ?>" class="form-control" style="border-radius:0px; margin-top:2%;"id="lastname" name="lastname" placeholder="Enter lastname">
      </div>
      <div class="form-group">
        <label for="country" style="font-size:16px; ">Country</label>
        <input type="text" value="<?php echo set_value('country'); ?>" class="form-control" style="border-radius:0px;" id="country" name="country" placeholder="Enter country">
      </div>
      <div class="form-group">
        <label for="emailid" style="font-size:16px;">Email address <span style='color:#d9534f'>*</span></label>
        <input type="email" required class="form-control" style="border-radius:0px;" id="emailid" name="emailid" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password" style="font-size:16px;">Password <span style='color:#d9534f'>*</span></label>
        <input type="password" required class="form-control" style="border-radius:0px;" id="password" name="password" placeholder="Enter password">
      </div>
      <label id='passresult' style='display:none'></label>
      <div class="form-group">
        <label for="confirm_password" required style="font-size:16px;">Confirm Password <span style='color:#d9534f'>*</span></label>
        <input type="password" class="form-control" style="border-radius:0px;"id="confirm_password" name="confirm_password" placeholder="Confirm password" onkeyup="checkpass()">
      </div>
      <div class="form-inline">
        <div class="controls-row">
          <div class='col-md-6'  style="font-size:16px;">
          <div class="input-group">
              <span class="align-level">
              <input type="radio" class="" name="optionsradios" id="student" value="Student" onclick="checkbox_selection('s')"/>
              </span>
              <label class="aligned-text">&nbsp;Student</label>
          </div>
          </div>
          <div class='col-md-6' style="font-size:16px;">
            
            
            <span class="align-level">
              <input type="radio" name="optionsradios" id="professional" value="Professional" onclick="checkbox_selection('p')"/>
            </span>
              <label class="aligned-text">Professional <span style='color:#d9534f'>*</span></label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" value="<?php echo set_value('college'); ?>" class="form-control" style="border-radius:0px; display:none;" id="college" name="college" placeholder="Enter college">
        <input type="text" value="<?php echo set_value('organization'); ?>" class="form-control" style="border-radius:0px; display:none;" id="organization" name="organization" placeholder="Enter organization">
      </div>
      <select class="form-control" name="gender" style="border-radius:0px;">
        <option>I am...</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Other">Other</option>
      </select>
      <div style="margin-top:4%;">
        <label style="font-size:16px; padding:0px">DOB</label>
      </div>
      <div class="col-md-5" style="padding:0px; margin-bottom:3%; " >
        <select class="form-control" name="month" style="border-radius:0px;">
          <option>Month</option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option> 
        </select>  
      </div>
      <div class="col-md-3" style="padding:0px; margin-bottom:3%; ">
        <select class="form-control" name="day" style="border-radius:0px;">
          <option>Day</option>
          <?php
            for($i=1;$i<=31;$i++)
              echo "<option value='".$i."'>".$i."</option>";
          ?>
        </select>  
      </div>
      <div class="col-md-4" style="padding:0px; margin-bottom:3%; ">
        <select class="form-control" name="year" style="border-radius:0px;">
          <option>Year</option>
          <?php
            for($i=1910;$i<=2013;$i++)
            echo "<option value='".$i."'>".$i."</option>";
          ?>
        </select>  
      </div>
      <div class="form-group" style="margin-top:6%;">
        <label for="aboutme" style="font-size:16px;">About me</label>
        <textarea class="form-control" value="<?php echo set_value('aboutme'); ?>" rows="5" id="aboutme" name="aboutme" style="border-radius:0px;"></textarea>
      </div>
      <button type="button" class='btn btn-primary' id='finalstep' style='border-radius:0px' onclick="finalstep_clicked()">Final Step <i class="fa fa-arrow-right"></i></button>
    </div>
    <div class='col-md-11' id='final_div' style='margin-top:1%; margin-bottom:1%; display:none;'>
      <div class='col-md-12'>
        <label style='font-size:18px'>Select atleast one field of interest <span style='color:#d9534f'>*</span></label>
      </div>
     <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' name='b[]' id='b1' value='aeronautics' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Aeronautics</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b2' name='b[]' value='biotech' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Biotechnology</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b3' name='b[]' value='chemical' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Chemical</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b4' name='b[]' value='civil' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Civil</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b5' name='b[]' value='cse' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Computer Science</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b6' name='b[]' value='ece' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Electronics & Communication</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b7' name='b[]' value='eee' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Electrical & Electronics</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b8' name='b[]' value='mech' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Mechanical</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='margin-top:2%; margin-bottom:2%;'>
        <div class='div_style'>
          <div class="checkbox" >
            <input type='checkbox' id='b9' name='b[]' value='meta' style='margin-top:6px;'>
            <label  style='font-size:18px;'>Metallurgy</label>
          </div>
        </div>
      </div>
      <div class='col-md-4' style='padding-top:2%; padding-bottom:2%;'>
        <button type="submit" name="submit" class='btn btn-primary' style='border-radius:0px'><i class="fa fa-check"></i> I am done</button>
        <button type="button" name="back" class='btn btn-danger' style='border-radius:0px' onclick='back_clicked()'><i class="fa fa-arrow-left"></i> go back</button>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>
</div>