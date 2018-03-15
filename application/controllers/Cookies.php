<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cookies extends MY_Controller {

	function __construct ()
	{
		parent::__construct();
  }

	public function index()
	{
		$action =  $this->uri->segment(2);
  	$check =  $this->uri->segment(3);
  	$control = FALSE;
  	$cookie_value = FALSE;

  	switch ($action) 
  	{
  		case 'accept':
  			$control = TRUE;
  			$cookie_value = 'Accepted';
  			break;
  		case 'decline':
  			$control = TRUE;
  			$cookie_value = 'Declined';
  			break;
  	}

		if ($control === FALSE AND $check === NULL) 
		{
			show_404();
		}
		else
		{
		$this->load->helper('cookie');
		$cookie= array(
			'name'   => $this->global['cookie_name'],
			'value'  => $cookie_value,
			'expire' => 60*60*24*30,
			'secure' => FALSE
    );
    $this->input->set_cookie($cookie);
    redirect('homepage','refresh');
		}

	}

}

/* End of file Cookies.php */
/* Location: ./application/controllers/Cookies.php */