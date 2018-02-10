{* include/header.tpl *}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>テンプレート</title>
  {* <link rel="stylesheet" href="../css/base.css"> *}
  {link_tag('css/base.css')}
  {if !$style|default:'' == ''}
  {link_tag("css/`$style`.css")}
  {/if}
  <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="../js/base.js" charset="utf-8"></script>
</head>
<body>
  <header>
    <div class="container">
      <div class="container">
        {* // タイトルを設定 *}
        <h1>チャット掲示板</h1>
        <ul>
          {* // リンク先と名前をassingから引っ張ってくる。これによりすっきり書けるようになった。 *}
          <li><a href="{$base_url}{$junp_link}">{$junp_name}へ</a></li>
        </ul>
      </div>
    </div>
  </header>
