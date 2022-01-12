<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlLesson extends CI_Controller {

	public function __construct() {
		parent::__construct();
	

	}

    public function PageLesson($lesson = null,$name= null){
		$data['lesson'] = $lesson;
		$data['name'] = $name;

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/layout/navbar.php');
		$this->load->view('user/PageLesson.php');
		$this->load->view('user/layout/footer.php');
    }

	
    
}