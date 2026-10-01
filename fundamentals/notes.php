<?php
require_once __DIR__ . '/db.php';

$stmt = $pdo->query('SELECT id, title, body, created_at FROM notes ORDER BY created_at DESC');
$notes = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <?php if (!$notes):?>
            <p>No notes yet.</p>

        <?php else: ?>
            <?php foreach ($notes as $note):?>
                <article>
                    <h2><?= htmlspecialchars($note['title']) ?></h2>
                    <small><?= date('j M Y, H:i', strtotime($note['created_at'])) ?></small>
                    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>
                </article>
            <?php endforeach;?>
        <?php endif; ?>
        <a href="new_note.php">New Note</a>
    </body>
</html>

