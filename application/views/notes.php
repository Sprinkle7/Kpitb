<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/head_msgs');
    $this->load->view('parts/sidemenu');
?>
<link href="<?php echo base_url();?>assets/editor.css" rel="stylesheet"/>
            <!-- Page Sidebar -->
            <div class="page-inner"> 
                <div id="main-wrapper"> 
                    <div class="col-lg-12 col-md-12">
                        <div class="panel info-box panel-white">
                            <div class="panel-body bread">
                            <h2 class="NoPadTop">Letter</h2>
                            <div class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url();?>kpitb_panel/index">Dashboard</a></li>
                                    <li>Letter</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Bread Crumb -->
                    <!-- Letters Ends Here -->
                    <div class="col-lg-12 col-md-12">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <?php echo form_open_multipart(base_url().'kpitb_notes/Initiate')?>
                                    <div class="form-group col-md-8 col-lg-4">
                                        <label for="">Send To</label>
                                        <br>
                                        <select id="example-post" class="form-control" name="SendTo[]" multiple="multiple">
                                           <?php if (!empty($Employee)) {
                                                foreach ($Employee as $Person) {
                                                    echo '<option value="'.$Person->id.'">'.$Person->first_name.' '.$Person->last_name.'</option>';
                                                }
                                            }?>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-8 col-lg-4">
                                        <label for="">Subject</label>
                                        <input type="text" name="Subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-8 col-lg-8">
                                        <label for="">Details</label>
                                       <textarea id="txtEditor" name="Details"></textarea> 
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-8 col-lg-4">
                                        <label for="">Attachments</label>
                                        <input type="file" name="Files" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-8 col-lg-4">
                                        <input type="hidden" name="From" value="<?php echo $this->session->userdata('id');?>">
                                        <input type="submit" name="Letter" value="Send Letter" class="btn btn-success">
                                    </div>
                                <?php echo form_close();?>
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
<script src="<?php echo base_url();?>assets/js/bootstrap-multiselect.js"></script>
<script src="<?php echo base_url();?>assets/editor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example-post').multiselect({
        includeSelectAllOption: true,
        enableFiltering: true
    });
});
</script>
<script>
    $(document).ready(function() {
        $("#txtEditor").Editor();
    });
</script>