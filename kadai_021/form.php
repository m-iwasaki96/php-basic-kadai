<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="./style.css">
    <title>個人情報入力フォーム</title>
</head>
<body>
    <h1>個人情報入力フォーム</h1>
    
        <form action="./confirmation.php" method="post">
            <div>
                <label>お名前</label>
                <input type="text" name="name" class="input-area">
            </div>
            <div>
                <p>性別</p>
                <label><input type="radio" name="gender" value="男性">男性</label>
                <label><input type="radio" name="gender" value="女性">女性</label>
            </div>
            <div>
                <label>メールアドレス</label>
                <input type="text" name="email" class="input-area">
            </div>
            <input type="submit" name="btn_confirm" value="入力内容確認">
        </form>
</body>
</html>