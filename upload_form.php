<!DOCTYPE html>
<form action="upload.php" method="post" enctype="multipart/form-data">
<h1>投稿</h1>
<br>
<p>コメント</p>
<input type="text" name="text" size="30" maxlength="30">
<br>
<p>アップロードする画像ファイルを選択する:</p>
<input type="file" name="file">
<input type="submit" name="submit" value="Upload">
</form>
</html>