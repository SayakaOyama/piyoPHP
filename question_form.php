<!DOCTYPE html>
<form action="question.php" method="post">
<div>
    <input type="radio" name="sex" value="1" required>男性
    <input type="radio" name="sex" value="2" required>女性
</div>
<br>
<div>
    <label>乾燥について</label>
    <input type="radio" name="dry" value="1" required>気にならない
    <input type="radio" name="dry" value="2" required>気になる
</div>
<br>
<div>
    <label>てかりについて</label>
    <input type="radio" name="oily" value="1" required>気にならない
    <input type="radio" name="oily" value="2" required>気になる
</div>
<br>
<div>
    <label>にきびについて</label>
    <input type="radio" name="acne" value="1" required>気にならない
    <input type="radio" name="acne" value="2" required>気になる
</div>
<br>
<div>
    <label>肌の色</label>
    <input type="radio" name="skinclr" value="1" required>白い
    <input type="radio" name="skinclr" value="2" required>黄色い
</div>
<input type="submit" value ="確定">
</form>
</html>