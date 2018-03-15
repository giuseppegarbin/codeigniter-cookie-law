<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public $global = array();

	function __construct ()
	{
		parent::__construct();
		$this->load->helper('cookie');

		$this->global['cookie_name'] = "ci_cc";

		if ( ! get_cookie($this->global['cookie_name']) ) 
		{
			$this->global['cookie_consent_given'] = FALSE;
			$this->global['cookie_consent_value'] = FALSE;
		}
		else
		{
			$this->global['cookie_consent_given'] = TRUE;
			$this->global['cookie_consent_value'] = $this->input->cookie($this->global['cookie_name'], false);			
		}

  }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */