<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlStudent extends CI_Controller {

	public function __construct() {
		parent::__construct();
	

	}

	public function PageDashboard(){
		$this->load->view('user/layout/header.php');
		$this->load->view('user/layout/navbar.php');
		$this->load->view('user/PageDashBoard.php');
		$this->load->view('user/layout/footer.php');
	}


	public function CheckAns(){

		$numOfQstns = sizeof($this->input->post());
		$score = 0;

		$subjectName = "ความรู้ทั่วไป";
		//เฉลยข้อที่ถูก -- ไม่จำกัดจำนวนข้อ
		$correctAns=array("ง","ค","ก","ง","ค"); 
		//เกณฑ์การผ่านขั้นต่ำ
		$cutpoint = 60;
		
		// รับคำตอบ
			for ($i=1; $i<=$numOfQstns; $i++)
			{
			$stAns[$i-1] = $this->input->post('question'.$i);  
			}
			// ตรวจคำตอบ
			for ($i=0; $i<=($numOfQstns-1); $i++)
			{
			$correct = $correctAns[$i];
			$stAnswer = $stAns[$i];
			if($stAnswer == $correct) {
			$score++;
			}
		}
		 //echo $score;
		 $this->session->set_flashdata(array('status' => 'error','msg'=> 'NO','messge' => $score));
		//cho $percentage = number_format($score/$numOfQstns*100, 2, '.', '');
		redirect(base_url()."lesson/3/ความเป็นมา");
	}

	
}