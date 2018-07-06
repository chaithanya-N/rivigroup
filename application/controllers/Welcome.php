<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

     public function __construct()
    {   
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
		// $this->load->model("admin_model");
    }



	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	Public function about_us()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	
    Public function Services()
	{
		$this->load->view('header');
		$this->load->view('Services');
		$this->load->view('footer');
	}

 Public function expertise()
	{
		$this->load->view('header');
		$this->load->view('Expertise');
		$this->load->view('footer');
	}	
    
    Public function Case_Study()
	{
		$this->load->view('header');
		$this->load->view('Casestudy');
		$this->load->view('footer');
	}	

	Public function Careers()
	{
		$this->load->view('header');
		$this->load->view('careers');
		$this->load->view('footer');
	}	


	 Public function Contact_Us()
	{
		$this->load->view('header');
		$this->load->view('Contact');
		$this->load->view('footer');
	}	

  public function savingdata()  
 
    {  
        // $this->admin_model->contact_info($data);  
  
   // $this->load->library('email');
   //  $from = $this->input->post('email');
   // $this->email->from($from);
   // $this->email->to('neelamchaithanya181@gmail.com'); 
   // $this->email->subject('testing');
   // $this->email->message('welcome');
   // if ($this->email->send())
   // {
   //    $data['success'] = 'Yes';
   // }
   // else
   // {
   //    $data['success'] = 'No';
   //    $data['error'] = $this->email->print_debugger(array(
   //       'headers'
   //    ));
   // }

    $this->load->library('email');
    date_default_timezone_set('Africa/Lagos');//or change to whatever timezone you want
      $from = $this->input->post('email');
      $name = $this->input->post('name');
      $msg = $this->input->post('message');

      $this->email->from($from);
      $this->email->to('neelamchaithanya181@gmail.com');
      $this->email->subject('Contactinfo');
      $this->email->message($msg);

       $this->email->message('name',$name);
        $this->email->message($from);
         $this->email->message($msg);
      $this->email->send();

   

   
        
  //       $to = $this->input->post('email');
		// // $to = 'vikram@rivigroup.com';
		// $email_from = 'neelamchaithanya@gmail.com';
		// $subject = "Welcome to Rivi Group";

		// $message = "<b>Welcome</b>";
		
		// $message .= "User:".$this->input->post('name')."<br>";
		// $message .= "Password:".$password;
		
		// $message .= "<h6>click here to login : https://crm.zevahealth.com/admin_login</h6>";

		// $header = "From:".$email_from."\r\n";
		// //$header .= "Cc:afgh@somedomain.com \r\n";
		// $header .= "MIME-Version: 1.0"."\r\n";
		// $header .= "Content-type: text/html;charset=UTF-8"."\r\n";

		// mail ($to,$subject,$message,$header,"-f$email_from");

        redirect("Welcome");  
    }  
}

	
		