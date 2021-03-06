<?php
class staff extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function insert()
	{
		$first_name 	= $this->input->post("first_name");
		$last_name 		= $this->input->post("last_name");
		$cnic1 			= $this->input->post("cnic1");
		$cnic2 			= $this->input->post("cnic2");
		$cnic3 			= $this->input->post("cnic3");
		$cnic 			= $cnic1."-".$cnic2."-".$cnic3; 
		$email	 		= $this->input->post("email");
		$father_name	= $this->input->post("father_name");
		$mobile_no 		= $this->input->post("mobile_no");
		$designation 	= $this->input->post("designation");
		$Password 		= $this->input->post("password");
		$ModifiedPassword  = hash('sha256',$Password);
		$address 		= $this->input->post("address");
		$SignatureImage = $this->kpitb_model->do_upload('signature');
		$SignatureName  = $SignatureImage['upload_data']['file_name'];
		$ProfilePicture = $this->kpitb_model->do_upload('profilepicture');
		$ProfileName    = $ProfilePicture['upload_data']['file_name'];
		$data 			= array(
			'first_name' 	=> $first_name,
			'last_name' 	=> $last_name,
			'cnic' 			=> $cnic,
			'father_name' 	=> $father_name,
			'email' 		=> $email,
			'cell_number' 	=> $mobile_no,
			'designation' 	=> $designation,
			'password' 		=> $ModifiedPassword,
			'address' 		=> $address,
			'signature'		=> isset($SignatureName) ? $SignatureName : "",
			'picture'		=> isset($ProfileName) ? $ProfileName : "",
			'time_stamp' 	=> date("Y-m-d H-i-s")
			);
		$this->db->insert("staff",$data);
		$this->index();
	}

	public function index()
	{
		$data = array();
		$data['staff_records'] 	= $this->db->get("staff")->result();
		$this->load->view("view_all_user",$data);
	}
	public function create_staff()
	{
		$this->load->view('newuser.php');
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete("staff");
		redirect(site_url()."/staff");
	}
	public function update_form($id)
	{	
		$this->db->where('id',$id);
		$data['staff_records'] 	= $this->db->get("staff")->result();
		$this->load->view("staff_update_form",$data);
	}
	public function update($id)
	{
		$first_name 	= $this->input->post("first_name");
		$last_name 		= $this->input->post("last_name");
		$cnic1 			= $this->input->post("cnic1");
		$cnic2 			= $this->input->post("cnic2");
		$cnic3 			= $this->input->post("cnic3");
		$cnic 			= $cnic1."-".$cnic2."-".$cnic3; 
		$email	 		= $this->input->post("email");
		$father_name	= $this->input->post("father_name");
		$mobile_no 		= $this->input->post("mobile_no");
		$designation 	= $this->input->post("designation");
		$ModifiedPassword  = hash('sha256',$Password);
		$address 		= $this->input->post("address");
		$SignatureImage = $this->kpitb_model->do_upload('signature');
		$SignatureName  = $SignatureImage['upload_data']['file_name'];
		$ProfilePicture = $this->kpitb_model->do_upload('profilepicture');
		$ProfileName    = $ProfilePicture['upload_data']['file_name'];
		$data 			= array(
			'first_name' 	=> $first_name,
			'last_name' 	=> $last_name,
			'cnic' 			=> $cnic,
			'father_name' 	=> $father_name,
			'email' 		=> $email,
			'cell_number' 	=> $mobile_no,
			'designation' 	=> $designation,
			'password' 		=> $ModifiedPassword,
			'address' 		=> $address,
			'signature'		=> isset($SignatureName) ? $SignatureName : "",
			'picture'		=> isset($ProfileName) ? $ProfileName : "",
			'time_stamp' 	=> date("Y-m-d H-i-s")
			);
		$this->db->where('id',$id);	
		$this->db->update("staff",$data);	
		redirect(site_url()."/staff");
	}

}
?>