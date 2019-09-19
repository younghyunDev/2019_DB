<?php
require_once './layout.php';
require_once './db.php';

$db = new DBC;
$db->DBI();

$base = new Layout;
$base->link = './style.css';

$id = $_POST['id'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$mail = $_POST['mail'];
$date = date('Y-m-d');

if($pass1 == $pass2)
{
	$pass = $pass1;
} else
{
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('비밀번호가 맞지 않습니다.');history.back();</script>";
	exit;
}

$db->query = "insert into member values ('".$id."', password('".$pass."'), '".$mail."', '".$date."', 1)";
$db->DBQ();

if(!$db->result)
{
	header("Content-Type: text/html; charset=UTF-8");
	echo "<script>alert('회원가입에 실패하였습니다.');history.back();</script>";
	$db->DBO();
	exit;
	
} else
{
	echo "<script>alert('회원가입 되었습니다. 로그인 화면으로 이동합니다.');location.replace('./login.php');</script>";
	$db->DBO();
	exit;
}


$base->content = "";

$base->LayoutMain();

?>