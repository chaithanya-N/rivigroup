<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CaseStudy extends CI_Controller {

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
	 
 
	public function Strategy_Management_Consulting()
	{
		$this->load->view('subheader');
		$this->load->view('StrategyManagement Consulting');
		$this->load->view('footer');
	}

	public function Enterprise_Architecture_SOA()
	{
		$this->load->view('subheader');
		$this->load->view('Enterprise');
		$this->load->view('footer');
	}

	public function Business_Intelligence()
	{
		$this->load->view('subheader');
		$this->load->view('Business Intelligence');
		$this->load->view('footer');
	}

		public function Enterprise_Portals_Solutions()
	{
		$this->load->view('subheader');
		$this->load->view('Enterprise Portals Solutions');
		$this->load->view('footer');
	}
     

     	public function Customer_Relationship_Management()
	{
		$this->load->view('subheader');
		$this->load->view('Customer Relationship');
		$this->load->view('footer');
	}


     	public function Enterprise_Resource_Planning()
	{
		$this->load->view('subheader');
		$this->load->view('Enterprise Resource');
		$this->load->view('footer');
	}

		public function Billing_Systems()
	{
		$this->load->view('subheader');
		$this->load->view('Billing Systems');
		$this->load->view('footer');
	}


}