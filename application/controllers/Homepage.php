<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller {

	function __construct ()
	{
		parent::__construct();
    //$this->output->enable_profiler(TRUE);
  }

	public function index()
	{
		$this->load->view('Homepage_view');
	}

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */