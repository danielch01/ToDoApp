<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>To-Do App</title>
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="bcg">
	<div id="heading">
		<h1>TaskMaker</h1>
	</div>
</div>

<div class="container">
	<div class="jumbotron">
		<label><h2>Task</h2></label>
		<form class="input-group" action="list.php" method="post">
			<input type="text" class="form-control" name="task" placeholder="Enter a task">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit">
					<span class="glyphicon glyphicon-cloud"></span>
				</button>
			</div>
		</form>
		<br>

		<?php 

		$title = "TaskMaker";
		$dsn = "mysql:host=127.0.0.1;dbname=todo";
		$user = "root";
		$pass = "root";
		
		try{
			$conn = new PDO($dsn, $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql ="INSERT INTO task(task, complete) VALUES (?, ?)";
			$stmt = $conn->prepare($sql);
			$stmt->execute(array($_POST['taskname'], 0));

		} catch(PDOException $e) {
			echo "Connection Error: " . $e->getMessage();
		}
		?>
	</div>
</div>

</body>
</html>