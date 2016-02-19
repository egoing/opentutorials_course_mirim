<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>작심5일</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body id="target" class="white">
		<h1><a href="index.php">작심5일</a></h1>
		<ol>
			<?php
			$sql = "SELECT id, title FROM topic";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)){
				print("<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>");
			}
			?>
		</ol>
		<div id="article">
			<input type="button" value="white" onclick="document.getElementById('target').className='white'">
			<input type="button" value="black" onclick="document.getElementById('target').className='black'">
			<?php
			if(empty($_GET['id'])) {
				print("<h2>Welcome!!!!</h2>");
			} else {
					$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					print("<h2>{$row['title']}</h2>");
					print($row['description']);

				// $id = $_GET['id'];
	      // $data = file_get_contents("{$id}.txt");
				// print($data);
			}
      ?>
		</div>
</body>



</html>
