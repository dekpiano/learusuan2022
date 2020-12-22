<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_login');
	}

	public function Login_main()
	{
		if(!empty(get_cookie('username')) && !empty(get_cookie('password')) ){
			$username = get_cookie('username');
			$password = get_cookie('password');
			if($this->Model_login->record_count($username, $password) == 1)
				{
					$result = $this->Model_login->fetch_user_login($username, $password);
					$this->session->set_userdata(array('login_id' => $result->pers_id,'fullname'=> $result->pers_prefix.$result->pers_firstname.' '.$result->pers_lastname,'status'=> 'user','permission_menu' => $result->pers_workother_id ,'user_img' => $result->pers_img));

					set_cookie('username',$username,'3600'); 
					set_cookie('password',$password,'3600');
					 redirect('admin');
				}
		}else{		

			redirect('welcome');
		
		}
		

		
	}

	public function validlogin()
	{
		
	

			$username = $this->input->post('username');
			$password = md5(md5($this->input->post('password')));

			//echo $password; exit();

			if($this->Model_login->record_count($username, $password) == 1)
				{
					$result = $this->Model_login->fetch_user_login($username, $password);
					$this->session->set_userdata(array('login_id' => $result->pers_id,'fullname'=> $result->pers_prefix.$result->pers_firstname.' '.$result->pers_lastname,'status'=> 'user','permission_menu' => $result->pers_workother_id ,'user_img' => $result->pers_img));

					set_cookie('username',$username,'3600'); 
					set_cookie('password',$password,'3600');

					$this->session->set_userdata(array('login_id' => $result->pers_id,'fullname'=> $result->pers_prefix.$result->pers_firstname.' '.$result->pers_lastname,'status'=> 'user','permission_menu' => $result->pers_workother_id,'user_img' => $result->pers_img));

					redirect('admin/admission/'.$this->input->post('openyear_year')); 
				}
				else
				{
					redirect('welcome');
					// $this->session->set_flashdata(array('msgerr'=> '<p class="login-box-msg text-center mt-3" style="color:red;" >ชื่อผู้ใช้ หรือ รหัส ไม่ถูกต้อง!</p>'));
					
				}
			
		
		
	}

	public function close_system(){
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['title'] = 'ปิดรับสมัครเรียน';
		$data['description'] = 'ปิดรับสมัครเรียน';
		$data['switch'] = $this->db->get("tb_onoffsys")->result();
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navber.php');
		$this->load->view('stu_close.php');
		$this->load->view('layout/footer.php');
		
	}

	public function logout()
	{
		delete_cookie('username'); 
		delete_cookie('password'); 
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function CheckLogin(){
		$dm = date('m-d',strtotime($this->input->post('recruit_birthday')));
		$Y = date('Y',strtotime($this->input->post('recruit_birthday')))-543;
		$brith = $Y.'-'.$dm;
	
		
		// $status = $this->recaptcha_google($this->input->post('captcha')); 
        // if ($status['success']) {
			$result = $this->Model_login->Student_Login($this->input->post('recruit_idCard'),$brith);
	
				if (count($result) <= 0 ) {
					$this->session->set_flashdata(array('status' => 'error','msg'=> 'NO','messge' => 'ไม่มีข้อมูลในระบบ หรือ ยังไม่ได้ลงทะเบียนเรียน'));	
					redirect('login');
					}else{	
						$this->session->set_userdata(array('loginStudentID' => $result[0]->recruit_id,'fullname'=> $result[0]->recruit_prefix.$result[0]->recruit_firstName.' '.$result[0]->recruit_lastName));
						//print_r($this->session->userdata()); exit();		
						redirect('StudentHome');
						
					}	
        

	}

}