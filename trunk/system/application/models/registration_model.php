<?php
class registration_model extends Model
{
	function registration_model()
	{
		parent::Model();
	}

	function add_user()
	{
		$data = array(
			'login' => $this->input->post('login') ,
			'email' => $this->input->post('email') ,
			'password' => $this->input->post('password') ,
		);

		$this->db->insert('users', $data);
	}
}
?>
