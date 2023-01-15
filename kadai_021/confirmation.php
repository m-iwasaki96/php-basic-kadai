<?php
var_dump($_POST);

// 変数の初期化
$page_flag = 0;

if (!empty($_POST['btn_confirm'])) {
    $page_flag = 1;
} elseif (!empty($_POST['btn_submit'])) {
    $page_flag = 2;
} elseif (!empty($_POST['btn_back'])) {
    $page_flag = 3;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="./style.css">
    <title>個人情報入力フォーム(確認画面)</title>
</head>
<body>
<?php if ($page_flag === 1): ?>

<form action="" method="post">
    <h2>確認画面</h2>
    <div>
        <label>氏名</label>
        <p><?php echo $_POST['name']; ?></p>
    </div>

    <div>
        <label>性別</label>
        <p><?php echo $_POST['gender']; ?></p>
    </div>

    <div>
        <label>メールアドレス</label>
        <p><?php echo $_POST['email']; ?></p>
    </div>
    <input type="submit" name="btn_back" value="戻る">
    <input type="submit" name="btn_submit" value="送信">
    <input type="hidden" name="name" value="<?php echo $_POST['name'] ?>">
    <input type="hidden" name="gender" value="<?php echo $_POST['gender'] ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
</form>

<?php elseif ($page_flag === 2): ?>

<p>送信が完了しました。</p>

<?php elseif ($page_flag === 3):
header('Location: ./form.php');
exit(); 
?>

<?php endif; ?>
</body>
</html>