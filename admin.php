<?php
// open file read lines
$rows = file("registrations.txt", FILE_IGNORE_NEW_LINES);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Registrations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formdiv">
        <h2>Mini-Hackathon Registrations</h2>

        <?php if (!empty($rows)): ?>
            <?php foreach ($rows as $row): ?>
                <?php
                $parts = explode(",", $row);
                // $parts[0] = name, [1] = email, [2] = track, [3] = shirt, [4] = laptop
                ?>
                <div class="card">
                    <p><strong>Name:</strong> <?= $parts[0] ?></p>
                    <p><strong>Email:</strong> <?= $parts[1] ?></p>
                    <p><strong>Track:</strong> <?= $parts[2] ?></p>
                    <p><strong>Shirt:</strong> <?= $parts[3] ?></p>
                    <p><strong>Laptop:</strong> <?= $parts[4] ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="color:red; font-weight:bold;">No registrations yet.</p>
        <?php endif; ?>
    </div>
</body>
</html>