//index.php
<?php 
require_once('data.php');
require_once('menu.php');
?>

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
    <h3>Jumlah item: <?php echo Menu::getCount() ?></h3>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <!-- Tambahkan query string untuk kunci "name" -->
              <a href="show.php?name=<?php echo $menu->getName() ?>">
                <?php echo $menu->getName() ?>
              </a>
            </h3>
            <?php if ($menu instanceof Drink): ?>
              <p class="menu-item-type"><?php echo $menu->getType() ?></p>
            <?php else: ?>
              <?php for ($i=0; $i<$menu->getSpiciness(); $i++): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
              <?php endfor ?>
            <?php endif ?>
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
  protected $name;
  protected $price;
  protected $image;
  private $orderCount = 0;
  protected static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
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
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  public static function getCount() {
    return self::$count;
  }
  
}
?>

//drink.php
<?php 
require_once('menu.php');

class Drink extends Menu {
  private $type;
  
  public function __construct($name, $price, $image, $type) {
    parent::__construct($name, $price, $image);
    $this->type = $type;
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>

//food.php
<?php 
require_once('menu.php');

class Food extends Menu {
  private $spiciness;
  
  public function __construct($name, $price, $image, $spiciness) {
    parent::__construct($name, $price, $image);
    $this->spiciness = $spiciness;
  }
  
  public function getSpiciness() {
    return $this->spiciness;
  }
  
}

?>

//data.php
<?php
require_once('drink.php');
require_once('food.php');

$juice = new Drink('JUS', 6, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'dingin');
$coffee = new Drink('KOPI', 5, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'panas');
$curry = new Food('GULAI', 9, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
$pasta = new Food('PASTA', 12, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

$menus = array($juice, $coffee, $curry, $pasta);

?>

//confirm.php
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
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        $totalPayment += $menu->getTotalPrice();
        
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
      </p>
      <p class="order-price">$<?php echo $menu->getTotalPrice() ?></p>
    <?php endforeach ?>
    <h3>Harga total: <?php echo $totalPayment ?></h3>
  </div>
</body>
</html>

//show.php
<?php
// Terima data query menggunakan $_GET, dan tetapkan ke variable $menuName
$menuName = $_GET['name'];
?>

<!-- Cetak variable $menuName -->
<h1><?php echo $menuName ?> halaman detail</h1>

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

.menu-item-type {
  font-size: 14px;
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

.icon-spiciness {
  width: 20px;
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
  background-color: #F8F8F8;
  line-height: 2;
  letter-spacing: 0.1em;
  width: 500px;
  margin: 60px auto;
  padding: 20px 0px 30px;
  border-radius: 5px;
  box-shadow: 0px 1px 4px #CCD7D4;
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
  border-top: 1px solid #DAE1E7;
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

/* Review CSS */
.review-wrapper {
  text-align: center;
  width: 400px;
  margin: 60px auto;
}

.review-menu-item {
  border-radius: 5px;
  margin: 0 auto;
  padding-bottom: 20px;
  border: 1px solid #dadada;
}

.review-menu-item img {
  border-radius: 5px 5px 0 0;
}

.review-menu-item .menu-item-type {
  color: #c2c8ce;
  font-size: 16px;
}

.review-menu-item .price {
  font-size: 20px;
}

.review-list-wrapper {
  margin: 50px 0;
  text-align: left;
}

.review-list-title {
  padding-bottom: 10px;
  margin-bottom: 30px;
  border-bottom: 1px solid rgba(104, 107, 106, 0.15);
}

.review-list-title h4 {
  font-size: 22px;
}

.review-list-item {
  margin-bottom: 30px;
  background: #e5eef6;
  padding: 10px;
  border-radius: 5px;
}

.review-list-title img, .review-list-title h4, .review-list-item img {
  display: inline-block;
  vertical-align: middle;
}

.icon-review {
  width: 40px;
  margin-right: 10px;
  margin-top: -12px;
}

.icon-user {
  width: 30px;
}

.review-user {
  width: 60px;
  display: inline-block;
  border-right: 1px solid #c1ced7;
  padding-right: 8px;
  text-align: center;
}

.review-text {
  display: inline-block;
  vertical-align: top;
  margin-top: 16px;
  margin-left: 10px;
  font-size: 15px;
}
