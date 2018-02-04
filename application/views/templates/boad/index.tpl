{* boad/index.tpl *}

<div class="boad-wrapper">
  <div class="container">
    <div class="boad-content">
      <ul>
        {foreach from=$comments item=item}
          <li>{$item.name}</li>
          <li>{$item.comment}</li>
        {/foreach}
      </ul>
    </div>

    <form class="" action="insert" method="post">
      <input type="text" name="name" value="{$name|default:''}">
      <textarea name="comment" rows="8" cols="80">

      </textarea>
      <input type="submit" name="submit" value="送信">
    </form>
  </div>
</div>
