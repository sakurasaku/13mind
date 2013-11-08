<?php
  
// id取ってきてＩＤにそう内容を表示






//images/rider/thu..../1.jpg
//images/rider/big/1.jpg


//初期処理
require_once('../initialize.inc.php');






//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('oemdecks/detail.tpl');


//後処理
require_once('../finalize.inc.php');

