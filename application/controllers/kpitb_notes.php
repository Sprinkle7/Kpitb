<?php
/**
* 
*/
class Kpitb_notes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$Data['listOfUsers']= $this->kpitb_model->getUsers();
		$this->load->view('notesindex');
	}
	public function Initiatenote()
	{
		$Data['listOfUsers']	= $this->kpitb_model->getUsers();
		$ColumnsToBeSelected = ['id','first_name','last_name'];
		$Data['Employee'] = $this->kpitb_model->SelectRowsDataDB('staff',$ColumnsToBeSelected);
		$this->load->view('notes',$Data);
	}
	public function Newnotes()
	{
		$outputData['listOfUsers']	= $this->kpitb_model->getUsers();
		$this->load->view('comments',$outputData);
	}
	public function Initiate()
	{
		if ($this->input->post('Letter')) {
			$AttachmentFile = $this->kpitb_model->FileUpload('Files'); 
			$AttachmentName    = $AttachmentFile['upload_data']['file_name'];
			$LetterData 		= array(
				'staff_id' 	=> $this->input->post('From'),
				'subject' 	=> $this->input->post('Subject'),
				'detail' 	=> $this->input->post('Details'),
				'sendto' 	=> $this->input->post('SendTo'),
				'attachment'		=> isset($AttachmentName) ? $AttachmentName : "",
				'time_stamp' 	=> date("Y-m-d H-i-s")
				);
			$this->kpitb_model->InsertDataintoTable('letter',$LetterData);
			$this->index();
		}
	}
	// // public function PostLoad()
	// // {
	// // 	$this->load->view('posts');
	// // }
	// public function CountLetter()
	// {
	// 	$WhereCondition = array('received'=>'0');
	// 	$Count['one'] = $this->kpitb_model->CountData('letter',$WhereCondition);
	// 	echo json_encode($Count);
	// }
	// public function AddComment()
	// {
	// 	$DataComment = array(
	// 				'staff_id' => $this->input->post('userid'),
	// 				'text' => $this->input->post('comment'),
	// 				'time_stamp' => date("Y-m-d H:i:s"),
	// 				'signature' => $this->input->post('check'),
	// 				'document_id' => $this->input->post('Document'),
	// 				);
	// 	$Query = $this->kpitb_model->InsertDataintoTable('comment',$DataComment);
	// 	if($Query)
	// 	{
	// 		return true;
	// 	}
	// }
	// // Ajax Loading Data
	// public function postload()
	// {
	// 	$row = array();
	// 	$WhereCondition = array('staff_id'=> $this->session->userdata('id'));
	// 	$Letters = $this->kpitb_model->SelectOneRowDataDB('letter',$WhereCondition);
	// 	$SelectFields = ['id','first_name','last_name','picture'];
	// 	$Staff = $this->kpitb_model->SelectRowsDataDB('staff',$SelectFields);
	// 	$RequiredFields = ['staff_id','text','time_stamp','document_id','signature'];
	// 	$Comments = $this->kpitb_model->SelectRowsDataDB('comment',$RequiredFields);
	// 	 if (!empty($Letters)) {
	// 	     foreach ($Letters as $EachPost) {
	// 	    if (!empty($Staff)) {
	// 	        foreach ($Staff as $EachPerson) {
	// 	            $StaffID = $EachPerson->id;
	// 	            if ($StaffID == $EachPost->staff_id) {
	// 				echo '<div class="col-md-6">';
	// 				echo '<div class="panel panel-white">';
	// 				echo '<div class="panel-body">';
	// 				echo '<div class="timeline-item-header">';
	// 				echo '<img src="'.base_url().'assets/VisualData/'.$EachPerson->picture.'" alt="">';
	// 				echo '<p>'.$EachPerson->first_name.' '.$EachPerson->last_name.'<span> Posted a Letter</span></p>';
	// 				echo '<small>';
	// 	    $Databasetime = $EachPost->time_stamp;
	// 	    echo  date("d-m-Y H:i", strtotime($Databasetime)).'hours ago</small>';
	// 	echo '</div>';
	// 	echo '<div class="timeline-item-post">';
	// 	echo '<img src="'.base_url().'assets/Attachments/'.$EachPost->attachment.'" alt="">';
	// 	echo '<p class="text-post">'.$EachPost->detail.'</p>';
	// 	echo '<div class="timeline-options">';
	// 	echo '<a href="#"><i class="icon-bubble"></i> Comment (2)</a>';
	// 	echo '</div>';
	// 	    if (!empty($Comments)) {
	// 	        foreach ($Comments as $EachComment) {
	// 	            if ($StaffID == $EachComment->staff_id) {
	// 	            	if ($EachPost->id == $EachComment->document_id) {
		            	
	// 	echo '<div class="timeline-comment">';
	// 	    echo '<div class="timeline-comment-header">';

	// 	    	$Database = $EachComment->time_stamp;
	// 	        echo '<img src="'.base_url().'assets/VisualData/'.$EachPerson->picture.'" alt="">';
	// 	        echo '<p>'.$EachPerson->first_name.' '.$EachPerson->last_name.' <small> '.date("H:i", strtotime($Database)).' hour ago</small></p>';
	// 	        if($EachComment->signature == '1'){
	// 	       	 echo '<span class="pull-right"><input checked type="checkbox" disabled></span>';
	// 	        }
	// 	    echo '</div>';
	// 	    echo '<p class="timeline-comment-text">'.$EachComment->text.'</p>';
	// 	echo '</div>';
	// 	}}}}
	// 	echo '<textarea class="form-control" placeholder="Comments" id="comment"></textarea>';
	// 	echo '<input type="hidden" id="Doc_ID" value="'.$EachPost->id.'">';
	// 	echo '<input type="hidden" id="Userid" value="'.$this->session->userdata("id").'">';
	// 	echo '<input type="checkbox" id="check"> Signature';
	// 	echo '<button class="btn-xs btn btn-info pull-right" onclick="Comment()">Comment</button>';
	// 	echo '</div>';
	// 	echo '</div>';  
	// 	echo '</div>';
	// 	echo '</div>';
	// 	}}}}}
	// }

}
?>