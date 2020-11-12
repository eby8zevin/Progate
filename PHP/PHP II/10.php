//index.php
<?php
// Pindahkan class Menu ke menu.php

// -------------------------------

// Pindahkan deklarasi variable dibawah ke data.php

// ---------------------------------------

?>

<!-- Import data.php -->
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
    <div class="menu-items">
      <?php foreach ($menus as $menu): ?>
        <h3 class="menu-item-name"><?php echo $menu->name ?></h3>
      <?php endforeach ?>
      
    </div>
  </div>
</body>
</html>

//menu.php
<?php
// Pindahkan class Menu kesini
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

?>

//data.php
<?php
// Import menu.php
require_once('menu.php');

// Pindahkan deklarasi variable kesini 
$juice = new Menu('JUS');
$coffee = new Menu('KOPI');
$curry = new Menu('GULAI');
$pasta = new Menu('PASTA');

$menus = array($juice, $coffee, $curry, $pasta);

?>

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
