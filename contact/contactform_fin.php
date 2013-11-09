<?php
//完了画面
//共通の前処理
require_once('../initialize.inc.php');

//SESSION確認(Debug用)
//var_dump($_SESSION['post_data']);

//メールで送る変数に値を取り込んでおく
  @$mail_data = $_SESSION['post_data'];

//いったんSESSIONを空にしておく
  $_SESSION['post_data'] = array();
  unset($_SESSION['post_data']);

//送り先と題名を決める
$to = 'sakusaku393@gmail.com';
//$to = '13mind@info.com';
$subject = 'お問い合わせがありました';

//$smarty->assign( 'mail_data', $mail_data );
//$message = $smarty->fetch('contact/mail/inquiry_admin.tpl');


//mailを送る(管理者)
//  $r = mail($to, $subject, $message);

//お客様用のメールを作る
//$message = $smarty->fetch('contact/mail/inquiry_customer.tpl');

//mailを送る(お客様)
//$r = mail($mail_data['mail'], $subject, $message);

try{
  //お問合せ情報をDBに登録する
    //DBに接続する
  $dbh = new PDO('mysql:host=localhost;dbname=maffi_d', 'maffi', 'maffi');
    //SQLを用意する
  $sql = 'INSERT INTO mailform_data '
       . '(name, mail, sex, tel, job, word,'
       . ' mail_flag, create_date)'
       . 'VALUES(:name, :mail, :sex,'
       . ' :tel, :job, :word, :mail_flag, NOW());';
  $stmt = $dbh->prepare($sql);
    //値をバインドする
  $stmt->bindParam(':name', $mail_data['name']);
  $stmt->bindParam(':mail', $mail_data['mail']);
  $stmt->bindParam(':tel', $mail_data['tel']);
  $stmt->bindParam(':sex', $mail_data['sex']);
  $stmt->bindParam(':job', $mail_data['job']);
  $stmt->bindParam(':word', $mail_data['word']);
  $stmt->bindParam(':mail_flag', $r);
  
  //SQLを実行する
  $stmt->execute();
  
} catch(PDOException $e){
    var_dump($e->getMessage());
}
// 切断
$pdo = null;

error_reporting(E_ALL ^ E_NOTICE); // Noticeを抑止

//テンプレート表示
  $smarty->display('contact/contactform_fin.tpl');

//共通の後処理
require_once('../finalize.inc.php');






