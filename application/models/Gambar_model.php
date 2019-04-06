<?php
class Gambar_model extends CI_Model {

    public function __construct()
    {
                $this->load->database();
    }

		public function create($data)
		{
			$this->load->helper('url');

      session_start();

			$data = array(
				'user_id' =>   $_SESSION["user_id"],
				'file_name' => $data["file_name"]
			);
      $this->db->insert('gambar', $data);

			return true;

    }

    public function get($id){

      $query = $this->db->get_where('gambar', array( 'gambar_id' => $id));

      return $query->row_array();

    }

    public function get_all(){

            $this->db->select('*');
            $this->db->from('gambar');
            $this->db->join('users', 'users.user_id = gambar.user_id');
            $query = $this->db->get();
            return $query->result_array();;

    }


}
