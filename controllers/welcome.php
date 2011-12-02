<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Example controller to demonstrate use of the template library
 *
 * @package   template
 * @version   1.0
 * @author    Ollie Rattue, Too many tabs <orattue[at]toomanytabs.com>
 * @copyright Copyright (c) 2010, Ollie Rattue
 * @license   http://www.opensource.org/licenses/mit-license.php
 * @link      http://github.com/ollierattue/codeigniter-template
 */

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->library->load('template');
	}	

	// --------------------------------------------------------------------
	
	public function index()
	{
		$this->template->page_title('Welcome');
		$this->template->meta_description('Our great service is set to change the world');
		$this->template->body_id('welcome');
		$this->template->body_class('general');
		$this->template->build_page('welcome/welcome_index');
	}
	
	// --------------------------------------------------------------------
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */