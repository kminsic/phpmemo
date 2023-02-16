<?php
// 로그인 되어 있으면 목록으로 이동
session_start();
if (isset($_SESSION['member_id'])){
    header("Location: /list.php");
    exit();
}

// 서비스 소개
?>
<!DOCTYPE html>
<html>
<head>
    <title>php-memo 목록</title>
</head>
<body>
<div id="wrap"">
<?php require_once("inc/header.php"); ?>
<h1>php-memo</h1>
</div>
</body>
</html>