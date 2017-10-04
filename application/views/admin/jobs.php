<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Jobs <small></small>
                </h1>
            </div>
        </div> 
         <!-- /. ROW  -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info no-border">
                    <div class="panel-heading">
                        Unapproved Jobs
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Company</th>
                                        <th>Salary</th>
                                        <th>Date Posted</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($unapproved_job as $row)
                                    {
                                        echo "<tr>";
                                            echo "<td>".$row['job_id']."</td>";
                                            echo "<td>".$row['job_title']."</td>";
                                            echo "<td>".$row['job_company']."</td>";
                                            echo "<td>".$row['job_salary']."</td>";
                                            echo "<td>".$row['job_date_posted']."</td>";
                                            echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#'.$row['job_id'].'"><i class="fa fa-eye"></i> Inspect</button></td>';
                                        echo "</tr>";
                                    } ?>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    <?php 
                    if (!empty($unapproved_job))
                    {
                        foreach ($unapproved_job as $row)
                        {
                            echo '<div class="modal fade" id="'.$row['job_id'].'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="POST" action="http://localhost/hana.ph/admin/approve_job/'.$row['job_id'].'" id="approve_job_form">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Approve Jobs</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Job Title</label>
                                                        <p class="">'.$row['job_title'].'</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Type</label>
                                                        <p class="">'.$row['job_type'].'</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Company</label>
                                                        <p class="">'.$row['job_company'].'</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Location</label>
                                                        <p class="">'.$row['job_location'].'</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Description</label>
                                                        <p class="">'.$row['job_description'].'</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Salary</label>
                                                        <p class="">'.$row['job_salary'].'</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary" name="action" value="Verify">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>';
                        }
                    }
                    ?>
                    
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