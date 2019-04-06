<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
					parent::__construct();
					$this->load->model('gambar_model');
					$this->load->helper('url_helper');
					session_start();
	}
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
	public function index()
	{
					$data["datas_gambar"] = $this->gambar_model->get_all();

					$this->load->view('partials/header');
					$this->load->view('index', $data);
					$this->load->view('partials/footer');

	}
}
