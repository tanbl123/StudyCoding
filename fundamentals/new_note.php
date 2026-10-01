<?php
require_once __DIR__ . "/db.php";

$submitted = ($_SERVER['REQUEST_METHOD']??'')==='POST';
$rawTitle = trim($_POST['title']??'');
$rawBody = trim($_POST['body']??'');

$validTitle = $rawTitle !== '' && mb_strlen($rawTitle)<= 200;
$validBody = $rawBody !== '';

if($submitted && $validTitle && $validBody){
    $stmt = $pdo->prepare('INSERT INTO notes(title, body) VALUES (:title, :body)');
    $stmt -> execute(['title'=>$rawTitle, 'body'=>$rawBody]);
    header('Location: notes.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form method="post" action=''>
            <label>Title: 
                <input type="text" name="title" value="<?= htmlspecialchars($rawTitle) ?>">
                <?php if($submitted && !$validTitle):?>
                    <br>
                    <span style="color:red">Please enter valid title.</span>
                <?php endif; ?>
            </label>
            <br>
            <label>Body :
                <textarea name="body"><?= htmlspecialchars($rawBody) ?></textarea>
                <?php if($submitted && !$validBody): ?>
                    <br>
                    <span style="color:red">Please enter valid body.</span>
                <?php endif; ?>
            </label>
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>