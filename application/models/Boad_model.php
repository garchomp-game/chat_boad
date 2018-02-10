<?php
class Boad_model extends CI_Model {

  public function __construct()
  {
    // CI_Model constructor の呼び出し
    parent::__construct();
    $this->load->database();
  }

  /**
  * コメント全部をを取得するための関数
  *
  * @return array nameとcommentを全件取得
  */
  public function getComments()
  {
    $query = $this->db->select('name')
    ->select('comment')
    ->from('comments')
    ->join('user', 'comments.user_id = user.id')
    ->get();
    return $query->result_array();
  }

  /**
  * コメントを投稿するための関数
  *
  * @return bool コメント投稿に成功したらtrue 失敗したらfalse
  */
  public function insertComment($postdata)
  {
    $data = array(
      'user_id' => $postdata['id'],
      'comment' => $postdata['comment']
    );
    $this->db->insert('comments', $data);
  }
}
