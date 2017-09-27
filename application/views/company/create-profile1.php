
<div class="container well" style="background-color: white;">
    <br>
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 col-xs-12">
        <div class="tile">
          <h4 class="text-center">Company Information</h4>
        </div>              
      </div>
    </div>

    <form method="POST" action="<?php echo base_url('company/validate_profile'); ?>">

      <div class="row">
        <div class="col-md-offset-3 col-md-6">
          <small class="text-info"><small class="text-danger">*</small> fields are required</small>
        </div>
      </div>

      <div class="row">
          <div class="col-lg-offset-3 col-lg-6 col-xs-12">
             <!--  <div class="form-group"> -->
                <label for="companyname">Company Name <span class="text-danger">*</span><?php echo form_error('companyname', '<small class="text-danger">', '</small>'); ?></label>
                <input  name="companyname" type="text" class="form-control" placeholder="e.g. XYZ Inc." value="<?php echo $company_name;?>"> 
                <small class="text-muted">Please provide your full company name</small>
                
              <!-- </div>  -->               
          </div>
      </div>

      <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-xs-12">
          <!-- <div class="form-group"> -->
            <label>Company Size <span class="text-danger">*</span><?php echo form_error('companysize', '<small class="text-danger">', '</small>'); ?></label>
              <select class="form-control" name="companysize">
               <option selected disabled>Please Select</option>
               <option selected><?php echo $company_size;?></option>
                <option value="10-30">10-30 Employees</option>
                <option value="31-80">31-80 Employees</option>
                <option value="81-200">81-200 Employees</option>
                <option value="200-1000">201-1000 Employees</option>
              </select>
              
          <!-- </div> -->
        </div>
      </div>


      <div class="row">
          <div class="col-lg-offset-3 col-lg-6 col-xs-12">
            <!-- <div class="form-group"> -->
              <label for="contactperson">Contact Person <span class="text-danger">*</span><?php echo form_error('contactperson', '<small class="text-danger">', '</small>'); ?></label>
              <input type="text" name="contactperson" class="form-control" placeholder="First Name M.I. Last Name" value="<?php echo $company_contact_person;?>">
              
            <!-- </div>    -->             
          </div>
      </div>

      <div class="row">              
        <div class="col-lg-offset-3 col-lg-6 col-xs-12">
          <!-- <div class="form-group"> -->
            <label>Company Address <span class="text-danger">*</span> <?php echo form_error('companyaddress', '<small class="text-danger">', '</small>'); ?></label>
            <input type="text" name="companyaddress" class="form-control" placeholder="#123 Some Street" value="<?php echo $company_address;?>">
            <small class="text-muted">Please provide complete address</small>
           
          <!-- </div> -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-xs-12">
          <!-- <div class="form-group"> -->

            <label>Company Description  <span class="text-danger">*</span> <?php echo form_error('companydescription', '<small class="text-danger">', '</small>'); ?></label>
            <textarea name="companydescription" class="form-control" rows="7" cols="3" style="resize: none;"><?php echo $company_description;?></textarea>
           
          <!-- </div>   -->              
        </div>
      </div>

      <div class="row">            
      
          <div class="col-lg-offset-3 col-lg-6 col-xs-12 text-right"><p></p>
            <button class="btn btn-info" type="submit">Next</button>
          </div>            
      </div>
    </form>

    

</div>
<!-- /.container -->


