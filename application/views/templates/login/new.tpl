<div class="container">
  <form class="create" action="create" method="post">
    <input type="text" name="name" value="{$name|default:''}">
    <input type="password" name="password" value="{$password|default:''}">
    <input type="submit" value="新規作成">
  </form>
</div>
