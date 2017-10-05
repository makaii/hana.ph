<div class="container">
  <div class="row">
    <div class="col-md-12">
<form action="<?php echo base_url('company/update_job')?>" method="POST">
 <!--  <?php echo form_open('company/update_job');?> -->
      <h4 class="white" style="text-align: center;">Edit <?php echo $jobs_tbl['job_title'];?> Post</h4> 
      <input type="hidden" name="id" value="<?php echo $jobs_tbl['job_id']?>">
    </div>

    <div class="row">
      <div class="col-md-2">
        
      </div>  


      <div class="col-md-8 container well">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-xs-12 col-lg-10">
              <p class="help-block">Input Job Title</p>
                <input type="text" class="form-control" name="jobtitle" placeholder="Job Title" value="<?php echo $jobs_tbl['job_title']; ?>">
               
            </div>
            <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
        </div>

          <div class="row">
              <div class="col-lg-1"></div>
                <div class="col-xs-12 col-lg-10">
                <p class="help-block">Input the possible branch </p>
                      <select class="form-control" name="joblocation" >
                        <option selected><?php echo $jobs_tbl['job_location']; ?></option>
                        <option value="Cavite">Cavite</option>
                        <option value="Marikina">Marikina</option>
                        <option value="Cebu">Cebu</option>
                        <option value="Pasig">Pasig</option>
                      </select>
                    </div>
                    <div class="col-lg-1"><p class="help-block"><small class="text-danger"><?php ?></small></p></div>
                </div>

                  <div class="row">
                          <div class="col-lg-1"></div>
                            <div class="col-xs-12 col-lg-10">
                            <p class="help-block">Input Job Type</p>
                                 <select class="form-control" name="jobtype" value="">
                                  <option selected><?php echo $jobs_tbl['job_type'];?></option>
                                  <option value="Full-Time">Full Time</option>
                                  <option value="Part-Time">Part Time</option>
                                  <option value="New-Grad">New Grad</option>
                                  <option value="Temporary">Temporary</option>
                                  <option value="Contract">Contract</option>
                                  <option value="Internship">Internship</option>
                                  <option value="Commission">Commission</option>
                                 </select>
                            </div>
                            <div class="col-lg-1"><p class="help-block"><small class="text-danger"><?php ;?></small></p></div>
                         </div>

                      <div class="row">
                          <div class="col-lg-1"></div>
                          <div class="col-lg-10 col-xs-12">
                            <p class="help-block"> Input the Offered Amount</p>     
                         <select class="form-control" name="jobsalary" value="">
                                    <option selected><?php echo $jobs_tbl['job_salary'];?></option>
                                    <option value="1000">1,000</option>
                                    <option value="10000">10,000</option>
                                    <option value="15000">15,000</option>
                                    <option value="2000">20,000</option>
                                    <option value="25000">25,000</option>
                                    <option value="30000">30,000</option>
                                    <option value="35000">35,000</option>
                                   </select>
                      
                          
                          </div>
                           <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
                      </div>

              <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-xs-12 col-lg-10">
                      <p class="help-block">Applications for this job will be sent to the following email address:</p> 
                      <input type="email" class="form-control" name="jobemail" placeholder="Email" value="<?php echo $email_address; ?>">
                      <p class="help-block"><small class="text-danger"></small>
                  </div>
                   <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
              </div>


                   <div class="row">
                            <div class="col-lg-1"></div>
                              <div class="col-xs-12 col-lg-10">
                              <p class="help-block">Describe the responsibilities of this Job, Required skills and work experience or education.</p> 
                                  <textarea class="form-control" rows="4" name="jobdescription" placeholder="Job Description"><?php echo $jobs_tbl['job_description']; ?></textarea>
                           
                                  </div>
                                   <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
                              </div><P></P>


                  <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      <div class="col-lg-4">
                        <a href="<?php echo base_url();?>company/job_posts" type="submit" class="btn btn-info btn-block">Back To Posts</a>
                      </div>
                      <div class="col-lg-4">
                          <button class="btn btn-success btn-block" type="submit">Update</button>
                          
                      </div>
                      <div class="col-lg-4">
                        <form action="<?php echo base_url('company/delete_job');?>" method="POST">
                        <a href="<?php echo base_url();?>company/delete_job/<?php echo $jobs_tbl['job_id'];?>" type="submit" class="btn btn-danger btn-block">Delete</a></form>
                      </div>
                    </div>
                    <div class="col-lg-1"></div>
                  </div>
      </div>

      <div class="col-md-2">
        
      </div>
</form>
    </div>
  </div>
</div>