<?php
$arr = ['Good Morning!', 'Hello!', 'Good Night!', 'Bad'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>git_study</title>
</head>
<body>
<h1>git_study</h1>
<?php foreach ($arr as $var): ?>
<p><?php echo $var; ?></p>
<?php endforeach; ?>
<a href="for.php">for.phpへ</a>
</body>
</html>
