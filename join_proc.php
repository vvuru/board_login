<?php
include_once "db/db_user.php";

$uid = $_POST['uid'];
$upw = $_POST['upw'];
$confirm_upw = $_POST['confirm_upw'];
$nm = $_POST['nm'];
$gender = $_POST['gender'];

$param = [
  "uid" => $uid,
  "upw" => $upw,
  "nm" => $nm,
  "gender" => $gender
];

if ($upw === $confirm_upw) {
  $result = ins_user($param);
  header("Location: login.php");
} else {
  echo "비밀번호 다름";
}
