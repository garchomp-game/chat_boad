<?php
class CartLogic
{
  /**
  * コンストラクタ
  */
  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('cart_model');
  }

  /**
  * XMLから商品詳細情報を取得
  *
  * @return array
  */
  public function insert($getdata)
  {
    $product = simplexml_load_file("https://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch?appid=dj00aiZpPWYwT0lPSm1Zc0t3ZiZzPWNvbnN1bWVyc2VjcmV0Jng9OTA-&store_id={$id}");
    $data = array(
      'name' => (string)$product->Result->Hit->Name,
      'headine' => (string)$product->Result->Hit->Headline,
      'value' => (integer)$product->Result->Hit->Price,
      'description' => (string)$product->Result->Hit->Description,
      'image' => (string)$product->Result->Hit->Image->Medium,
      'id' => (string)$product->Result->Hit->Store->Id,
    );
    return $data;
  }
}
