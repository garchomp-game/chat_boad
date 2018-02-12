<div class="container">
  <form class="login_confirm" action="login_confirm" method="post">
    <p>{validation_errors()}</p>
    <p>{$login_error|default:''}</p>
    <input type="hidden" name="pass" value="{$getdata['pass']|default:''}">
    <input type="hidden" name="id" value="{$getdata['id']|default:''}">
    <input type="text" name="name" value="{$name|default:''}">
    <input type="password" name="password" value="{$password|default:''}">
    <input type="submit" value="ログイン">
  </form>
</div>
