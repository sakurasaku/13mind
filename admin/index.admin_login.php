<?php
//入力フォーム
//共通の前処理
require_once('../initialize.inc.php');




//テンプレート表示
$smarty->display('admin/admin_login.tpl');

//共通の後処理
require_once('../finalize.inc.php');

