<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
</head>
<body>
    <nav>
        <a href="/">For Today</a> |
        <a href="/tasks">Tasks List</a> |
        <a href="/profile">Profile Page</a> |
        <a href="/about">About Page</a>
    </nav>

    <h1>User Profile</h1>
    <?php if ($user): ?>
        <p><strong>Username:</strong> <?= esc($user['mmcatangay']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['Maria Angela M. Catangay']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['01234@email.compact']) ?></p>
    <?php else: ?>
        <p>No user record found.</p>
    <?php endif; ?>
</body>
</html>
