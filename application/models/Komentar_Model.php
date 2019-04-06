<?php
class Komentar_model extends CI_Model {

    public function __construct()
    {
                $this->load->database();
    }

		public function create($id)
		{
			$this->load->helper('url');

      session_start();

			$data = array(
				'komentar' => $this->input->post('komentar'),
				'gambar_id' => $id,
        'user_id' => $_SESSION["user_id"]

			);

          $this->db->insert('komentar', $data);


			return true;

    }

    public function get_dengan_id_gambar($id_gambar){

      $query = $this->db->get_where('komentar', array( 'gambar_id' => $id_gambar));

      return $query->result_array();

    }






}
