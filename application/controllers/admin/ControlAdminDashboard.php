<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAdminDashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();	
		if (empty($this->session->userdata('fullname')) && !$this->session->userdata('status') == 'admin') {      
			redirect(base_url(),'refresh');
		}
	}

	public function PageAdminLogin(){
		$this->load->view('user/layout/header.php');
		$this->load->view('user/layout/navbar.php');
		$this->load->view('user/PageDashBoard.php');
		$this->load->view('user/layout/footer.php');
	}

	public function PageAdminDashboard(){
		$this->load->view('admin/layout/AdminHeader.php');
		$this->load->view('admin/layout/AdminNavbar.php');
		$this->load->view('admin/PageAdminDashboard.php');
		$this->load->view('admin/layout/AdminFooter.php');
	}


	
}