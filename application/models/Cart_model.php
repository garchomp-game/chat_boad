<?php
class Cart_model extends CI_Model {

  public function __construct()
  {
    // CI_Model constructor の呼び出し
    parent::__construct();
    $this->load->database();
  }

  /**
  * カートに商品を追加するためのメソッド
  *
  * @return void
  */
  public function insert($getdata)
  {
    var_dump($getdata);
    $data = array(
      'item_id' => $getdata['item_id'],
      'user_id' => $getdata['login_id'],
    );
    $this->db->insert('cart', $data);
  }

  /**
  * カートにある商品のidをすべて取得するためのメソッド
  *
  * @return void
  */
  public function getAllItem($id)
  {
    $this->db->select('item_id')
    ->where('user_id', $id);
    $data = $this->db->get('cart');
    return $data->result_array();
  }

  /**
  * 全要素を取得
  *
  * @return void
  */
  public function getAll($id)
  {
    $this->db->where('user_id', $id);
    $data = $this->db->get('cart');
    return $data->result_array();
  }

  /**
  * 一つだけ商品を取得するためのメソッド
  *
  * @return void
  */
  public function get_single($getdata)
  {
    $this->db->where('user_id', $getdata['login_id'])
    ->where('item_id', $getdata['item_id']);
    $data = $this->db->get('cart');
    return $data->result_array() ? false : true ;
  }

  /**
  * 一つだけ商品を取得するためのメソッド
  *
  * @return void テーブルの削除
  */
  public function destroy($user_id)
  {
    $this->db->where('user_id', $user_id);
    $data = $this->db->delete('cart');
    return true;
  }


}
