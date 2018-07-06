<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expertise extends CI_Controller {

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
	public function Telecommunications()
	{
		$this->load->view('subheader');
		$this->load->view('Telecommunications');
		$this->load->view('footer');
	}

	public function Financial_Services()
	{
		$this->load->view('subheader');
		$this->load->view('Financial');
		$this->load->view('footer');
	}

	public function Insurance()
	{
		$this->load->view('subheader');
		$this->load->view('Insurance');
		$this->load->view('footer');
	}

	public function Manufacturing_Retail()
	{
		$this->load->view('subheader');
		$this->load->view('Manufacturing');
		$this->load->view('footer');
	}

	public function Government()
	{
		$this->load->view('subheader');
		$this->load->view('Government');
		$this->load->view('footer');
	}

	public function OffShore()
	{
		$this->load->view('subheader');
		$this->load->view('OffShore');
		$this->load->view('footer');
	}
}