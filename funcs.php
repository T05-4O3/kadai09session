<?php
// 0.htmlspecialcharsの(引数での)関数化 returnを加えることで、外も中でも動くようにする
// XSS対応　（echoする場所で使用！それ以外ではNG
function h($hsc) {
  return htmlspecialchars($hsc, ENT_QUOTES, 'utf-8');
}

// DB接続
function db_conn() {
  try {
    $db_name = 'cgp2_movie_db'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8mb4;host=' . $db_host, $db_id, $db_pw);
    return $pdo;
    } catch (PDOException $e) {
      exit('DB Connection Error' . $e->getMessage());
    }
}

// SQLエラー
function sql_error($stmt) {
  // execute (SQL実行時にエラーがある場合)
  $error = $stmt -> errorInfo();
  exit('SQLError:' . $error(2));
}

// リダイレクト
function redirect($file_name) {
  header('location: ' . $file_name);
  exit();
}

// ログインチェック処理　loginCheck()
function loginCheck() {
  if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()) {
    exit('LOGIN ERROR');
  } else {
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
  }
}
