<div class="cart-wrapper">
  <div class="container">
    <div class="cart-content">
      <h1>カート</h1>
      <ul>
        {foreach from=$cart|default:'' item=item}
        <li>
          <img src="{$item.image}" alt="">
          <h3>{$item.name}</h3>
          <b>{$item.headine}</b>
          <p>{$item.description}</p>
          <b>価格：{$item.value}円</b>
        </li>
        {/foreach}
      </ul>
      <form class="" action="complete" method="post">
        <input type="hidden" name="name" value="{$item.name}">
        <input type="hidden" name="headine" value="{$item.headine}">
        <input type="hidden" name="description" value="{$item.description}">
        <input type="hidden" name="value" value="{$item.value}">
        <input type="submit" name="" value="購入する">
      </form>
    </div>
  </div>
</div>
