<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
    if($this->input->post("email"))
    {
      echo "hi";
      $email=$this->input->post("email");
      $password=$this->input->post("password");
      if($email=="harshal@gmail.com" && $password=="harshal")
      {
        redirect(base_url()."Dashboard");
      }
    }
    else
    {
      $this->load->view('login');
    }
		
	}
}
