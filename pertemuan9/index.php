<?php
require 'database.php';
require 'functions.php';

// Tambah task
if (isset($_POST['add'])) {
    addTask($conn, $_POST['task']);
    header("Location: index.php");
    exit;
}

// Hapus task
if (isset($_GET['delete'])) {
    deleteTask($conn, $_GET['delete']);
    header("Location: index.php");
    exit;
}

// Ubah status open/close
if (isset($_GET['done'])) {
    toggleTaskStatus($conn, $_GET['done'], $_GET['status']);
    header("Location: index.php");
    exit;
}

$tasks = getTasks($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>To Do List</title>
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div class="header">
		<div class="title">
			<i class='bx bx-sun'></i>
			<span>To Do List</span>
		</div>
		<div class="description"><?= date("l, d M Y") ?></div>
	</div>

	<div class="content">
		<div class="card">
			<form method="post">
				<input type="text" name="task" class="input-control" placeholder="Add task" required>
				<div class="text-right">
					<button type="submit" name="add">Add</button>
				</div>
			</form>
		</div>

		<?php if ($tasks->num_rows > 0): ?>
			<?php while ($r = $tasks->fetch_assoc()): ?>
			<div class="card">
				<div class="task-item <?= $r['taskstatus'] === 'close' ? 'done' : '' ?>">
					<div>
						<input type="checkbox" onclick="window.location.href='?done=<?= $r['taskid'] ?>&status=<?= $r['taskstatus'] ?>'" <?= $r['taskstatus'] === 'close' ? 'checked' : '' ?>>
						<span><?= htmlspecialchars($r['tasklabel']) ?></span>
					</div>
					<div>
						<a href="edit.php?id=<?= $r['taskid'] ?>" class="text-orange"><i class="bx bx-edit"></i></a>
						<a href="?delete=<?= $r['taskid'] ?>" class="text-red" onclick="return confirm('Are you sure?')"><i class="bx bx-trash"></i></a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php else: ?>
			<div>Belum ada task.</div>
		<?php endif; ?>
	</div>
</div>

</body>
</html>
