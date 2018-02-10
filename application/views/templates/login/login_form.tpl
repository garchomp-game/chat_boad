<div class="container">
  <form class="login_confirm" action="login_confirm" method="post">
    <input type="text" name="name" value="{$name|default:''}">
    <input type="password" name="password" value="{$password|default:''}">
    <input type="submit" value="ログイン">
  </form>
</div>
