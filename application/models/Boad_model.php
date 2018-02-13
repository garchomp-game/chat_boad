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
    ->select('comment_id')
    ->select('comment_id')
    ->from('comments')
    ->join('user', 'comments.user_id = user.id')
    ->join('favolite', 'comments.comment_id = favolite.comment_id', 'left')
    ->order_by('comments.created_at', 'DESC')
    ->get();
    // var_dump($query->result_array());exit;
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
      'comment' => $postdata['comment'],
      'comment_id' => substr(str_shuffle(
        '1234567890abcdefghijklmnopqrstuvwxyz!?ABCDEFGHIJKLMNOPQRSTUVWXYZ*#$%&'),
        0,
        50
       )
    );
    $this->db->insert('comments', $data);
  }
}
