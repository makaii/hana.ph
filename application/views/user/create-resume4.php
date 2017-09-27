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
        
        <div class="col-xs-3 bs-wizard-step complete">
          <div class="text-center bs-wizard-stepnum">Step 3</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_3'); ?>" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Work Experience</div>
        </div>
        
        <div class="col-xs-3 bs-wizard-step active">
          <div class="text-center bs-wizard-stepnum">Step 4</div>
          <div class="progress"><div class="progress-bar"></div></div>
          <a href="<?php echo base_url('resume/create_resume_4'); ?>" class="bs-wizard-dot"></a>
          <div class="bs-wizard-info text-center">Finishing touches</div>
        </div>
    </div>
    <br>

    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 col-xs-12">

        <div class="tile">
          <h4>Finishing touches</h4>
        </div>
        
        <form method="POST" action="http://localhost/hana.ph/resume/create_resume_4_validation" enctype="multipart/form-data">
          <small class="text-info"><small class="text-danger">*</small> fields are required</small>
          
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Resume Picture</label><small class="text-danger"> *</small>
                <input type="file" name="applicantImg" class="form-control">
                <small>Note: favorable image dimensions is 1:1</small>
                <?php echo form_error('applicantImg', '<small class="text-danger">', '</small>'); ?>
                <div class="text-warning">
                  <div>
                    <small><?php echo $this->session->flashdata('file_ext'); ?></small>
                  </div>
                  <div>
                    <small><?php echo $this->session->flashdata('file_size'); ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Attach here your CV if available</label>
                <input type="file" name="applicantCV" class="form-control" size="20">
                <?php echo form_error('applicantCV', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tell us something about yourself</label><small class="text-danger"> *</small>
                <textarea name="applicantAbout" class="form-control" cols="1" rows="8" maxlength="255" style="resize: none;"><?php if (isset($applicant_about)){echo $applicant_about;};?></textarea>
                <?php echo form_error('applicantAbout', '<small class="text-danger">', '</small>'); ?>
              </div>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-lg-6 col-xs-6 col-md-6 text-left">
              <div class="form-group">
                <a class="btn btn-inverse" href="<?php echo base_url('resume/create_resume_3'); ?>">Back</a>
              </div>            
            </div>
            <div class="col-lg-6 col-md-6 col-xs-5 text-right">
              <div class="form-group">
                <a><button class="btn btn-success" type="submit">Finish</button></a>
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