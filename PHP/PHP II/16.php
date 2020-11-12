//index.php
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
            <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?> (termasuk pajak)</p>
            <span>Qty: </span>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>

//menu.php
<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo 'I am '.$this->name;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return round($this->price * 1.0725, 2);
  }
  
}
?>

//data.php
<?php
require_once('menu.php');

$juice = new Menu('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);

?>

//confirm.php
<!-- Import data.php -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <?php foreach ($menus as $menu): ?>
      <!-- Deklarasikan variable $orderCount -->
      <?php $orderCount = $_POST[$menu->getName()] ?>
      <p class="order-amount">
        <!-- Cetak property name milik $menu menggunakan method getName -->
        <?php echo $menu->getName() ?>
        x
        <!-- Cetak variable $orderCount -->
        <?php echo $orderCount ?>
      </p>
    <?php endforeach ?>
  </div>
</body>
</html>

//css
/* CSS General */
* {
  box-sizing: border-box;
}

html, body,
ul, ol, li,
h1, h2, h3, h4, h5, h6, p,
form, input, div {
  margin: 0;
  padding: 0;
}

body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 14px;
  letter-spacing: 0.05em;
  color: #89949e;
}

h2, h3, h4, h5, h6 {
  font-weight: 400;
}

a {
  text-decoration: none;
  color: #4ac0b9;
}

a:hover {
  text-decoration: underline;
}

a:visited {
  color: #4ac0b9;
}

img {
  width: 100%;
}

.container {
  width: 1170px;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

/* CSS Menu */
.logo {
  font-family: Pacifico, sans-serif;
  font-size: 40px;
  color: #4ac0b9;
  display: inline-block;
  padding: 20px 0;
  margin: 80px 0 30px;
  border-top: 5px solid #42c7c1;
  border-bottom: 5px solid #42c7c1;
}

.menu-wrapper {
  margin-bottom: 60px;  
  text-align: center;
}

.menu-item-name {
  line-height: 1.7;
  font-size: 25px;
  margin-top: 15px;
  color: #4ac0b9;
}

.price {
  margin: 15px 0;
  font-size: 18px;
  color: #322f33;
}

.menu-items {
  margin-bottom: 60px;
}

.menu-item {
  display: inline-block;
  width: 40%;
  padding: 20px;
  margin-top: 40px;
}

.menu-item-image {
  border-radius: 5px;
}

.menu-item span {
  font-size: 16px;
}

input {
  margin-left: 20px;
  margin-right: 10px;
  padding: 5px;
  text-align: center;
  width: 60px;
  font-size: 14px;
  margin-top: 10px;
}

input[type="submit"] {
  display: inline-block;
  width: 160px;
  height: 48px;
  line-height: 48px;
  padding: 0 20px;
  border-radius: 30px;
  border-style: none;
  color: white;
  background-color: #42c7c1;
  font-size: 15px;
  letter-spacing: 0.1em;
}

/* CSS Order */
.order-wrapper {
  text-align: center;
  background-color: #f8f8f8;
  line-height: 2;
  letter-spacing: 0.1em;
  width: 500px;
  margin: 60px auto;
  padding: 20px 0px 30px;
  border-radius: 5px;
  box-shadow: 0px 1px 4px #ccd7d4;
}

.order-wrapper h2 {
  font-size: 32px;
  margin: 30px 0;
  color: #322f33;
}

.order-wrapper p {
  display: inline-block;
  font-size: 22px;
}

.order-wrapper h3 {
  border-top: 1px solid #dae1e7;
  margin-top: 30px;
  padding-top: 30px;
  font-size: 28px;
  color: #42c7c1;
}

.order-wrapper h4 {
  margin-top: 40px;
  font-size: 25px;
  color: #322f33;
}

.order-amount {
  width: 40%;
  text-align: left;
}

.order-price {
  width: 35%;
  text-align: right;
}
