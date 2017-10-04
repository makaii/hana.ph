<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="white" style="text-align: center;">Post a Job</h4> 
    </div>
<form method="POST" action="<?php echo base_url('company/validate_create_job'); ?>">
    <div class="row">
      <div class="col-md-2">
        
      </div>


      <div class="col-md-8 container well">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-xs-12 col-lg-10">
              <p class="help-block">Input Job Title</p>
                <input type="text" class="form-control" name="jobtitle" placeholder="Job Title" value="<?php echo $job_title;?>">
               <?php echo form_error('jobtitle','<small class="text-danger"> ', '</small>'); ?>
            </div>
            <div class="col-lg-1"></div>
        </div>

          <div class="row">
              <div class="col-lg-1"></div>
                <div class="col-xs-12 col-lg-10">
                <p class="help-block">Input the possible branch </p>
                      <select class="form-control" name="joblocation" value="<?php echo $job_location;?>" >
                        <option selected disabled>Location</option>
                        <option value="Cavite">Cavite</option>
                        <option value="Marikina">Marikina</option>
                        <option value="Cebu">Cebu</option>
                        <option value="Pasig">Pasig</option>
                        </select>
                      <?php echo form_error('joblocation', '<small class="text-danger"> ', '</small>'); ?>

                    
                    </div>
                    <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
                </div>

                  <div class="row">
                          <div class="col-lg-1"></div>
                            <div class="col-xs-12 col-lg-10">
                            <p class="help-block">Input Job Type</p>
                                 <select class="form-control" name="jobtype" value="<?php echo $job_type;?>" >
                                  <option selected disabled>Job Type</option>
                                  <option value="Full-Time">Full Time</option>
                                  <option value="Part-Time">Part Time</option>
                                  <option value="New-Grad">New Grad</option>
                                  <option value="Temporary">Temporary</option>
                                  <option value="Contract">Contract</option>
                                  <option value="Internship">Internship</option>
                                  <option value="Commission">Commission</option>
                                 </select>
                                 <?php echo form_error('jobtype', '<small class="text-danger"> ', '</small>'); ?>

                            </div>
                            <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
                         </div>

                      <div class="row">
                          <div class="col-lg-1"></div>
                          <div class="col-lg-10 col-xs-12">
                            <p class="help-block"> Input the Offered Amount</p>     
                         <select class="form-control" name="jobsalary" value="<?php echo $job_salary;?>">
                                    <option selected disabled>Salary</option>
                                    <option value="1000">1,000</option>
                                    <option value="10000">10,000</option>
                                    <option value="15000">15,000</option>
                                    <option value="2000">20,000</option>
                                    <option value="25000">25,000</option>
                                    <option value="30000">30,000</option>
                                    <option value="35000">35,000</option>
                                   </select>
                          <?php echo form_error('jobsalary', '<small class="text-danger"> ', '</small>'); ?>
                          </div>
                           <div class="col-lg-1"><p class="help-block"></p></div>
                      </div>

              <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-xs-12 col-lg-10">
                      <p class="help-block">Applications for this job will be sent to the following email address:</p> 
                      <input type="email" class="form-control" name="jobemail" placeholder="Email" value="<?php echo $email_address ; ?>">
                      <p class="help-block"><?php echo form_error('jobemail', '<small class="text-danger"> ', '</small>'); ?></p>
                  </div>
                   <div class="col-lg-1"><p class="help-block">
</p></div>
              </div>


                   <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-xs-12 col-lg-10">
                       <p class="help-block">Describe the responsibilities of this Job, Required skills and work experience or education.</p> 
                       <textarea class="form-control" rows="4" name="jobdescription" placeholder="Job Description"><?php echo $job_description;?></textarea>
                           <?php echo form_error('jobdescription', '<small class="text-danger"> ', '</small>'); ?>
                        </div>
                      <div class="col-lg-1"></div>
                  </div><P></P>


                  <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4">
                         <button type="submit" class="btn btn-success btn-block">Post</button>

                      </div>
                      <div class="col-lg-4"></div>
                    </div>
                    <div class="col-lg-1"></div>
                  </div>



      </div>


      <div class="col-md-2">
        
      </div>

    </div>
  </form>
  </div>
</div>