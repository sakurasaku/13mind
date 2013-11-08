<?php

//初期処理
require_once('initialize.inc.php');





















//  $smarty->assignh('', );




//  error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止 ビット演算子 (エックスオア)

  //テンプレートから出力
  $smarty->display('index.tpl');


//後処理
require_once('finalize.inc.php');
