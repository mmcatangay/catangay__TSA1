<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
</head>
<body>
    <nav>
        <a href="/">For Today</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile Page</a> |
        <a href="/about">About Page</a>
    </nav>

    <h1>Complete Task List</h1>
    <table border="1" cellpadding="8">
        <tr><th>Title</th><th>Status</th><th>Task Date</th><th>Created At</th></tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
                <td><?= esc($task['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
