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

<h2 class="subtitle">STOCKS</h2>

<div id="content"><!-- 内容 右側-->

  <h2 class="sub2"></h2>
  {include file='../../templates/admin/common/admin_header.tpl'}
  <div class="cnt">
    <p class="toTop"><a href="index.php">TOPに戻る</a></p>
    <p class="pager">
      <span class="sendId">
        {if $pager.prev > 0}
          <a href="summary.php?p={$pager.prev}">&nbsp;&lt;&nbsp;</a>
        {else}
          &nbsp;&lt;&nbsp;
        {/if}
      </span>
      <span class="sendId">
        {if $pager.next <= $pager.max}
          &nbsp;<a href="summary.php?p={$pager.next}">&nbsp;&gt;&nbsp;</a>
        {else}
          &nbsp;&gt;&nbsp;
        {/if}
      </span>
    </p>
    <p class="countpg">{$pager.current} / {$pager.max} </p>
  </div><!-- /#cnt -->
  
  <ul>
    <li><div class="header headcolumn col_title"><p class="msg">ブランド</p></div>
      <div class="header col_startdate"><p class="msg">番号</p></div>
      <div class="header col_enddate"><p class="msg">拡張子</p></div>
      <div class="header col_content"><p class="msg">説明</p></div>
      <div class="header head_conpile"><p class="msg">編集</p></div><div class="header head_conpile"><p class="msg">削除</p></div>
    </li>
    {foreach from=$list_data item=row}
      <li><div class="headcolumn col_title"><p class="msg">{$row.brand}</p></div>
        <div class="col_startdate"><p class="msg">{$row.number}</p></div>
        <div class="col_enddate"><p class="msg">{$row.extension}</p></div>
        <div class="col_content"><p class="msg">{$row.description}</p></div>
        <div class="conpile"><a href="admin_edit.php"><p class="msg">編集</p></a></div><div class="conpile"><a href="admin_delete.php"><p class="msg">削除</p></a></div>
      </li>
    {/foreach}
  </ul>
  <div class="foot">
  </div>
</div> <!-- /#content -->


<div id="sideBar"><!-- サイドバー -->
  <p><img src="../images/company/13mind_bud.png" alt="13mind"></p>
</div> <!-- /#sideBar -->

{include file='../common/footer.tpl'}