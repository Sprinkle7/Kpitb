<?php 
$this->load->view('parts/header');
$this->load->view('parts/head_msgs');
$this->load->view('parts/sidemenu');?>
            <div class="page-inner"> 
                <div id="main-wrapper"> 
                    <div class="col-lg-12 col-md-12">
                        <div class="panel info-box panel-white">
                            <div class="panel-body bread">
                            <h2 class="NoPadTop">New User</h2>
                            <div class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url()?>kpitb_panel/index">Dashboard</a></li>
                                    <li>New User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Bread Crumb -->
                    <!-- Letters Ends Here -->
                    <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <a href="<?php echo base_url();?>staff/create_staff" class="btn btn-success btn-xs pull-right"><span class="fa fa-plus"> </span> Employee</a>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Email</th>
                                                <th>Cell No</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($staff_records as $staff){ ?>
                                            <tr>
                                                <td><?php echo $staff->first_name." ".$staff->last_name; ?></td>
                                                <td><?php echo $staff->designation; ?></td>
                                                <td><?php echo $staff->email; ?></td>
                                                <td><?php echo '0'.$staff->cell_number; ?></td>
                                                <td style="width:230px;">
                                                    <a href="<?php echo site_url(); ?>/staff/delete/<?php echo $staff->id; ?>" class="btn btn-danger btn-xs">Delete</a>
                                                    <a href="<?php echo site_url(); ?>/staff/update_form/<?php echo $staff->id; ?>" class="btn btn-primary btn-xs">Update</a>
                                                    <a href="<?php echo site_url(); ?>/kpitb_panel/profile/<?php echo $staff->id; ?>" class="btn btn-info btn-xs">View</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <!-- tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>CNIC</th>
                                                <th>Email</th>
                                                <th>Cell No</th>
                                                <th>Operation</th>
                                            </tr>
                                        </tfoot -->
                                       </table>  
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2015 &copy; Rights Reserved: Kyber PakhtunKhwa IT Board Peshawar</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	
<?php $this->load->view('parts/footer');?>