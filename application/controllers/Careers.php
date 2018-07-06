<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

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
	 
  
	public function Benefits()
	{
		$this->load->view('subheader');
		$this->load->view('Benefits');
		$this->load->view('footer');
		
	}

	public function Current_Openings()
	{
 		$this->load->view('subheader');
		$this->load->view('current openings');
		$this->load->view('footer');
	}

	public function Current_Openings_page2()
	{
		$this->load->view('subheader');
		$this->load->view('currentopenings2');
		$this->load->view('footer');
	}

    public function Referral_Program()
	{
		$this->load->view('subheader');
		$this->load->view('Referral Program');
		$this->load->view('footer');
	}

	 public function Send_Your_Resume()
	{
		$this->load->view('subheader');
		$this->load->view('Send Resume');
		$this->load->view('footer');
	}



}