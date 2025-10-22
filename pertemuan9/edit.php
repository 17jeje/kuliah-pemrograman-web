<?php
require 'database.php';
require 'functions.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$task = getTaskById($conn, $_GET['id']);

if (!$task) {
    echo "Task tidak ditemukan!";
    exit;
}

if (isset($_POST['edit'])) {
    updateTask($conn, $_GET['id'], $_POST['task']);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Task</title>
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div class="header">
		<div class="title">
			<a href="index.php"><i class='bx bx-chevron-left'></i></a>
			<span>Back</span>
		</div>
		<div class="description"><?= date("l, d M Y") ?></div>
	</div>

	<div class="content">
		<div class="card">
			<form method="post">
				<input type="text" name="task" class="input-control" value="<?= htmlspecialchars($task->tasklabel) ?>" required>
				<div class="text-right">
					<button type="submit" name="edit">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
