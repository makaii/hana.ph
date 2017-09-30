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
                                    <?php 
                                    if (!empty($unverifed_company))
                                    {
                                        foreach ($unverifed_company as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>'.$row['company_profile_id'].'</td>';
                                            echo '<td>'.$row['company_name'].'</td>';
                                            echo '<td>'.$row['company_control_email_address'].'</td>';
                                            echo '<td>'.'<button class="btn btn-primary" data-toggle="modal" data-target="#'.$row['company_profile_id'].'"><i class="fa fa-eye"></i> Inspect</button></td>';
                                            echo '</tr>';
                                        }
                                    }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                if (!empty($unverifed_company)) {
                    foreach ($unverifed_company as $row) {
                        echo '<div class="modal fade" id="'.$row['company_profile_id'].'" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form method="POST" action="http://localhost/hana.ph/admin/verify_company/'.$row['company_control_email_address'].'" id="verify_company_form">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Verivy Company</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <p>'.$row['company_name'].'</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Address</label>
                                                    <p>'.$row['company_address'].'</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Size</label>
                                                    <p>'.$row['company_size'].'</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Contact Person</label>
                                                    <p>'.$row['company_contact_person'].'</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Email</label>
                                                    <p>'.$row['company_email'].'</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Description</label>
                                                    <p>'.$row['company_description'].'</p>
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

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="" id="verify_company_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Verivy Company</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Company Name</label>
                        <p class="form-control-static"></p>
                    </div>
                    <div class="form-group">
                        <label>Company Address</label>
                        <p class="form-control-static"></p>
                    </div>
                    <div class="form-group">
                        <label>Company Size</label>
                        <p class="form-control-static"></p>
                    </div>
                    <div class="form-group">
                        <label>Company Contact Person</label>
                        <p class="form-control-static"></p>
                    </div>
                    <div class="form-group">
                        <label>Control Email</label>
                        <p class="form-control-static"></p>
                    </div>
                    <div class="form-group">
                        <label>Company Description</label>
                        <p class="form-control-static"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="action" value="Verify">
                </div>
            </div>
        </form>
    </div>
</div> -->