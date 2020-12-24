<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admission extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		$this->load->model('model_admission');
		$switch = $this->db->get("tb_onoffsys")->result();
		if($switch[0]->onoff_system == 'off'){
			redirect('CloseSystem');
		}
		
	}
	public function recaptcha_google($captcha)
	{
		$recaptchaResponse = $captcha;
		$userIp=$this->input->ip_address();
     
        $secret = "6LdZePgUAAAAANhhOGZi6JGWmQcETK7bkT7E0edR";
   
        $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
 
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
         
        return $status= json_decode($output, true);
	}

	public function dataAll()
	{		
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['switch'] = $this->db->get("tb_onoffsys")->result();
		$data['year'] = $this->db->select('recruit_year')->from('tb_recruitstudent')->group_by('recruit_year')->order_by('recruit_year','DESC')->get()->result();
		$data['checkYear'] = $this->db->select('*')->from('tb_openyear')->get()->result();
		return $data;
	}

	public function index()
	{
		
		$data = $this->dataAll();
		$data['title'] = "รับสมัครนักเรียนปีการศึกษา 2563";
		$data['description'] = "รับสมัครนักเรียนวันนี้ จนถึง 25 พฤษภาคม 2563";
		
		$data['m1'] = $this->db->select('recruit_id,recruit_regLevel,recruit_status,recruit_tpyeRoom,recruit_prefix,recruit_firstName,recruit_lastName')
		->where('recruit_regLevel','1')
		->get('tb_recruitstudent')->num_rows();
		$data['m4'] = $this->db->select('recruit_id,recruit_regLevel,recruit_status,recruit_tpyeRoom,recruit_prefix,recruit_firstName,recruit_lastName')
		->where('recruit_regLevel','4')
		->get('tb_recruitstudent')->num_rows();

		
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navber.php');
		$this->load->view('page_main.php');
		$this->load->view('layout/footer.php');
	}



	public function reg_student($id)
	{
		//redirect('CloseStudent'); 
		$data = $this->dataAll();
		$data['title'] = 'สมัครเรียนใหม่';
		$data['description'] = 'สมัครเรียนใหม่';

		
		//
		if ($id > 0) {
			$this->load->view('layout/header.php',$data);
			$this->load->view('AdminssionRegister.php');
			$this->load->view('layout/footer.php');
		}		
	}



	public function welcome_student($id=''){

		$data = $this->dataAll();
		$data['title'] = 'ลงทะเบียนสำเร็จแล้ว';
		$data['description'] = 'ลงทะเบียนสำเร็จแล้ว';
		//print_r($id);
		if ($id == 'Succeed') {
			$this->session->set_flashdata(array('msg'=> 'ํYES','messge' => 'ลงทะเบียนสำเร็จแล้ว'));
			redirect('welcome');
		}elseif($id == 'Error'){
			$this->session->set_flashdata(array('msg'=> 'NO','messge' => 'เลขประจำตัวประชาชน คุณได้ลงทะเบียนแล้ว กรุณาตรวจสอบการสมัคร'));
	?>
<script type="text/javascript">
setTimeout(function() {
    window.history.back();
}, 1000);
</script>
<?php }else{
					redirect('RegStudent');
				}
	}

	function NumberID(){
		$openyear = $this->db->select('openyear_year')->get('tb_openyear')->row();
		$chk_id = $this->db->select('recruit_id')->order_by('recruit_id','DESC')->get('tb_recruitstudent')->row();
		
		if($chk_id == ""){
			$year =  $openyear->openyear_year;
			return $year."0001"; 
		}else{
			$year =  explode($chk_id->recruit_id,$openyear->openyear_year);
			$number =  explode($openyear->openyear_year,$chk_id->recruit_id);
			$s = sprintf("%04d",$number[1]+1);
			return $year[0].$s;
		}
	}


	public function reg_insert()
	{	
		$data = $this->dataAll();
		$status = $this->recaptcha_google($this->input->post('captcha')); 
		//print_r($status); exit();
        if ($status['success']) {

		//print_r($this->input->post('recruit_idCard'));
		$data['chk_stu'] = $this->db->where('recruit_idCard',$this->input->post('recruit_idCard'))->get('tb_recruitstudent')->result();
		if (count($data['chk_stu']) > 0) {
			$this->session->set_flashdata(array('msg'=> 'NO','messge' => 'คุณได้ลงทะเบียนแล้ว กรุณาตรวจสอบการสมัคร','status'=>'error'));
			redirect('welcome');
		}else{
		$data_insert = array();
		

		$recruit_birthday = ($this->input->post('recruit_birthdayY')-543).'-'.$this->input->post('recruit_birthdayM').'-'.$this->input->post('recruit_birthdayD');
		$data_insert += array(
			'recruit_id'  => $this->NumberID(),
			'recruit_regLevel' => $this->input->post('recruit_regLevel'),
			'recruit_prefix' => $this->input->post('recruit_prefix'),
			'recruit_firstName' => $this->input->post('recruit_firstName'),
			'recruit_lastName' => $this->input->post('recruit_lastName'),
			'recruit_oldSchool' => $this->input->post('recruit_oldSchool'),
			'recruit_district' => $this->input->post('recruit_district'),
			'recruit_province' => $this->input->post('recruit_province'),
			'recruit_birthday' => $recruit_birthday,
			'recruit_race' => $this->input->post('recruit_race'),
			'recruit_nationality' => $this->input->post('recruit_nationality'), 
			'recruit_religion' => $this->input->post('recruit_religion'),
			'recruit_idCard' => $this->input->post('recruit_idCard'),
			'recruit_phone' => $this->input->post('recruit_phone'),
			'recruit_homeNumber' => $this->input->post('recruit_homeNumber'),
			'recruit_homeGroup' => $this->input->post('recruit_homeGroup'),
			'recruit_homeRoad' => $this->input->post('recruit_homeRoad'),
			'recruit_homeSubdistrict' => $this->input->post('recruit_homeSubdistrict'),
			'recruit_homedistrict' => $this->input->post('recruit_homedistrict'),
			'recruit_homeProvince' => $this->input->post('recruit_homeProvince'),
			'recruit_homePostcode' => $this->input->post('recruit_homePostcode'),
			'recruit_tpyeRoom' => $this->input->post('recruit_tpyeRoom'),
			'recruit_date'	=> date('Y-m-d'), 						
			'recruit_year' => $data['checkYear'][0]->openyear_year,
			'recruit_status' => "รอการตรวจสอบ"
			);


			if($_FILES['recruit_img']['error']==0){
				$imageFileType = strtolower(pathinfo($_FILES['recruit_img']['name'],PATHINFO_EXTENSION));						
				$file_check = $_FILES['recruit_img']['error'];
				$foder = 'img';
				$do_upload = 'recruit_img';
				$rand_name = $this->input->post('recruit_idCard').rand();				
					$data_insert += array('recruit_img' => $rand_name.'.'.$imageFileType);	
					$this->reg_img($foder,$do_upload,$imageFileType,$rand_name,$data_insert);
				

			}if($_FILES['recruit_certificateEdu']['error']==0){
				$imageFileType = strtolower(pathinfo($_FILES['recruit_certificateEdu']['name'],PATHINFO_EXTENSION));						
				$file_check = $_FILES['recruit_certificateEdu']['error'];
				$foder = 'certificate';
				$do_upload = 'recruit_certificateEdu';
				$rand_name = $this->input->post('recruit_idCard').rand();				
					$data_insert += array('recruit_certificateEdu' => $rand_name.'.'.$imageFileType);
					$this->reg_img($foder,$do_upload,$imageFileType,$rand_name,$data_insert);
				
			}if($_FILES['recruit_copyidCard']['error'] == 0){
				$imageFileType = strtolower(pathinfo($_FILES['recruit_copyidCard']['name'],PATHINFO_EXTENSION));						
				$file_check = $_FILES['recruit_copyidCard']['error'];
				$foder = 'copyidCard';
				$do_upload = 'recruit_copyidCard';
				$rand_name = $this->input->post('recruit_idCard').rand();				
					$data_insert += array('recruit_copyidCard' => $rand_name.'.'.$imageFileType);
					$this->reg_img($foder,$do_upload,$imageFileType,$rand_name,$data_insert);
				
			}if($_FILES['recruit_copyAddress']['error'] == 0){
				$imageFileType = strtolower(pathinfo($_FILES['recruit_copyAddress']['name'],PATHINFO_EXTENSION));						
				$file_check = $_FILES['recruit_copyAddress']['error'];
				$foder = 'copyAddress';
				$do_upload = 'recruit_copyAddress';
				$rand_name = $this->input->post('recruit_idCard').rand();
				$data_insert += array('recruit_copyAddress' => $rand_name.'.'.$imageFileType);
					$this->reg_img($foder,$do_upload,$imageFileType,$rand_name,$data_insert);
			}

			//print_r($data_insert);

				if($this->model_admission->student_insert($data_insert) == 1){
				
					$this->session->set_flashdata(array('msg'=> 'Yes','messge' => 'สมัครเรียนสำเร็จ','status'=>'success'));					
						// define('LINE_API',"https://notify-api.line.me/api/notify"); 
						// $token = "E9GFruPeXW6Mogn156Pllr1D8wWiY69BHfpKzLHBxcj"; 
						// $str = "มีนักเรียนสมัครเรียนใหม่\n".'ตรวจสอบ : '.base_url('admin/recruitstudent');	
						// $res = $this->notify_message($str,$token);
						// $data = $this->dataAll();

						redirect('welcome');
				}

			}
		//exit();
		}else{
			echo "Error Recapcha ";
		}
	}

	public function reg_img($foder,$do_upload,$imageFileType,$rand_name,$data_insert)
	{
		
		 $config['upload_path']   = 'uploads/recruitstudent/m'.$this->input->post('recruit_regLevel').'/'.$foder.'/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = '*'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 0; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['file_name']  = $rand_name.'.'.$imageFileType; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload($do_upload))
			{
				$data = array('upload_data' => $this->upload->data());				
				$this->session->set_flashdata(array('alert1' => 'success','msg'=> 'NO','messge' => 'แก้ไขข้อมูลสำเร็จ รอตรวจสอบข้อมูล... 4 - 6 ชั่วโมง '));					 	
				
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error['error']);
				
			}
	}
	
	public function checkdata_student()
	{	
		$data = $this->dataAll();
		$data['title'] = 'ตรวจสอบและแก้ไขการสมัคร';
		$data['description'] = 'ตรวจสอบและแก้ไขการสมัคร';
		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navber.php');
		$this->load->view('stu_checkdata.php');
		$this->load->view('layout/footer.php');
	}

	public function data_user()
	{
		
		$data = $this->dataAll();
		$data['title'] = 'แก้ไขชื่อผู้สมัครสอบ';
		$data['description'] = 'แก้ไขชื่อผู้สมัครสอบ';
		
		$status = $this->recaptcha_google($this->input->post('captcha')); 
        if ($status['success']) {
			
			
			$data['chk_stu'] = $this->db->where('recruit_idCard',$this->input->post('search_stu'))->get('tb_recruitstudent')->result();
				if (count($data['chk_stu']) <= 0 ) {
					$this->session->set_flashdata(array('alert1' => 'success','msg'=> 'NO','messge' => 'ไม่มีข้อมูลในระบบ หรือ ยังไม่ได้ลงทะเบียนเรียน'));	
					redirect('StudentLogin');
					}else{			
						$this->session->set_userdata(array('IDstudent'=>$data['chk_stu'][0]->recruit_id));			
						redirect('StudentData');
					}	
        }else{
			// $this->session->set_flashdata(array('alert1' => 'warning','msg'=> 'NO','messge' => 'ยืนยันฉันไม่ใช่โปรแกรมอัตโนมัติ'));	
			redirect('StudentLogin');
        }
	}


	
	function notify_message($message,$token){
		$queryData = array('message' => $message);
		$queryData = http_build_query($queryData,'','&');
		$headerOptions = array( 
				'http'=>array(
					'method'=>'POST',
					'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
							."Authorization: Bearer ".$token."\r\n"
							."Content-Length: ".strlen($queryData)."\r\n",
					'content' => $queryData
				),
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API,FALSE,$context);
		$res = json_decode($result);
		return $res;
		}

	public function print_student()
	{
		
		$data = $this->dataAll();
		$data['title'] = 'ประกาศรายชื่อผู้สมัครสอบ';
		$data['description'] = 'ประกาศรายชื่อผู้สมัครสอบ';
		
		$data['m1'] = $this->db->select('recruit_id,recruit_regLevel,recruit_status,recruit_tpyeRoom,recruit_prefix,recruit_firstName,recruit_lastName')
		->where('recruit_regLevel','1')
		->get('tb_recruitstudent')->result();
		$data['m4'] = $this->db->select('recruit_id,recruit_regLevel,recruit_status,recruit_tpyeRoom,recruit_prefix,recruit_firstName,recruit_lastName')
		->where('recruit_regLevel','4')
		->get('tb_recruitstudent')->result();

		$this->load->view('layout/header.php',$data);
		$this->load->view('layout/navber.php');
		$this->load->view('stu_announce.php');
		$this->load->view('layout/footer.php');	
	}
	

	

	public function check_print()
	{
		$id = $this->input->post('id');
		$d = $this->input->post('recruit_birthdayD');
		$m = $this->input->post('recruit_birthdayM');
		$y = $this->input->post('recruit_birthdayY')-543;
		$date = $y.'-'.$m.'-'.$d;

		$where_d = array('recruit_birthday' => $date, 'recruit_id' => $id);
		$check = $this->db->select('recruit_birthday,recruit_id')->where($where_d)->get('tb_recruitstudent')->num_rows();
		if($check > 0){
			$data = $this->db->select('recruit_birthday,recruit_id')->where($where_d)->get('tb_recruitstudent')->result();
			echo base_url('control_admission/pdf/'.$data[0]->recruit_id);
		}else{
			echo $check;
		}
		
		
	}





}