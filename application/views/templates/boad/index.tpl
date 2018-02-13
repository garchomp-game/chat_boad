<div class="boad-wrapper">
  <div class="container">
    <form class="" action="insert" method="post">
      <p>{$errors}</p>
      <input type="hidden" name="id" value="{$login_id|default:''}">
      <textarea name="comment" rows="6" cols="80"></textarea>
      <input type="submit" name="submit" value="送信">
    </form>
    <div class="boad-content">
      <ul>
        {foreach from=$comments|default:'' item=item}
          <li class='user-name'>{$item.name}</li>
          <li class='comment'>{$item.comment}
            <p>{$item.comment_favo_id|default:''}</p>
            <span><a href="favolite?id={$item.comment_id}" class='favolite {if $item.comment_favo_id|default:'' != ''}on{/if}'>♥</a></span>
          </li>
        {/foreach}
      </ul>
    </div>
  </div>
</div>
