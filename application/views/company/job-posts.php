<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4 class="white"> Job Posts</h4> 
    </div>

    <div class="row">
      <div class="col-md-3">

        <div class="well text-center">
       
          <div class="text-left">
            Actions
            <hr>
            
            <a href="<?php echo base_url('company/create_job');?>" class="btn btn-primary btn-block">Post a Job</a>

            </p>
          </div>
        </div>
      </div>
      <div class="col-md-9">
     <?php foreach ($posts as $jobs_tbl):?>
         <div class="well"><a href="<?php echo site_url('company/view_job/'.$jobs_tbl['job_slug']);?>"> <?php echo ucwords($jobs_tbl['job_title']);?></a>
            <a href="<?php echo base_url('company/edit_job/'.$jobs_tbl['job_slug']);?>" class="btn btn-info btn-sm navbar-right">Edit Post</a>
           
              <hr>
            <table>
              <tr>
                  <td><small><b>Number of Applicants: </b></small></td>
                  <td ><small class="text-info"><b > A clickable number to view applicants:</b></small></td>
              </tr>
              <tr>
                  <td><small><b>Number of Search:</b></small></td>
                  <td ><small class="text-info"><b > A clickable number to view search:</b></small></td>
              </tr>
              <tr>
                  <td><small><b>Last Updated:</b></small></td>
              </tr>
              <tr>
                  <td><small><b>Other Options:</b></small></td>
              </tr>
            </table>

          </div>


      <?php endforeach;?>
      </div>

    </div>
  </div>
</div>