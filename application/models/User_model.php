<?php
class User_model extends CI_Model {

    public function __construct()
    {
                $this->load->database();
    }

		public function create()
		{
			$this->load->helper('url');


			$data = array(
				'email' => $this->input->post('email'),
				'password' => hash('ripemd160', $this->input->post('password'))
			);

      session_start();
      $_SESSION["email_user"] = $this->input->post('email');

			return $this->db->insert('users', $data);
		}

    public function login(){

      $query = $this->db->get_where('users',
                                    array( 'email' => $this->input->post('email'),
                                           'password' => hash('ripemd160', $this->input->post('password'))
                                    ));

      $data['user'] = $query->row_array();

      if( empty($data['user']) ){
        return false;
      }
      else{
        session_start();
        $_SESSION["email_user"] = $data['user']['email'];
        return true;
      }

    }

		public function get($email){

			$query = $this->db->get_where('users', array( '$email' => $email));

			return $query->row_array();

		}





}
