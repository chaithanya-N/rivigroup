<?php
Class admin_model extends CI_Model
{
	
    public function loginchecking($uname,$pwd)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$uname);
        $this->db->where('password',$pwd);
        $query = $this->db->get(); 
        return $query->result();
    }

    public function creating_jobs($data)
    {
        $this->db->insert('jobs',$data);
    }

    public function job_desc_data()
    {
        $this->db->select('*');
        $this->db->from('jobs');
        $query = $this->db->get(); 
        return $query->result();
    }

    public function contact_info($data)
    {

         $data = array(  
                        'name'=>$this->input->post('name'),  
                        'email'=>$this->input->post('email'),  
                        'contact'=>$this->input->post('contact'),  
                        'subject'=>$this->input->post('subject'),
                        'message'=>$this->input->post('message')   
                        );  
         $this->db->insert('contact',$data);
    }

   
}

?>  