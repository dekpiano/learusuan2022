<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlLesson extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
	

	}

	function getClient()
	{
		$path = dirname(dirname(dirname(dirname(dirname(__FILE__)))));	
		require_once $path.'/librarie_skj/google_sheet/vendor/autoload.php';
		// require_once APPPATH. 'libraries/vendor/autoload.php';
	
		 // Our service account access key
		 $googleAccountKeyFilePath = 'service_key.json';
		 putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);
	 
		 // Create new client
		 $client = new Google_Client();
		 // Set credentials
		 $client->useApplicationDefaultCredentials();
	 
		 // Adding an access area for reading, editing, creating and deleting tables
		 $client->addScope('https://www.googleapis.com/auth/spreadsheets');
	 
		 $service = new Google_Service_Sheets($client);
	 
		 // you spreadsheet ID
		 
		return $service;
	}

    public function PageLesson($lesson = null,$name= null){
		$data['lesson'] = $lesson;
		$data['name'] = $name;
	

		 $this->load->view('user/layout/header.php',$data);
		 $this->load->view('user/layout/navbar.php');
		 $this->load->view('user/PageLesson.php');
		 $this->load->view('user/layout/footer.php');
    }

	public function PageCheckCertificate($lesson = null,$name= null){
		$data['lesson'] = $lesson;
		$data['name'] = $name;

			
		$this->load->helper('array');
        $service = $this->getClient();
		$range = 'c1!A1:D';  // TODO: Update placeholder value.
		if($name ==="หลักสูตรการศึกษาครั้งแรกในประเทศไทย" && $lesson == 1){
			$spreadsheetId = '1E82u8VfsAtmGxqFM0eh4O5QQaFIAnIE47dfW1xwxMH0';
			$data['response'] = $service->spreadsheets_values->get($spreadsheetId, $range);
			$data['numRows'] = $data['response']->getValues() != null ? count($data['response']->getValues()) : 0;
		}elseif($name ==="เส้นทางเดินจากวังสู่วัด" && $lesson == 1){			
				$spreadsheetId = '1N_xo8JeUdjdluh4u2novr1Rv96-XT0aYJMpl_mgs1g4';
				$data['response'] = $service->spreadsheets_values->get($spreadsheetId, $range);
				$data['numRows'] = $data['response']->getValues() != null ? count($data['response']->getValues()) : 0;			
		}
		else{
			$data['response'] = "";
			$data['numRows'] = "";
		}
       
		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/layout/navbar.php');
		$this->load->view('user/PageCertificate.php');
		$this->load->view('user/layout/footer.php');


	}

	
    
}