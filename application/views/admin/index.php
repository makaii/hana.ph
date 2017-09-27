<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Dashboard <small></small>
                </h1>
            </div>
        </div> 
         <!-- /. ROW  -->

         <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-5x fa-users"></i>
                        <h3>
                            <?php echo $this->session->userdata('total_num_accounts'); ?>
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <strong>Registered Users</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-5x fa-briefcase"></i>
                        <h3>
                            <?php echo $this->session->userdata('total_num_applicanats'); ?>
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <strong>Applicants</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-5x fa-building-o"></i>
                        <h3>
                            <?php echo $this->session->userdata('total_num_companies'); ?>
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <strong>Company</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-5x fa-tasks"></i>
                        <h3>
                            <?php echo $this->session->userdata('total_num_jobs'); ?>
                        </h3>
                    </div>
                    <div class="panel-footer">
                        <strong>Jobs</strong>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->

        <!-- <div class="row">
            <div class="col-md-12">

            </div>
        </div>  -->
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->