<div class="container-fluid">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center" style="color: #ECF0F1;">Register, its free!</h3>

          <form method="POST" action="<?php echo base_url('register/register_validation'); ?>">
            <div class="login-form">
              <div class="form-group">
                <input class="form-control input-lg login-field" type="email" id="email" placeholder="Email Address" name="email" maxlength="25" value="<?php echo set_value('email'); ?>"></input>
                <label class="login-field-icon fui-mail" for="#email" value="<?php echo set_value('email'); ?>"></label>
                <small class="text-danger"><?php echo form_error('email'); ?></small>
              </div>
              <div class="form-group">
                <input class="form-control input-lg login-field" type="password" id="password" placeholder="Password" name="password" maxlength="25" minlength="8" value="<?php echo set_value('password'); ?>"></input>
                <label class="login-field-icon fui-lock" for="#password"></label>
                <small class="text-danger"><?php echo form_error('password'); ?></small>
              </div>
              <div class="form-group">
                <input class="form-control input-lg login-field" type="password" id="re-password" placeholder="Confirm password" name="password-re" maxlength="25" minlength="8" value="<?php echo set_value('re-password'); ?>"></input>
                <label class="login-field-icon fui-lock" for="#re-password"></label>
                <small class="text-danger"><?php echo form_error('re-password'); ?></small>
              </div>

              <div class="form-group">
                <select data-toggle="select" class="form-control select-lg select-primary" name="accountType" value="<?php echo set_value('accountType'); ?>">
                  <option value="" hidden="">Account Type</option>
                  <option value="applicant">Applicant</option>
                  <option value="employer">Employer</option>
                </select>
                <small class="text-danger"><?php echo form_error('accountType'); ?></small>
              </div>

              <br>
              <div class="form-group">
                <button class="btn btn-inverse btn-block" type="submit">Register</button>
                <button class="btn btn-default btn-block" type="reset">Clear</button>
              </div>
              <div class="text-center">
                <a href="<?php echo base_url('login#email'); ?>"><small>Already have an account? Sign in</small></a>
              </div>
            </div>            
          </form>
          
        </div>
      </div>
    </div>
  </div><!-- /.row -->

</div>
<!-- /.container -->