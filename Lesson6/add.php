<?php
require_once 'config.php';
$now = date('Y-m-d H:i:s'); //投稿時間を取得
$query = 'INSERT INTO articles(article,author,create_date,update_date)
 VALUES (:article,:author,:create_date,:update_date)';
// SQLが実行可能な状態にしておく
$stmt = $dbh->prepare($query);
$stmt->bindParam(':article', $_POST['article'],PDO::PARAM_STR);
$stmt->bindParam(':author', $_POST['name'],PDO::PARAM_STR);
$stmt->bindParam(':create_date',$now ,PDO::PARAM_STR);
$stmt->bindParam(':update_date',$now ,PDO::PARAM_STR);
// 実 行
$stmt->execute();
// あとはTwig使って表示するだけ。
print($twig->render('done.tpl',
  array('article'=>$_POST['article'],'name'=> $_POST['name'])));
// データベースの接続を終了する
unset($dbh);
