<div class="index-wrapper">
  <div class="container">
    <div class="index-content">
      <ul>
        {foreach from=$itemdata item=item}
        <li>
          <a href="show/?id={$item.store_id}">
            <img src="{$item.image_medium}" alt="">
            <div class="right">
              <h3>{$item.name}</h3>
              <p>{$item.description}</p>
              <b>価格：{$item.value}円</b>
            </div>
          </a>
        </li>
        <div class="clear"></div>
        {/foreach}
      </ul>

    </div>
  </div>
</div>
