<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAdminSubstance extends CI_Controller {

	public function __construct() {
		parent::__construct();	
		if (empty($this->session->userdata('fullname')) && !$this->session->userdata('status') == 'admin') {      
			redirect(base_url(),'refresh');
		}
		$this->load->model('admin/AdminModelSubstance');
	}

	public function PageAdminSubstanceMain(){
		$data['title'] = "จัดการสาระหน่วยการเรียนรู้";
		$this->load->view('admin/layout/AdminHeader.php',$data);
		$this->load->view('admin/layout/AdminNavbar.php');
		$this->load->view('admin/substance/PageAdminSubstanceMain.php');
		$this->load->view('admin/layout/AdminFooter.php');
	}

	public function InsertSubstance(){
		$data = array('subs_unit' => $this->input->post('subs_unit'),
						'subs_title' => $this->input->post('subs_title'), );
		echo $this->AdminModelSubstance->SubsInsert($data);

	}


	
}