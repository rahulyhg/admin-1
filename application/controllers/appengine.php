<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appengine extends CI_Controller {

	public function index()
	{
		$this->load->view('appengine_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */