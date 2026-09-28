<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
</head>
<body>

<nav>
    <a href="/">For Today</a> 
    <a href="/tasks">Task List</a> 
    <a href="/profile">Profile Page</a> 
    <a href="/about">About Page</a>
</nav>

<h1>Tasks for Today</h1>

<p>Date: <?= date('Y-m-d') ?></p>

<?php if (empty($tasks)): ?>
    <p>No tasks for today.</p>
<?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Date</th>
        </tr>

        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>
</html>
