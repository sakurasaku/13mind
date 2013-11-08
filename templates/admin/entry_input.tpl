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
<!--      <div class="area">-->
<form action="./entry_confirm.php" method="post">
  {include file='../../templates/admin/common/admin_header.tpl'}
    <dl>
      <div class="item">
        <dt><p class="ask">タイトル</p>
          {if isset($errors.title)}
            {foreach from=$errors.title item=message}
              <span class="error">{$message}</span>
            {/foreach}
          {/if}
        </dt>
        <dd><input type="text" name="title" class="input" value="{if isset($data.title)}{$data.title|escape:'html'}{/if}"></dd>
      </div>
      <div class="item">
        <dt><p class="ask">開始日時</p>
          {if isset($errors.begin)}
            {foreach from=$errors.begin item=message}
              <span class="error">{$message}</span>
            {/foreach}
          {/if}
        </dt>
        <dd><input type="text" name="begin" class="input" value="{if isset($data.begin)}{$data.begin|escape:'html'}{/if}"></dd>
      </div>
      <div class="item">
        <dt><p class="ask">終了日時</p>
          {if isset($errors.end)}
            {foreach from=$errors.end item=message}
              <span class="error">{$message}</span>
            {/foreach}
          {/if}
        </dt>
        <dd><input type="text" name="end" class="input" value="{if isset($data.end)}{$data.end|escape:'html'}{/if}"></dd>
      </div>
      <div class="item">
        <dt><p class="ask">内容</p>
          {if isset($errors.content)}
            {foreach from=$errors.content item=message}
              <span class="error">{$message}</span>
            {/foreach}
          {/if}
        </dt>
        <dd><textarea name="content" class="text">{if isset($data.content)}{$data.content|escape:'html'}{/if}</textarea></dd>
      </div>
    </dl>
    <p class="confirm">
      <a href="index.php">管理画面TOPに戻る</a><input type="submit" value="Confirm" class="btn2">
    </p>
  </form>
<!--      </div> <!-- /#area -->
</div> <!-- /#content -->


<div id="sideBar"><!-- サイドバー -->
  <p><img src="../images/company/13mind_bud.png" alt="13mind"></p>
</div> <!-- /#sideBar -->


{include file='../common/footer.tpl'}