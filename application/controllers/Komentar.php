<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

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
			$this->load->model('komentar_model');
			$this->load->helper('url_helper');
 		  session_start();
	}
	public function create($id)
	{

    			$this->load->helper('form');


          if( isset($_SESSION["email_user"]) ){


          				$this->komentar_model->create($id);
                  redirect('Gambar/detail/'.$id);
    			}
          else {
            	redirect('Home');
          }

	}

}
