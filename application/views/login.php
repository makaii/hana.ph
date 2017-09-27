<div class="container-fluid">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h3 style="color: #ECF0F1;">Welcome</h3>
          </div>
          <form method="POST" action="http://localhost/hana.ph/login/login_validation">
            <div class="login-form">
              <div class="form-group">
                <input class="form-control input-lg login-field" type="email" placeholder="Email" id="email" name="username" value="<?php echo set_value('username'); ?>"></input>
                <label class="login-field-icon fui-mail" for="#email"></label>
              </div>
              <div class="form-group">
                <div class="form-group">
                <input class="form-control input-lg login-field" type="password" placeholder="Password" id="password" name="password"></input>
                <label class="login-field-icon fui-lock" for="#password"></label>
              </div>
              </div>
              <div class="form-group">
                <button class="btn btn-block btn-inverse" type="submit">Sign In</button>
              </div>
              <div class="text-center text-danger">
                <?php echo $this->session->flashdata('error'); ?>
              </div>
              <div class="text-center">
                <a href="<?php echo base_url('register#email'); ?>"><small>Don't have an Account? Sign Up</small></a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- /.row -->

</div>