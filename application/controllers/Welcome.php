<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		$switch = $this->db->get("tb_onoffsys")->result();
		if($switch[0]->onoff_system == 'off'){
			redirect('CloseSystem');
		}

	}

	public static $title = "โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์";
	public static $description = "เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง สนองคุณแผ่นดิน โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์";
	
	public function index()
	{
		

		$data['year'] = $this->db->select('recruit_year')->from('tb_recruitstudent')->group_by('recruit_year')->order_by('recruit_year','DESC')->get()->result();
		$data['checkYear'] = $this->db->select('*')->from('tb_openyear')->get()->result();

		$data['switch'] = $this->db->get("tb_onoffsys")->result();

		$db2 = $this->load->database('skjmain', TRUE);	
		$data['title'] = "รับสมัครนักเรียนปีการศึกษา".$data['checkYear'][0]->openyear_year;
		$data['description'] = "รับสมัครนักเรียนวันนี้ จนถึง 25 พฤษภาคม 2563";
		
		

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/menu_top.php');
		$this->load->view('AdminssionHome.php');
		$this->load->view('layout/footer.php');
	}

	public function not_404()
	{
		$this->load->view('errors/404.php');
	}
	
}
