<div class="container">
  <div class="jumbotron" style="background-color: white;">
    <div class="row bs-wizard" style="border-bottom:0;">
            
        <div class="col-xs-3 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_1'); ?>" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Personal Information</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_2'); ?>" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Educational Background</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_3'); ?>" class="bs-wizard-dot"></a>
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
      <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-12">

        <div class="tile">
          <h4>Work Experience</h4>
        </div>

        <form method="POST" action="http://localhost/hana.ph/resume/create_resume_3_validation">

            <!-- <legend>Company Information</legend> -->
            <small class="text-info"><small class="text-danger">*</small> fields are required</small>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Position</label>
                  <input type="text" name="companyPosition" placeholder="Position" class="form-control" value="<?php echo $applicant_company_position; ?>">
                  <div>
                    <?php echo form_error('companyPosition', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>            
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Company Name</label>
                  <input type="text" name="companyName" placeholder="Company Name" class="form-control" value="<?php echo $applicant_company_name; ?>">
                  <div>
                    <?php echo form_error('companyName', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>            
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Company Address</label>
                  <input type="text" name="companyAddress" placeholder="Company Address" class="form-control" value="<?php echo $applicant_company_adress; ?>">
                  <div>
                    <?php echo form_error('companyAddress', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>            
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Year Started</label>
                  <input type="number" name="workYearStarted" min="1900" max=""<?php echo date('Y'); ?>" class="form-control" value="<?php echo $applicant_company_year_started; ?>">
                  <div>
                    <?php echo form_error('workYearStarted', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>            
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Year Ended</label>
                  <input type="number" name="workYearEnded" min="1900" max=""<?php echo date('Y'); ?>" class="form-control" value="<?php echo $applicant_company_year_ended; ?>">
                  <div>
                    <?php echo form_error('workYearEnded', '<small class="text-danger">', '</small>'); ?>
                  </div>              
                </div>            
              </div>
            </div>
            
            

            <br>

            <div class="row">
              <div class="col-lg-6 col-xs-6 col-md-6 text-left">
                <div class="form-group">
                  <a class="btn btn-inverse" href="<?php echo base_url('resume/create_resume_2'); ?>">Back</a>
                </div>            
              </div>
              <div class="col-lg-6 col-md-6 col-xs-5 text-right">
                <div class="form-group">
                  <a><button class="btn btn-primary" type="submit">Next</button></a>
                </div>            
              </div>
            </div>
        </form>

      </div>


      
    </div>

  </div>
    
</div>
<!-- /.container -->