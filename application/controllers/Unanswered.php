<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unanswered extends CI_Controller {
  function __construct()
  {
      parent::__construct();
      $this->load->model('Response_model');       
  }
	public function index()
	{ 
    $questions=$this->Response_model->getUnAnswered();
    $data['questions']=$questions;
		$this->load->view('unanswered',$data);
	}
}
