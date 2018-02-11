<div class="show-wrapper">
  <div class="container">
    <div class="show-content">
      <img src="{$itemdata.image}" alt="">
      <h3>{$itemdata.name}</h3>
      <b>{$itemdata.headine}</b>
      <p>{$itemdata.description}</p>
      <b>価格：{$itemdata.value}円</b>
    </div>
  </div>
  <form class="" action="/public/cart/insert" method="post">
    <input type="hidden" name="item_id" value="{$itemdata.id}">
    <input type="hidden" name="login_id" value="{$login_id}">
    <input type="submit" name="submit" value="カートに入れる">
  </form>
</div>
