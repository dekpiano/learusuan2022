<?php
class AdminModelSubstance extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
	}

	public function SubsInsert($data)
	{
		$this->db->insert('tb_substance',$data);
	}


}