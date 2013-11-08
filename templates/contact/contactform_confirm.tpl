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
  <div class="area">
    <div class="confirm_header">
      <p class="head">{$data.name|escape:'html'}さん、こんにちは</p>
      <p class="head">入力内容をご確認下さい</p>
    </div>

    <p class="sub">お名前：</p><p class="answer">{$data.name|escape:'html'}</p>


    <p class="sub">Mail：</p><p class="answer">{$data.mail|escape:'html'}</p>


    <p class="sub">Tel：</p><p class="answer">{$data.tel|escape:'html'}</p>


    <p class="sub">内容：</p><p class="answer">{$data.word|escape:'html'}</p>


    <p class="foot">この内容で送信してもよろしいですか？</p>


    <p><a href="contactform_fin.php" class="send">送信</a><a href="index.php" class="back">戻る</a></p>

  </div>
</div> <!-- /#content -->
<div id="sideBar"><!-- サイドバー -->
  <p><img src="../images/company/13mind_bud.png" alt="13mind"></p>
</div> <!-- /#sideBar -->

{include file='../common/footer.tpl'}
