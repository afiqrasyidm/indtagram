<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('user_model');
                $this->load->helper('url_helper');
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
	public function login()
	{

								$this->load->helper('form');
								$this->load->library('form_validation');

								$this->form_validation->set_rules('email', 'email', 'required',
									array('required' => 'Kamu harus mengisi email')
								);
								$this->form_validation->set_rules('password', 'password', 'required',  array('required' => 'Kamu harus mengisi password'));


								if ($this->form_validation->run() === FALSE)
								{
													$this->load->helper('url');
													$this->load->view('partials/header');
													$this->load->view('user/login');
													$this->load->view('partials/footer');

								}
								else
								{

										if( $this->user_model->login()){
											redirect('Home');
										}
										else{
											$data['login_invalid'] = "Tidak berhasil login, data kamu salah";

											$this->load->helper('url');
											$this->load->view('partials/header');
											$this->load->view('user/login', $data );
											$this->load->view('partials/footer');
										}
								}
	}
	public function register()
	{

			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('email', 'email', 'required|is_unique[users.email]',
				array('required' => 'Kamu harus mengisi email',
 							'is_unique'     => 'Email ini telah ada.'
				)

			);
			$this->form_validation->set_rules('password', 'password', 'required',  array('required' => 'Kamu harus mengisi password'));
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',  array('required' => 'Kamu harus mengisi konfirmasi password dengan benar'));


			if ($this->form_validation->run() === FALSE)
			{

				$this->load->helper('url');
				$this->load->view('partials/header');
				$this->load->view('user/register');
				$this->load->view('partials/footer');

			}
			else
			{

				$this->user_model->create();
				redirect('Home');
			}
	}

	public function logout(){

		session_start();
		$_SESSION = array();
		session_destroy();

			redirect('Home');
	}


}
