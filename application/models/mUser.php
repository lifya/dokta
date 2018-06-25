<?php

class MUser extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->data['table_name']	= 'user';
		$this->data['primary_key']	= 'username';
	}

	public function login($data)
	 {
	  $result = $this->get_row(['username' => $data['username'], 'password' => $data['password']]);
	  if (!isset($result))
	   return $result;
	  $this->session->set_userdata(['username' => $result->username]);
	  return $result;
	 }


	public function tambah_data_user($object)
	{
		return $this->db->insert('user',$object);
	}
}

