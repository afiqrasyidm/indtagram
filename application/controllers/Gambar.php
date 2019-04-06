<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct(){
 			parent::__construct();
			$this->load->model('gambar_model');
			$this->load->model('komentar_model');
			$this->load->helper('url_helper');
 		  $this->load->helper(array('form', 'url'));
			session_start();
	}
	public function upload()
	{
		if( isset($_SESSION["email_user"]) ){


					$config['upload_path']          = './gambar/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 100;
					$config['max_width']            = 1024;
					$config['max_height']           = 768;

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('gambar')){
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('partials/header');
						$this->load->view('gambar/upload', $error);

					}else{

							$this->gambar_model->create($this->upload->data());
							redirect('Home');
					}
		}
		else{
			redirect('Home');

		}

	}
  public function detail($id)
  {

					$data = $this->gambar_model->get($id);
					$data['id'] = $id;
					$data['komentar_data'] = $this->komentar_model->get_dengan_id_gambar($id);

          $this->load->view('partials/header');
          $this->load->view('gambar/detail', $data);
          $this->load->view('partials/footer');
  }
}
