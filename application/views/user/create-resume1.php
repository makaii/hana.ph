<div class="container">
  <div class="jumbotron" style="background-color: white;">
    <div class="row bs-wizard" style="border-bottom:0;">
            
        <div class="col-xs-3 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_1'); ?>" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Personal Information</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled">
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Educational Background</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled">
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Work Experience</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step disabled">
          <div class="text-center bs-wizard-stepnum">Step 4</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Finishing touches</div>
        </div>
    </div>
    <br>

    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 col-xs-12">
        <form method="POST" action="http://localhost/hana.ph/resume/create_resume_1_validation">
          <div class="tile">
            <h4>Personal Information</h4>            
          </div>
      <small class="text-info"><small class="text-danger">*</small> fields are required</small>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">

            <div class="row">
              <div class="col-lg-12">
                <label>Name</label><small class="text-danger">*</small>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="form-control" name="firstName" placeholder="First name" value="<?php echo $applicant_first_name; ?>">
                <?php echo form_error('firstName', '<small class="text-danger">','</small>'); ?>
              </div>
              <div class="col-lg-6">
                <input type="text" class="form-control" name="lastName" placeholder="Last name" value="<?php echo $applicant_last_name; ?>">
                <?php echo form_error('lastName', '<small class="text-danger">','</small>'); ?>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                
              </div>
            </div>
          </div>          
        </div>
      </div>
          
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="datetimepicker1">Date of birth</label><small class="text-danger">*</small>
              <div class='input-group date' id='datetimepicker1'>
                  <input type='date' class="form-control" name="birthdate"  max="<?php echo date('Y-m-d'); ?>" value="<?php echo $applicant_birthdate; ?>">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
              <!-- <script type="text/javascript">
                  $(function () {
                      $('#datetimepicker1').datetimepicker();
                  });
              </script> -->
              <?php echo form_error('birthdate', '<small class="text-danger">','</small>'); ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label>Address:</label><small class="text-danger">*</small>
            <input type="text" name="address" class="form-control" value="<?php echo $applicant_address; ?>">
            <small class="text-muted">Please provide your complete address</small>
            <div>
              <?php echo form_error('address', '<small class="text-danger">','</small>'); ?>
            </div>
          </div>              
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label>E-mail:</label><small class="text-danger">*</small>
            <input type="email" class="form-control" name="email" placeholder="your-email@domain.com" value="<?php echo $applicant_email; ?>">
            <small class="text-muted">This email address will be shown to the public</small>
            <div>
              <?php echo form_error('email', '<small class="text-danger">','</small>'); ?>
            </div>
          </div>          
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8">
          <div class="form-group">
            <label>Mobile number:</label>
            <input type="text" name="mobileNumber" class="form-control" value="<?php echo $applicant_mobile_number; ?>">
            <small class="text-muted">This mobile number will be shown to the public</small>
            <div>
              <?php echo form_error('mobileNumber', '<small class="text-danger">','</small>'); ?>
            </div>
          </div>              
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 text-right">
          <div class="form-group">
           <button class="btn btn-block btn-info" type="submit">Next</button> 
          </div>              
        </div>
      </div>

          
        </form>
      </div>
      
    </div>

  </div>
    
</div>
<!-- /.container -->