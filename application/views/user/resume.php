<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="white">Resume</h4>
    </div>

    <div class="row">
      <div class="col-md-8">

        <div class="well">
          <p>Personal Information</p>
          <hr>
          <strong class="text-primary"><?php echo $resume_name; ?></strong>
          <br>
          <small><?php echo $resume_address; ?></small>
          <br>
          <small><?php echo $resume_email; ?></small>
          <br>
          <small><?php echo $resume_mobile_number; ?></small>
        </div>

        <div class="well">
          <p>Work Experience</p>
          <hr>
          <strong class="text-primary"><?php echo $resume_work_position; ?></strong>
          <br>
          <small><?php echo $resume_company; ?></small>
          <br>
          <small><?php echo $resume_company_address; ?></small>
          <br>
          <small>year - year</small>
        </div>

        <div class="well">
          <p>Education</p>
          <hr>
          <strong class="text-primary"><?php echo $resume_degree; ?></strong>
          <br>
          <small><?php echo $resume_school; ?></small>
          <br>
          <small><?php echo $resume_school_address; ?></small>
          <br>
          <small>year - year</strong>
        </div>

      </div>
      <div class="col-md-4">
        <div class="well text-center">
          <img src="<?php echo base_url().$resume_img_url; ?>" class="img-circle" height="200" width="200">
          <div class="text-left">
            <hr>
            <strong class="text-primary">About me</strong>
            <p>
              <?php echo $resume_about_me ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>