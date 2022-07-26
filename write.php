<?php
    session_start();
    $login_user = $_SESSION["login_user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/write.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<title>글쓰기</title>
</head>
<body>
  <div class="container">
  <h1>글쓰기</h1>
  <form action="write_proc.php" method="post">
    <div class="item"><input class="title" type="text" name="title" placeholder="제목"></div>
    <div class="item"><textarea class="ctnt" name="ctnt" placeholder="내용"></textarea></div>
    <div class="item">
      <input type="submit" value="글쓰기">
      <input type="reset" value="초기화">
    </div>
  </form>
</div>
</body>
</html>