<?php
class Boad_model extends CI_Model {

    public function __construct()
    {
            // CI_Model constructor の呼び出し
            parent::__construct();
            $this->load->database();
    }

    public function getComments()
    {
      $query = $this->db->select('name')
      ->select('comment')
      ->from('comments')
      ->join('user', 'comments.user_id = user.id')
      ->get();
      return $query->result_array();
    }

    public function insertComment($postdata)
    {
      $data = array(
        $postdata['name'],
        $postdata['comment']
      );
      $this->db->insert('comments', $data);
    }
}
