<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Response extends CI_Controller {
  function __construct()
  {
      parent::__construct();
      $this->load->model('Response_model');       
  }
	public function index()
	{
    $responses=$this->Response_model->getData();
    $data['responses']=$responses;
		$this->load->view('response',$data);
	}
}
