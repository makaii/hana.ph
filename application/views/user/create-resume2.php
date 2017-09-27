<div class="container">
  <div class="jumbotron" style="background-color: white;">
    <div class="row bs-wizard" style="border-bottom:0;">
            
        <div class="col-xs-3 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 1</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_1'); ?>" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Personal Information</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum">Step 2</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_2'); ?>" class="bs-wizard-dot"></a>
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

        <div class="tile">
          <h4>Educational Background</h4>
        </div>
        
        <form method="POST" action="http://localhost/hana.ph/resume/create_resume_2_validation">
          
          <small class="text-info"><small class="text-danger">*</small> fields are required</small>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">              
                <label>Degree</label><small class="text-danger">*</small>
                <input type="text" name="degree" class="form-control" placeholder="BS Degree Major in field of work" value="<?php echo $applicant_degree; ?>">
                <div>
                  <?php echo form_error('degree', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">             
                <label>School Name</label><small class="text-danger">*</small>
                <input type="text"  name="schoolName" class="form-control" placeholder="School Name" value="<?php echo $applicant_school_name; ?>">
                <div>
                  <?php echo form_error('schoolName', '<small class="text-danger">', '</small>'); ?>
                </div>                
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">              
                <label>School Address</label>
                <input type="text" name="schoolAdress" class="form-control" placeholder="School Address" value="<?php echo $applicant_school_address; ?>">
                <div>
                  <?php echo form_error('schoolAdress', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Year Started</label>
                <input type="number" name="schoolYearStarted" class="form-control" min="1960" max="<?php echo date('Y'); ?>" value="<?php echo $applicant_school_date_started; ?>">
                <div>
                  <?php echo form_error('schoolYearStarted', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>            
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Year Ended</label>
                <input type="number" name="schoolYearEnded" class="form-control" min="1960" max="<?php echo date('Y'); ?>" value="<?php echo $applicant_school_date_ended; ?>">
                <div>
                  <?php echo form_error('schoolYearEnded', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>
            </div>
          </div>

          

          <br>

          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <div class="form-group">
                <div class="text-left">
                  <a class="btn btn-inverse" href="<?php echo base_url('resume/create_resume_1'); ?>">Back</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xs-6">
              <div class="form-group">
                <div class="text-right">
                  <a><button class="btn btn-primary" type="submit">Next</button></a>
                </div>
              </div>
            </div>
          </div>



        </form>
        

      </div>

      
    </div>

  </div>
  <!-- /.jumbotron -->
    
</div>
<!-- /.container -->