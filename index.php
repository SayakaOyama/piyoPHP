
<?php
session_start();
$username = $_SESSION['name'];
$id = $_SESSION['id'];
if (isset($_SESSION['id'])) {//ログインしているとき
    $msg = 'こんにちは' . htmlspecialchars($username, \ENT_QUOTES, 'UTF-8') . 'さん';
    $link = '<a href="logout.php">ログアウト</a>';
} else {//ログインしていない時
    $msg = 'ログインしていません';
    $link = '<a href="login_form.php">ログイン</a>';
}
?>

<!DOCTYPE html>
<h1><?php echo $msg; ?></h1>

<a href="question_form.php">セルフチェック</a>
<a href="upload_form.php">投稿する</a>
<a href="search_form.php">検索する</a>
<br>
<?php echo $link; ?>
</html>
