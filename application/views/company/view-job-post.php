<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="white" style="text-align: center;"><?php echo  ucwords($jobs_tbl['job_title'])?> Details</h4> 
    </div>
    
    <div class="row">
      <div class="col-md-2">
        
      </div>


      <div class="col-md-8 container well">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-xs-12 col-lg-10">
              
              <table>
                <tr>
                  <td>Job Location: </td>
                  <td><?php echo $jobs_tbl['job_location'];?> </td>
                </tr>
                <tr>
                  <td>Job Type: </td>
                  <td><?php echo $jobs_tbl['job_type'];?> </td>
                </tr>
                <tr>
                  <td>Offered Salary: </td>
                  <td><?php echo "Php ";echo number_format($jobs_tbl['job_salary'],2);?> </td>
                </tr>
                <tr>
                  <td>Email for applicants: </td>
                  <td><?php echo $email_address;?> </td>
                </tr>

              </table>

            </div>
            <div class="col-lg-1"></div>
        </div>


                   <div class="row">
                            <div class="col-lg-1"></div>
                              <div class="col-xs-12 col-lg-10">
                              Job Description: <br>
                                  <?php echo $jobs_tbl['job_description'];?>
                           
                                  </div>
                                   <div class="col-lg-1"><p class="help-block"><small class="text-danger"></small></p></div>
                              </div><P></P> 
              

                  <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                      
                         
                          <a  class="btn btn-info btn-block" href="javascript:window.history.go(-1);">Back</a>
                      
                     
                    </div>
                    <div class="col-lg-1"></div>
                  </div>



      </div>


      <div class="col-md-2">
        
      </div>

    </div>
  </div>
</div>