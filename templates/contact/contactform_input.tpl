<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>スケートボードの販売|プロの厳選品</title>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
  <link rel="stylesheet" href="../css/common.css" media="all">
  <link rel="stylesheet" href="../css/contact.css" media="all">
</head>
{include file='../common/header.tpl'}
<h2 class="form"> CONTACT FORM</h2>

<div id="content"><!-- 内容 右側-->

  <form action="../contact/contactform_confirm.php" method="post">

    {if isset($errors.name)}
      {foreach from=$errors.name item=message}
        <p class="error_text">{$message}</p>
      {/foreach}
    {/if}

    <div class="item">
      <p class="ask">お名前</P><input type="text" name="name" value="{$name|escape:'html'}" class="input"><br>
    </div>
    {if isset($errors.mail)}
      {foreach from=$errors.mail item=message}
        <p class="error_text">{$message}</p>
      {/foreach}
    {/if}
    <div class="item">
      <p class="ask">メールアドレス</p><input type="text" name="mail" value="{$mail|escape:'html'}" class="input"><br>
    </div>
    {if isset($errors.tel)}
      {foreach from=$errors.tel item=message}
        <p class="error_text">{$message}</p>
      {/foreach}
    {/if}
    <div class="item2">
      <p class="ask">電話番号<br>(例 03-1133-1313)</p><input type="text" name="tel" value="{$tel|escape:'html'}" class="input"><br>
    </div>
    {if isset($errors.sex)}
      {foreach from=$errors.sex item=message}
        <p class="error_text">{$message}</p>
      {/foreach}
    {/if}
    
    
    {if isset($errors.word)}
      {foreach from=$errors.word item=message}
        <p class="error_text" class="ask">{$message}</p>
      {/foreach}
    {/if}
    <div class="item">
      <p class="ask">お問い合せ内容</p>
      <textarea name="word" class="text">{$word|escape:'html'}</textarea><br>
    </div>
    <input type="submit" value="送信" class="btn">
  </form>


</div> <!-- /#content -->


<div id="sideBar"><!-- サイドバー -->
  <p><img src="../images/company/13mind_bud.png" alt="13mind"></p>
</div> <!-- /#sideBar -->


{include file='../common/footer.tpl'}
