<?php
function getTasks($conn) {
    $sql = "SELECT * FROM tasks ORDER BY taskid DESC";
    return $conn->query($sql);
}

function addTask($conn, $task) {
    if (empty(trim($task))) return false;
    $stmt = $conn->prepare("INSERT INTO tasks (tasklabel, taskstatus) VALUES (?, 'open')");
    $stmt->bind_param("s", $task);
    return $stmt->execute();
}

function deleteTask($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM tasks WHERE taskid = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

function toggleTaskStatus($conn, $id, $status) {
    $newStatus = ($status === 'open') ? 'close' : 'open';
    $stmt = $conn->prepare("UPDATE tasks SET taskstatus = ? WHERE taskid = ?");
    $stmt->bind_param("si", $newStatus, $id);
    return $stmt->execute();
}

function updateTask($conn, $id, $label) {
    $stmt = $conn->prepare("UPDATE tasks SET tasklabel = ? WHERE taskid = ?");
    $stmt->bind_param("si", $label, $id);
    return $stmt->execute();
}

function getTaskById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE taskid = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_object();
}
?>
