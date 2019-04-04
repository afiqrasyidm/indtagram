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
				'url' => $data["full_path"]
			);
      $this->db->insert('gambar', $data);

			return true;

    }




}
