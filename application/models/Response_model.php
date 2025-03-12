<?php
class Response_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    
    function getData()
    {
        $this->db->select('questions.id, questions.question, responses.response_message');
        $this->db->from('questions');
        $this->db->join('responses', 'questions.response_id = responses.id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function getUnAnswered()
    {
        $this->db->select('unanswered.id, unanswered.question, unanswered.no_asks');
        $this->db->from('unanswered');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function getfaq()
    {
      $this->db->select('frequent_asks.question_id, COUNT(frequent_asks.id) as times, questions.question');
      $this->db->from('frequent_asks');
      $this->db->join('questions', 'frequent_asks.question_id = questions.id', 'left');
      $this->db->group_by('frequent_asks.question_id');
      $this->db->order_by('times', 'DESC'); // Order by the count column in descending order
      $this->db->limit(5); // Limit the results to 5 rows
      $query = $this->db->get();
      return $query->result();
    }

}

?>
