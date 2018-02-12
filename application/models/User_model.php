<?php
class User_model extends CI_Model {
  /**
  * コンストラクタ
  */
  public function __construct()
  {
    // CI_Model constructor の呼び出し
    parent::__construct();
    $this->load->database();
    $this->load->library('form_validation');
  }

  /**
  * ログイン認証するための関数
  *
  * @return mixed 取得できたら配列を できなかったらエラーメッセージを格納しfalseを返す。
  */
  public function login($postdata)
  {
    $query = $this->db->select('id')
    ->where('name', $postdata['name'])
    ->where('password', $postdata['password'])
    ->from('user')
    ->get();
    return $query->row();
  }

  /**
  * 新規アカウント作成
  *
  * @return int ログインされたidを取得する。
  */
  public function create($postdata)
  {
    $data = array(
      'name' => $postdata['name'],
      'password' => $postdata['password'],
    );
    return $this->db->insert('user', $data);
  }

  /**
  * ログインユーザー情報取得するためのメソッド
  *
  * @return array ユーザー情報のarrayを返す
  */
  public function getUser($id)
  {
    $query = $this->db->select('id')
    ->select('name')
    ->where('id', $id)
    ->from('user')
    ->get();
    return $query->row();
  }

  /**
  * ログインユーザー情報取得するためのメソッド
  *
  * @param string ユーザーネームからユーザーを取得
  * @return array ユーザー情報のarrayを返す
  */
  public function getUserName($name)
  {
    $query = $this->db->select('id')
    ->where('name', $name)
    ->from('user')
    ->get();
    return $query->row();
  }
}
