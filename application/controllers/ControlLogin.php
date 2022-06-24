<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlLogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function login_main()
	{
		redirect('welcome');
		
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
					$year = $this->db->get('tb_openyear')->row();
					set_cookie('username',$username,'3600'); 
					set_cookie('password',$password,'3600');

					$this->session->set_userdata(array('login_id' => $result->pers_id,'fullname'=> $result->pers_prefix.$result->pers_firstname.' '.$result->pers_lastname,'status'=> 'user','permission_menu' => $result->pers_workother_id,'user_img' => $result->pers_img,'year'=>$year->openyear_year));

					redirect('admin/admission/'.$this->input->post('openyear_year')); 
				}
				else
				{
					redirect('welcome');
					// $this->session->set_flashdata(array('msgerr'=> '<p class="login-box-msg text-center mt-3" style="color:red;" >ชื่อผู้ใช้ หรือ รหัส ไม่ถูกต้อง!</p>'));
					
				}
			}


	public function logout()
	{
		delete_cookie('username'); 
		delete_cookie('password'); 
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function CheckLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username == "admin"){

			if($username == "admin" && $password == "admin"){
				$this->session->set_userdata(array('loginAdminID' => "1",'fullname'=> "ผู้ดูแลระบบ","status"=>"admin"));
				//print_r($this->session->userdata()); exit();		
				redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata(array('status' => 'error','msg'=> 'NO','messge' => 'เลขบัตรประชาชนหรือวันเกิดไม่ถูกต้อง หรือ ยังไม่ได้ลงทะเบียนเรียน'));	
						redirect('welcome');
			}

		}else{
			if($username == "test" && $password == "1234"){
				$this->session->set_userdata(array('loginStudentID' => "19111",'fullname'=> "เด็กชายทดสอบ ขอให้ผ่าน"));
				//print_r($this->session->userdata()); exit();		
				redirect('dashboard');
			}else{
				$this->session->set_flashdata(array('status' => 'error','msg'=> 'NO','messge' => 'เลขบัตรประชาชนหรือวันเกิดไม่ถูกต้อง หรือ ยังไม่ได้ลงทะเบียนเรียน'));	
						redirect('welcome');
			}
		}

				
				
	}

}