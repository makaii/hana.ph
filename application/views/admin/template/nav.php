<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="<?php echo $active_dashboard; ?>" href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a class="<?php echo $active_applicant; ?>" href="<?php echo base_url('admin/applicant'); ?>"><i class="fa fa-briefcase"></i> Applicant</a>
            </li>
            <li>
                <a class="<?php echo $active_company; ?>" href="<?php echo base_url('admin/company'); ?>"><i class="fa fa-building-o"></i> Company <span class="badge"><?php echo $tn_companies." pending"; ?></span></a>
            </li>
            <li>
                <a class="<?php echo $active_job; ?>" href="<?php echo base_url('admin/job'); ?>"><i class="fa fa-tasks"></i> Jobs <span class="badge"><?php echo $tn_jobs." new"; ?></span></a>
            </li>
            <li>
                <a><i class="fa fa-fw fa-file"></i> Reports<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Daily Report</a>
                    </li>
                    <li>
                        <a href="#">Weekly Report</a>
                    </li>
                    <li>
                        <a href="#">Monthly Report</a>
                    </li>
                    <li>
                        <a href="#">Bi-monthly Report</a>
                    </li>
                    <li>
                        <a href="#">Quarterly Report</a>
                    </li>
                    <li>
                        <a href="#">Yearly Report</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->