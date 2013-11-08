<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>スケートボードの販売|プロの厳選品</title>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
  <link rel="stylesheet" href="../css/common.css" media="all">
  <link rel="stylesheet" href="../css/riderStatus.css" media="all">
  <link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css" media="screen" />
  <link rel="shortcut icon" href="../favicon.ico">
  <script type="text/javascript" src="../js/jquery.lightbox-0.5.min.js"></script>
  
{literal}
  <!-- Ativando o jQuery lightBox plugin -->
  <script type="text/javascript">
    $(function() {
      $('.gallery a').lightBox();
    });
  </script>
  <style type="text/css">
    /* jQuery lightBox plugin - Gallery style */
    #gallery {
      background-color: #444;
      padding: 10px;
      width: 520px;
    }
    #gallery ul { list-style: none; }
    #gallery ul li { display: inline; }
    #gallery ul img {
      border: 5px solid #3e3e3e;
      border-width: 5px 5px 20px;
    }
    #gallery ul a:hover img {
      border: 5px solid #FFF;
      border-width: 5px 5px 20px;
      color: #FFF;
    }
    #gallery ul a:hover { color: #fff; }
  </style>
{/literal}
</head>
{include file='../common/header.tpl'}

{$data.interview}

<div id="sidebar"><!-- サイドバー 左側 -->
  <h2 class="interview">THE MAN</h2>
  <div class="teamBanner"><!-- 所属 -->
    <p><img src="../images/rider/{$data.name}/port.jpg" alt="{$data.name}" class="soldier"></p>
  </div> <!-- /teamBanner -->
  
  {if !$path == NULL}
  
    <h2 class="interview">GALLERY</h2>
    <div id="glr"><!-- ギャラリー -->
      <div class="gallery"><!-- lightboxメソッド用セレクター -->
      
        {foreach from=$path item=number}
          <a href="../images/rider/{$data.name}/{$number}.jpg"><img src="../images/rider/{$data.name}/{$number}.gif" alt="Quick Click"></a>
        {/foreach}
      
      </div> <!-- /#gallery -->
    </div> <!-- /glr -->
  
  {/if}
  
</div> <!-- /#sidebar -->

{include file='../common/footer.tpl'}