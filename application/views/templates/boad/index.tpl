{* boad/index.tpl *}

<div class="boad-wrapper">
  <div class="container">
    <div class="boad-content">
      <ul>
        {foreach from=$comments item=item}
          <li class='user-name'>{$item.name}</li>
          <li class='comment'>{$item.comment}</li>
        {/foreach}
      </ul>
    </div>
    <form class="" action="insert" method="post">
      <p>{validation_errors()}</p>
      <input type="hidden" name="id" value="{$login_id|default:''}">
      <textarea name="comment" rows="6" cols="80"></textarea>
      <input type="submit" name="submit" value="送信">
    </form>
  </div>
</div>
