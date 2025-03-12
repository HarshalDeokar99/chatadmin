<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  function __construct()
  {
      parent::__construct();
      $this->load->model('Response_model');       
  }
	public function index()
	{
    $faq=$this->Response_model->getfaq();
    $questions = [];
    $times = [];
    foreach ($faq as $item) {
        $questions[] = $item->question;
        $times[] = (int)$item->times;
    }
    $data['faq']=$faq;
    $data['questions']=$questions;
    $data['times']=$times;
		$this->load->view('dashboard',$data);
	}
}
