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
                                        <th>Type</th>
                                        <th>Company</th>
                                        <th>location</th>
                                        <th>Description</th>
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
                                            echo "<td>".$row['job_type']."</td>";
                                            echo "<td>".$row['job_company']."</td>";
                                            echo "<td>".$row['job_location']."</td>";
                                            echo "<td>".$row['job_description']."</td>";
                                            echo "<td>".$row['job_salary']."</td>";
                                            echo "<td>".$row['job_date_posted']."</td>";
                                        echo "</tr>";
                                    } ?>                                   
                                </tbody>
                            </table>
                        </div>
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