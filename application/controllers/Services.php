<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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
	 
 
	public function IOT()
	{
		$this->load->view('subheader');
		// $this->load->view('strategy_sidemenu');
		$this->load->view('iot');
 		$this->load->view('footer');
	}

	public function Investran()
	{
		$this->load->view('subheader');
		$this->load->view('Investran');
		$this->load->view('footer');
	}
	public function Enterprise_Security()
	{
		$this->load->view('subheader');
		$this->load->view('Security');
		$this->load->view('footer');
	}

	public function Machine_to_Machine_Learning()
	{
		$this->load->view('subheader');
		$this->load->view('Machine');
		$this->load->view('footer');
	}

	public function Cloud_Implementation()
	{
		$this->load->view('subheader');
		$this->load->view('CloudImplementation');
		$this->load->view('footer');
	}

	public function Staffing()
	{
		$this->load->view('subheader');
		$this->load->view('Staffing');
		$this->load->view('footer');
	}

	public function Testing()
	{
		$this->load->view('subheader');
		$this->load->view('Testing');
		$this->load->view('footer');
	}

	public function Cyber_Security()
	{
		$this->load->view('subheader');
		$this->load->view('CyberSecurity');
		$this->load->view('footer');
	}
	public function Strategy_Management_Consulting()
	{
		$this->load->view('subheader');
		$this->load->view('Strategy');
		$this->load->view('footer');
	}

public function System_Integration_Applications_Development()
	{
		$this->load->view('subheader');
		$this->load->view('SystemIntegration');
		$this->load->view('footer');
	}

	public function Program_Management()
	{
		$this->load->view('subheader');
		$this->load->view('Program');
		$this->load->view('footer');
	}

	public function IT_Infrastructure_Program()
	{
		$this->load->view('subheader');
		$this->load->view('Infrastructure');
		$this->load->view('footer');
	}

	Public function Infrastructure_Security()
	{
		$this->load->view('subheader');
		$this->load->view('InfrastructureS');
		$this->load->view('footer');
	}

    Public function Executive_Dashboards()
	{
		$this->load->view('subheader');
		$this->load->view('Dashboard');
		$this->load->view('footer');
	}

	Public function Disaster_Recovery()
	{
		$this->load->view('subheader');
		$this->load->view('Recovery');
		$this->load->view('footer');
	}

	Public function Oracle_PeopleSoft_Solutions()
	{
		$this->load->view('subheader');
		$this->load->view('Oracle');
		$this->load->view('footer');
	}

	Public function SAP_Solutions()
	{
		$this->load->view('subheader');
		$this->load->view('Solutions');
		$this->load->view('footer');
	}

	Public function Intelligence_Transportation_Systems()
	{
		$this->load->view('subheader');
		$this->load->view('Intelligence');
		$this->load->view('footer');
	}

	Public function Geographical_Information_Systems()
	{
		$this->load->view('subheader');
		$this->load->view('Geographical');
		$this->load->view('footer');
	}

	Public function Embedded_Services()
	{
		$this->load->view('subheader');
		$this->load->view('Embedded');
		$this->load->view('footer');
	}
	public function Web_Development()
	{
	    $this->load->view('subheader');
		$this->load->view('web');
		$this->load->view('footer');	
	}
    public function App_Development()
	{
	    $this->load->view('subheader');
		$this->load->view('app');
		$this->load->view('footer');	
	}
    public function Digital_Marketing()
	{
	    $this->load->view('subheader');
		$this->load->view('Digital');
		$this->load->view('footer');	
	}



}

	
		