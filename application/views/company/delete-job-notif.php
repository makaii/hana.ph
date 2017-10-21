<div class="container" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <div class="jumbotron">
        <h4>Are you sure you want to delete this Job Post<br></h4>
        
        
        <div class="col-md-6">
          <a class="btn btn-block btn-info" href="<?php echo base_url();?>company/job_posts">No</a>
        </div>
        <div class="col-md-6">
        <form action="<?php echo base_url('company/success_delete_job');?>" method="POST">
        <a href="<?php echo base_url();?>company/success_delete_job/<?php echo $job_id;?>" type="submit" class="btn btn-danger btn-block">Yes</a></form>
        </div>
      </div>
    </div>
  </div>
</div>