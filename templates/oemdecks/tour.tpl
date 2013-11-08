<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>スケートボードの販売|プロの厳選品</title>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
  <link rel="stylesheet" href="../css/common.css" media="all">
  <link rel="stylesheet" href="../css/oemdecksDetail.css" media="all">
  <link rel="shortcut icon" href="../favicon.ico">
</head>

{include file='../common/header.tpl'}

<div id="content"><!-- カラム 右側 -->
  <h2>PAGE SELECT</h2>
  <ul class="select">
    <li><a href="detail.php">TOP</a></li>
    <li><a href="tour.php?t=1">1</a></li><li><a href="tour.php?t=2">2</a></li><li><a href="tour.php?t=3">3</a></li><li><a href="tour.php?t=4">4</a></li><li><a href="tour.php?t=5">5</a></li>
    <li><a href="tour.php?t=6">6</a></li><li><a href="tour.php?t=7">7</a></li><li><a href="tour.php?t=8">8</a></li><li><a href="tour.php?t=9">9</a></li><li><a href="tour.php?t=10">10</a></li>
    <li><a href="tour.php?t=11">11</a></li><li><a href="tour.php?t=12">12</a></li><li><a href="tour.php?t=13">13</a></li><li><a href="tour.php?t=14">14</a></li><li><a href="tour.php?t=15">15</a></li>
  </ul>
  <p><a href="{if $tour < 2}detail.php{else}tour.php?t={$tour - 1}{/if}" class="page">BACK</a>{if $tour > 14}NEXT{else}<a href="tour.php?t={$tour + 1}" class="page">NEXT</a>{/if}</p>
  <h2>FACT</h2>
  <h3>プレミアムスケートボード工場ツアーへようこそ。<br>始める前に、スケートボード産業の事実について学んでください。</h3>
  <div class="tour_focus"><!-- 内容 -->
    <h2>{$guide.title}</h2>
    <p>{$guide.content}</p>
  </div>
  <div class="tour_focus"><!-- 内容 -->
    <h2>{$guide.enTitle}</h2>
    <p>{$guide.enContent}</p>
  </div>
  


</div> <!-- /#content -->     

<div id="sidebar"><!-- カラム 左側 -->
  <h2>PREMIUM SKATEBOARD</h2>
  <div class="wrapper"><!-- カラム内ラッパー -->
    <img src="../images/oemdecks/premium.gif" alt="picture" class="premium">
    <img src="../images/oemdecks/tour{$tour}.jpg" alt="picture" class="tourPic">
  </div> <!-- /.wrapper -->  
</div> <!-- /#sidebar -->

{include file='../common/footer.tpl'}