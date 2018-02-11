<?php
class ShopLogic
{
  /**
  * コンストラクタ
  */
  public function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->model('boad_model');
  }

  /**
  * APIから商品一覧情報を取得
  *
  * @return array
  */
  public function getItemAll()
  {
    $ranking_array = array();
    $ranking =  simplexml_load_file("https://shopping.yahooapis.jp/ShoppingWebService/V1/categoryRanking?appid=dj00aiZpPWYwT0lPSm1Zc0t3ZiZzPWNvbnN1bWVyc2VjcmV0Jng9OTA-");
    foreach ($ranking->Result->RankingData as $value) {
      $id = $value->Store->Id;
      $product = simplexml_load_file("https://shopping.yahooapis.jp/ShoppingWebService/V1/itemSearch?appid=dj00aiZpPWYwT0lPSm1Zc0t3ZiZzPWNvbnN1bWVyc2VjcmV0Jng9OTA-&store_id={$id}");
      array_push($ranking_array, array(
        'name' => (string)$value->Name,
        'code' => (string)$value->Code,
        'image_medium' => (string)$value->Image->Medium,
        'store_id' => (string)$value->Store->Id,
        'value' => (integer)$product->Result->Hit->Price,
        'description' => (string)$product->Result->Hit->Description
      ));
    };
    return $ranking_array;
  }

  /**
  * XMLから商品詳細情報を取得
  *
  * @return array
  */
  public function getItem($id)
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
