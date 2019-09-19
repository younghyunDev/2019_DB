<?php
include_once "./layout.php"; // 레이아웃을 include 함 

$base = new Layout; // Layout class 객체를 생성

$base->link='./style.css'; // 스타일 추가

$base->content="내용이 들어가는 부분입니다."; //본문을 만듦

$base->LayoutMain(); //위의 변수들이 입력된 객체를 출력
?>