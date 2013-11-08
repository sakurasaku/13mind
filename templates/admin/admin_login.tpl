<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>スケートボードの販売|プロの厳選品</title>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
  <link rel="stylesheet" href="../css/common.css" media="all">
  <link rel="stylesheet" href="../css/admin.css" media="all">
</head>

{include file='../common/header.tpl'}

<h2 class="subtitle">LOG IN</h2>

<div id="content"><!-- 内容 右側-->

  <form action="./admin_login_check.php" method="post">
    <div class="item"><h2 class="sub">ユーザー名とパスワードを入力して下さい</h2></div>
    <div class="item2"><p class="ask">ユーザー</p><input type="text" name="user" value="" class="input"></div>
    <div class="item2"><p class="ask">パスワード</p><input type="password" name="pass" value="" class="input"></div>
    <div class="item2"><input type="submit" value="ログイン" class="btn"></div>
  </form>

</div> <!-- /#content -->
<div id="sideBar"><!-- サイドバー -->
  <p><img src="../images/company/13mind_bud.png" alt="13mind"></p>
</div> <!-- /#sideBar -->


{include file='../common/footer.tpl'}
