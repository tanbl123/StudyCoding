<?php
require_once __DIR__ . "/functions.php";

$submitted = ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
$rawName = trim($_POST['name']??'');
$rawScore = trim($_POST['score']??'');

$validName = $rawName !== '';
$validScore = $rawScore !== '' && is_numeric($rawScore);

$score=$validScore?(float)$rawScore:null; 

?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <form action="" method="post">
            <label>Name:
                <input type="text" name="name" placeholder="Enter your name" value="<?= formatInput($rawName)?>">
                <?php if ($submitted && !$validName):?>
                    <br>
                    <span style="color:red">Name is required</span>
                <?php endif;?>
                <br>
            </label>
            <label>Score:
                <input type="number" name="score" placeholder="Enter your score" value="<?= formatInput($rawScore) ?>">
                <?php if ($submitted && !$validScore):?>
                    <br>
                    <span style="color:red">Score is required</span>
                <?php endif;?>
                <br>
            </label>
            <button type="submit">Submit</button>
        </form>
        <?php if ($submitted && $validName && $validScore): ?>
            <p><?= formatInput(formatRow($rawName, $score)) ?></p>
        <?php endif;?>
    </body>
</html>
