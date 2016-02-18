<!DOCTYPE html>
<html>
	<head>
		<title>작심5일</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1><a href="index.html">작심5일</a></h1>
		<ol>
			<li><a href="index.php?id=1">HTML</a></li>
			<li><a href="index.php?id=2">CSS</a></li>
			<li><a href="index.php?id=3">JavaScript</a></li>
		</ol>
		<div id="article">
			<?php
      $id = $_GET['id'];
      if($id == 1){
        print('
        <h2>HTML</h2>
        HTML이란 웹페이지를 만드는 언어이다.
        ');
      }
      if($id == 2){
        print('
        <h2>CSS</h2>
        CSS이란 웹페이지를 디자인 하는 언어이다.
        ');
      }
      if($id == 3){
        print('
        <h2>JavaScript</h2>
        JS이란 웹페이지를 제어하는 언어이다.
        ');
      }
      ?>
		</div>
</body>




</html>
