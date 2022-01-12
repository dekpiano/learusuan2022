<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}

	public static $title = "โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์";
	public static $description = "เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง สนองคุณแผ่นดิน โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์";
	
	public function index()	{
		

		$this->load->view('user/layout/header.php');
		$this->load->view('user/layout/navbar.php');
		$this->load->view('user/PageMain.php');
		$this->load->view('user/layout/footer.php');
	}

	// public function not_404()
	// {
	// 	$this->load->view('errors/404.php');
	// }

	
	
}
