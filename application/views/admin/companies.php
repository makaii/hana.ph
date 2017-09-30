<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Companies <small></small>
                </h1>
            </div>
        </div> 
        <!-- /. ROW  -->


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info no-border">
                    <div class="panel-heading">
                        Unverified Companies
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($unverifed_company as $row) {
                                        echo "<tr>";
                                        echo "<td>".$row['company_id']."</td>";
                                        echo "<td></td>";
                                        echo "<td>".$row['company_email']."</td>";
                                        echo "<td>"."<button class='btn btn-sm btn-info'>See</button>"."</td>";
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