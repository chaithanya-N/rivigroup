<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**

	 * Index Page for this controller.

	 *
	 * Maps to the following URL
	 *      http://example.com/index.php/welcome
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
   
    public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
		$this->load->model("admin_model");
    }
	 
 
	Public function Admin_login()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/login');
		$this->load->view('admin/footer');
	}

	public function loginchk()
	{
		 $uname = $this->input->post('userid');
         $pwd = $this->input->post('password');
       
         $login = $this->admin_model->loginchecking($uname,$pwd);
           
           if(count($login) > 0){
               echo "0";
           } else {
           	echo "1";
           }

	}

	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}


	public function user_management()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/user_management');
		$this->load->view('admin/footer');
	}

	public function job_management()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/job_management');
		$this->load->view('admin/footer');
	}
   
     public function applicant_management()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidemenu');
		$this->load->view('admin/applicant_management');
		$this->load->view('admin/footer');
	}

	public function create_job()
	{
		 $data = array(
                       'job_posting_date'=> date('Y-m-d'),
                       'job_id'=>$this->input->post('job_id'),
                       'job_title'=>$this->input->post('job_title'),
                       'job_location'=>$this->input->post('job_location'),
                       'job_description'=>$this->input->post('job_description'),
                       'job_qualification'=>$this->input->post('job_qualification'),
                       'job_experience'=>$this->input->post('job_experience'),
                       'job_openings'=>$this->input->post('job_positions'),
                       'job_opening_status'=>$this->input->post('job_opening_status'),
                      );


		  $creating = $this->admin_model->creating_jobs($data);
          
          echo "0";
       
	}

	
}
