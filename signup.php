<!DOCTYPE html>

<h1>新規会員登録</h1>
<form action="register.php" method="post">
<div>
    <label>ユーザーネーム：<label>
    <input type="varchar(255)" name="name" required>
</div>
<div>
    <label>メールアドレス：<label>
    <input type="text" name="mail" required>
</div>
<div>
    <label>パスワード：<label>
    <input type="varchar(255)" name="pass" required>
</div>
<input type="submit" value="新規登録">
</form>
<p>すでに登録済みの方は<a href="login_form.php">こちら</a></p>

</html>