<?php
include_once "db/db_board.php";

$i_board = $_POST['i_board'];
$title = $_POST['title'];
$ctnt = $_POST['ctnt'];
$page = $_POST['page'];
$row_count = $_POST['row_count'];

session_start();
if (isset($_SESSION['login_user'])) {
  $login_user = $_SESSION['login_user'];
  $i_user = $login_user['i_user'];
}

$param = [
  "i_board" => $i_board,
  "i_user" => $i_user,
  "title" => $title,
  "ctnt" => $ctnt
];
$result = upd_board($param);
if ($result) {
  header("Location: detail.php?i_board=$i_board&page=$page&row_count=$row_count");
}
