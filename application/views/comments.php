<?php
    $this->load->view('parts/header');
    $this->load->view('parts/head_msgs');
    $this->load->view('parts/sidemenu');
?>
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function(){
    $.ajax({
        url:"<?php echo site_url('kpitb_letters/postload')?>",
        dataType: "html",
        success:function(ajaxresult){
            $("#Posts").html(ajaxresult);
        },
        });
    });
    function load() {
        $.ajax({
        url:"<?php echo site_url('kpitb_letters/postload')?>",
        dataType: "html",
        success:function(ajaxresult){
            $("#Posts").html(ajaxresult);
        }
        });
    }
    function Comment(id){
        var comment = $('#comment').val();
        var Userid = id;
        var Document = $('#Doc_ID').val();
        var Check=1;
        console.log(comment+' '+id+' '+Document);
        // $.ajax({
        //     url: "<?php echo site_url('kpitb_letters/AddComment')?>",
        //     type: 'POST',
        //     data: {comment: comment, userid: Userid , check : Check,Document:Document},
        //     complete: function() {
        //      load();
        //     }
        // });
    }
</script>
<!-- Page Sidebar -->
<div class="page-inner">
    <div id="main-wrapper">
    <div class="col-lg-12 col-md-12">
            <div class="panel info-box panel-white">
                <div class="panel-body bread">
                <h2 class="NoPadTop">Dashboard</h2>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>kpitb_panel/index">Dashboard</a></li>
                        <li><a href="#">File | Comments</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
        <!-- Letters Ends Here -->
<div class="col-md-12">
    <div class="profile-timeline">
        <ul class="list-unstyled">
            <li class="timeline-item" id="Posts">
                
            </li>
        </ul>
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
