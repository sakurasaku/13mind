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
  <div class="area2">
    <form action="./entry_fin.php" method="post">
 
      {include file='../../templates/admin/common/admin_header.tpl'}
      
        <dl>
           <div class="item2">
             <dt><p class="ask">タイトル</p></dt>
               <dd><p class="answer2">{$data.title|escape:'html'}</p></dd>
           </div>
           <div class="item2">
             <dt><p class="ask">開始日時</p></dt>
               <dd><p class="answer2">{$data.begin|escape:'html'}</p></dd>
           </div>
           <div class="item2">
             <dt><p class="ask">終了日時</p></dt>
               <dd><p class="answer2">{$data.end|escape:'html'}</p></dd>
           </div>
           <div class="item2">
             <dt><p class="ask">内容</p></dt>
               <dd><p class="answer2">{$data.content|escape:'html'}</p></dd>
           </div>
          </dl>
         <p class="regist">
          <a href="entry_input.php">戻る</a><input type="submit" class="btn2" value="登録">
         </p>
        </form>
       </div>
      </div> <!-- /#content -->
      
      
      <div id="sideBar"><!-- サイドバー -->
        <p><img src="../images/company/13mind_bud.png" alt="13mind"></p>
      </div> <!-- /#sideBar -->
      
      
{include file='../common/footer.tpl'}