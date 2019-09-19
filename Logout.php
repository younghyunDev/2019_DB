<?php
require_once './layout.php';

$base = new Layout;
$base->link = './style.css';

$base->LayoutMain();

unset($_SESSION['id']);
unset($_SESSION['permit']);
session_destroy();

echo "<script>alert('로그아웃 되었습니다.');location.replace('/')</script>";
?>