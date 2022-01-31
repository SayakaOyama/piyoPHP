<?php
session_start();
$name = $_SESSION['name'];
if (isset($_SESSION['id'])) {//ログインしているとき
    $msg_hello = htmlspecialchars($name, \ENT_QUOTES, 'UTF-8') . 'さんの特徴';
} else {
  $msg_hello = 'エラー';
}    
$sex = $_POST['sex'];
$dry = $_POST['dry'];
$oily = $_POST['oily'];
$acne = $_POST['acne'];
$skinclr = $_POST['skinclr'];
$ID = $_SESSION['id'];
$dsn = "mysql:host=localhost; dbname=mydb; charset=utf8";
$username = "selfusr";
$password = "1234";

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT * FROM member WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':id', $ID);
$stmt->execute();
$member = $stmt->fetch();
if ($member['id'] !== $ID) {
    $msg_qst = 'ゲストのため、保存されません。';
    $link = '<a href="index.php">戻る</a>';
} else {
    //登録されていなければinsert 
    $sql = "INSERT INTO details(details_id, sex, dry, oily, acne, skinclr,skn_type) VALUE (:details_id, :sex, :dry, :oily, :acne, :skinclr, :skn_type)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':details_id', $ID);
    $stmt->bindValue(':sex', $sex);
    $stmt->bindValue(':dry', $dry);
    $stmt->bindValue(':oily', $oily);
    $stmt->bindValue(':acne', $acne);
    $stmt->bindValue(':skinclr', $skinclr);

    if($sex = 1 && $dry = 1 && $oily = 1 && $acne = 1){
        $skn_type = 1;
    }   
    if($sex = 1 && $dry = 1 && $oily = 1 && $acne = 2){
        $skn_type = 2;
    } 
    if($sex = 1 && $dry = 1 && $oily = 2 && $acne = 1){
        $skn_type = 3;
    }   
    if($sex = 1 && $dry = 1 && $oily = 2 && $acne = 2){
        $skn_type = 4;
    }   
    if($sex = 1 && $dry = 2 && $oily = 1 && $acne = 1){
        $skn_type = 5;
    }   
    if($sex = 1 && $dry = 2 && $oily = 1 && $acne = 2){
        $skn_type = 6;
    }   
    if($sex = 1 && $dry = 2 && $oily = 2 && $acne = 1){
        $skn_type = 7;
    }   
    if($sex = 1 && $dry = 2 && $oily = 2 && $acne = 2){
        $skn_type = 8;
    }   
    if($sex = 2 && $dry = 1 && $oily = 1 && $acne = 1){
        $skn_type = 9;
    }   
    if($sex = 2 && $dry = 1 && $oily = 1 && $acne = 2){
        $skn_type = 10;
    }   
    if($sex = 2 && $dry = 1 && $oily = 2 && $acne = 1){
        $skn_type = 11;
    }   
    if($sex = 2 && $dry = 1 && $oily = 2 && $acne = 2){
        $skn_type = 12;
    }   
    if($sex = 2 && $dry = 2 && $oily = 1 && $acne = 1){
        $skn_type = 13;
    }   
    if($sex = 2 && $dry = 2 && $oily = 1 && $acne = 2){
        $skn_type = 14;
    }   
    if($sex = 2 && $dry = 2 && $oily = 2 && $acne = 1){
        $skn_type = 15;
    }   
    if($sex = 2 && $dry = 2 && $oily = 2 && $acne = 2){
        $skn_type = 16;
    } 
    
    $stmt->bindValue(':skn_type', $skn_type);
    $stmt->execute();
    $msg_qst = '登録が完了しました';
    $link = '<a href="index.php">ホーム</a>';
}
?>
<h1><?php echo $msg_hello; ?></h1>

<h1><?php echo $msg_qst; ?></h1><!--メッセージの出力-->
<?php echo $link; ?>
