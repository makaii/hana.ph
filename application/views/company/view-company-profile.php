<form method="POST" action="<?php echo base_url('company/validate_profile'); ?>">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="white"> <?php echo $company_name;?> Profile</h4> 
    </div>

    <div class="row">
      <div class="col-md-4">

        <div class="well text-center">
          <input type="button" name="picture" value="Add Company Picture" class="btn btn-primary btn-sm">
          <!-- <img src="skubi.jpg" class="img-circle" height="200" width="200"> -->
          <div class="text-left">
            <hr>
            <strong class="text-primary">Company Description</strong><p>
              <?php echo $company_description;?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
       <div class="well">
          <p>Company Profile <small><a href="<?php echo base_url();?>company/edit_profile" class="btn btn-primary navbar-right btn-xs">Edit Profile</a></small></p>
         
            <hr>
          <table>
            <tr>
                <td><small><b>Company Admin:</b></small></td>
                <td><small><?php echo $company_contact_person;?></small></td>
            </tr>
            <tr>
                <td><small><b>Company Email:</b></small></td>
                <td><small><?php echo $company_email;?></small></td>
            </tr>
            <tr>
                <td><small><b>Company Address:</b></small></td>
                <td><small><?php echo $company_address;?></small></td>
            </tr>
            <tr>
                <td><small><b>Company Size:</b></small></td>
                <td><small><?php echo $company_size;?> Employees</small></td>
            </tr>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>