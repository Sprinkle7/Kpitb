<?php 
$this->load->view('parts/header');
$this->load->view('parts/head_msgs');
$this->load->view('parts/sidemenu');?>
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script>
function loadIt() {
  $.get('<?php echo site_url('kpitb_letters/CountLetter')?>', function(data) {
    var jdata = JSON.parse(data);
    $('#New').text(jdata.one);
  });
}
setInterval(loadIt, 1000);
</script>
<!-- Page Sidebar -->
<div class="page-inner">
    <div id="main-wrapper">
    <div class="col-lg-12 col-md-12">
            <div class="panel info-box panel-white">
                <div class="panel-body bread">
                <h2 class="NoPadTop">Dashboard</h2>
            </div>
        </div>
    </div>
    <!-- End This -->
        <div class="col-lg-4 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-body">
                <a href="<?php echo base_url();?>kpitb_letters/NewLetters">
                    <div class="info-box-stats">
                        <p style="margin-top:0.5em;">Letters</p>
                        <span class="info-box-title">See New Letters</span>
                    </div>
                    <div class="info-box-icon">
                        <label for="" class="pull-left">New </label><span class="pull-right badge badge-warning" id="New"></span><br>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-body">
                <a href="<?php echo base_url();?>kpitb_letters/InitiateLetter">
                    <div
                 class="info-box-stats">
                        <p style="margin-top:0.5em;">Initiate Letter</p>
                        <span class="info-box-title">Initiate Letters</span>
                    </div>
                    <!-- <div class="info-box-icon">
                        <label for=""  class="pull-left">Approved </label><span class="pull-right badge badge-success">14</span><br>
                        <label for=""  class="pull-left">Pending </label><span class="pull-right badge">14</span><br>
                        <label for=""  class="pull-left">Rejected </label><span class="pull-right badge badge-danger">14</span>
                    </div> -->
                </a>
                </div>
            </div>
        </div>
        <!-- Letters Ends Here -->
        
    </div>
    <div class="page-footer">
        <p class="no-s">2015 &copy; Rights Reserved: Kyber PakhtunKhwa IT Board Peshawar</p>
    </div>
</div>
</main>
