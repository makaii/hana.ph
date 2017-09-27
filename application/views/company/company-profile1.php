
  <body>

    <div class="container well" style="padding: 0px;">
    
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-xs-12">
                <h3 class="text-center" style=" background-color: #e0e0e0">Company Information</h3></div>
            <div class="col-lg-3"></div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-xs-12">
                <label for="company">Company Name <font color="red">*</font></label>
                <input type="text" class="form-control" name="companyname" placeholder="e.g. XYZ Inc." value="<?php echo $company_name; ?>">
                <p class="help-block">Please provide your full company name</p><?php echo form_error('companyname','<small class="text-danger">', '</small>');?>
            </div>
            <div class="col-lg-3"></div>
        </div>
   
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 col-xs-12">
      <div class="form-group">
        <label for="sel1">Company Size <font color="red">*</font></label>
          <select class="form-control" id="sel1" name="companysize">
            <option value="select">Please Select</option>
            <option value="one">10-30 Employees</option>
            <option value="two">31-50 Employees</option>
            <option value="three">51-100 Employees</option>
            <option value="three">100-500 Employees</option>
            <option value="three">500-1000 Employees</option>
          </select><?php echo form_error('companysize','<small class="text-danger">', '</small>');?>
      </div>
      </div>
      </div>


        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-xs-12">
                <label for="company">Company Admin <font color="red">*</font></label>
                <input type="text" class="form-control" name="contactperson" placeholder="First Name M.I. Last Name">
                <?php echo form_error('contactperson','<small class="text-danger">', '</small>');?>
            </div>
            <div class="col-lg-3"></div>
        </div>
    <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-xs-12">
                <label for="street">City</label>
                <input type="text" class="form-control" name="city" id="name" placeholder="Some City">
                <?php echo form_error('city','<small class="text-danger">', '</small>');?>
            </div>
            <div class="col-lg-3"></div>
        </div>

         <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-xs-12">
                <label for="street">Office Address</label>
                <input type="text" class="form-control" name="address" id="name" placeholder="# / Street / City ">
                <?php echo form_error('address','<small class="text-danger">', '</small>');?>
            </div>
            <div class="col-lg-3"></div>
        </div>

        <div class="row">
          <div class="col-lg-3"></div>
            <div class="col-lg-6 col-xs-12">
                <label for="comment">Company Description </label>
                <textarea class="form-control" name="companydescription" rows="3" id="comment"></textarea>
                <?php echo form_error('companydescription','<small class="text-danger">', '</small>');?>
            </div>
            <div class="col-lg-3"></div>
        </div>



        <div class="row"><br>
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-right">
               
                    <?php echo form_open('company/validate_profile')?>
              <button class="btn btn-info" type="submit">Next</button></a>
            </div>
            <div class="col-lg-3"></div>
        </div><br>

    </div>
    <!-- /.container -->


