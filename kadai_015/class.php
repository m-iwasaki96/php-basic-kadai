<?php
class Food {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price () {
        echo $this->price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo $this->height;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // インスタンス化
        $rice = new Food('rice', 150);
        $dog = new Animal('dog', 50, 3000);

        // 出力
        print_r($rice);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        // メソッドの実行
        $rice->show_price();
        echo '<br>';
        $dog->show_height();
        ?>
    </p>
</body>
</html>