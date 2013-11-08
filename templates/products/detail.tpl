<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>スケートボードの販売|プロの厳選品</title>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
  <link rel="stylesheet" href="../css/common.css" media="all">
  <link rel="stylesheet" href="../css/productsDetail.css" media="all">
  <link rel="stylesheet" type="text/css" href="../css/jquery.ad-gallery.css">
  <script type="text/javascript" src="../js/jquery.ad-gallery.min.js"></script>
  <link rel="shortcut icon" href="../favicon.ico">
  {literal}
  <script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', '');
    $('img.image2').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    
/*  **********************************************************
    
    setTimeout(function() {
      galleries[0].addImage("../images/products/premium0_thum.gif", "../images/products/premium0.png");
    }, 1000);
    setTimeout(function() {
      galleries[0].addImage("../images/products/premium1_thum.gif", "../images/products/premium1.gif");
    }, 2000);
    setTimeout(function() {
      galleries[0].addImage("../images/products/premium2_thum.gif", "../images/products/premium2.png");
    }, 3000);
    setTimeout(function() {
      galleries[0].removeImage(100);
    }, 4000);
    
**********************************************************  */
    
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>
  
  {/literal}
  
</head>
{include file='../common/header.tpl'}

<div id="content"><!-- 内容 -->
  <h2 class="brands">{$nameOfBrand}</h2>
  <div id="gallery" class="ad-gallery">
    <div class="ad-image-wrapper">
    </div>
    <div class="ad-controls">
    </div>
    <div class="ad-nav">
      <div class="ad-thumbs">
        <ul class="ad-thumb-list">
          {foreach from=$picPath item=row}
            <li>
              <a href="../images/products/{$row.brand}/{$row.number}.{$row.extension}">
                <img src="../images/products/{$row.brand}/{$row.number}_thum.{$row.extension}" alt="{$row.description}" class="image0">
              </a>
            </li>
          {/foreach}
        </ul>
      </div>
    </div>
  </div>
</div> <!-- /#content -->

<div id="sidebar"><!-- サイドバー -->
  <h2 class="brands">Brands</h2>
  <ul class="brandList">
    <li><a href="detail.php?nameOfBrand=PREMIUM"><img src="../images/products/premium.gif" alt=""></a></li>
    <li><a href="detail.php?nameOfBrand=SELFISH"><img src="../images/products/selfish.gif" alt=""></a></li>
    <li><a href="detail.php?nameOfBrand=CITYSTARS"><img src="../images/products/citystars.gif" alt=""></a></li>
    <li><a href="detail.php?nameOfBrand=1031SKATES"><img src="../images/products/1031skate.gif" alt=""></a></li>
    <li><a href="detail.php?nameOfBrand=LANDSHARK"><img src="../images/products/landshark.gif" alt=""></a></li>
    <li><a href="detail.php?nameOfBrand=HYPE"><img src="../images/products/hype.gif" alt=""></a></li>
  </ul>
  
  {if $row.brand === 'selfish'}
    <iframe src="http://www.selfishskateboards.com/blog/">この部分は iframe 対応のブラウザで見てください。</iframe>
  {/if}
  
</div> <!-- /#sidebar -->

{include file='../common/footer.tpl'}
