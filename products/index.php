<?php

//初期処理
require_once('../initialize.inc.php');



  //プロダクツテーブルの一覧をSQLで取得
  
  
  //オーダーバイで順番を選べる様にする
  
  
  //良い感じで並べて表示
//  $smarty->assignh('', );




//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('products/index.tpl');


//後処理
require_once('../finalize.inc.php');
