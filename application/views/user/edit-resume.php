<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="white">Edit Resume</h4>
    </div>
  </div>
  
  <form>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well">
          <legend>Basic Information</legend>
          <hr>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">First name</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_first_name; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Last name</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_last_name;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">E-mail address</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_email;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Address</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_address;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Mobile number</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_mobile_number;?>">
              </div>
            </div>
          </div>

        </div>

        <div class="well">
          <legend>Education</legend>
          <hr>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Degree</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_degree;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">School</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_school;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">School address</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_school_address;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Year started</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_school_year_started;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">year ended</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_school_year_ended;?>">
              </div>
            </div>
          </div>

        </div>

        <div class="well">
          <legend>Work Experience</legend>
          <hr>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Position</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_work_position?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Company</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_company; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Company address</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_company_address;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Year Started</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_work_year_started;?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group form-group-sm">
              <label class="col-sm-4 control-label">Year Ended</label>
              <div class="col-sm-8">
                <input class="form-control" type="text" value="<?php echo $resume_work_year_ended;?>">
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </form>
</div>