<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/head_msgs');
?>
            <!-- Navbar -->
            <?php $this->load->view('parts/sidemenu')?>
            <!-- Page Sidebar -->
            <div class="page-inner">
                <div id="main-wrapper">
                <div class="col-lg-12 col-md-12">
                    <div class="panel info-box panel-white">
                        <div class="panel-body bread">
                            <h2 class="NoPadTop">Permissions</h2>
                            <div class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="kpitb_panel/index">Dashboard</a></li>
                                    <li><a href="#">Permissions</a></li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <h3>General Operations</h3>
                            <hr>
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Messaging</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Comments</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Signature</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Staff Creation</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <h3>Files Operation</h3>
                                <hr>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Letter Recieving</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Initiate Letter</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Initiate Notes</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Approval</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Rejection</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Archive</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Deletion</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Modification</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="checkbox">
                                        <label for="">Nothing</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer">
                    <p class="no-s">2015 &copy; Rights Reserved: Kyber PakhtunKhwa IT Board Peshawar</p>
                </div>
            </div>
            <!-- Page Inner -->
        </main><!-- Page Content -->
<?php $this->load->view('parts/footer');?>