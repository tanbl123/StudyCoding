<?php
require_once __DIR__ . '/db.php';

$id = filter_var($_GET['id'] ?? '', FILTER_VALIDATE_INT);
if($id === false || $id <1){
    http_response_code(400);
    exit('Bad id');
}

$stmt = $pdo->prepare('SELECT id, title, body FROM notes WHERE id=?');
$stmt -> execute([$id]);
$note = $stmt->fetch();
if(!$note){
    http_response_code(404);
    exit('Not Found');
}

$submitted = ($_SERVER['REQUEST_METHOD']??'')==="POST";
$rawTitle = $submitted ? trim($_POST['title']??'') : $note['title'];
$rawBody = $submitted ? trim($_POST['body']) : $note['body'];

$validTitle = $rawTitle !== '' && mb_strlen($rawTitle)<=200;
$validBody = $rawBody !== '';

if($submitted && $validTitle && $validBody){
    $u = $pdo->prepare('UPDATE notes SET title=?, body=? WHERE id=?');
    $u->execute([$rawTitle, $rawBody, $id]);
    header('Location: notes.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="">
            <label>Title:
                <input type="text" name="title" value="<?= htmlspecialchars($rawTitle) ?>">
            </label>
            
        </form>
    </body>
</html>

