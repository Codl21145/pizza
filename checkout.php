<?php
session_start();
require_once "blocks/header.php";
require_once "classes/pizza_abstract_class.php";
require_once "classes/price_class.php";

$pizza = new Price ($_SESSION['p_price'], $_SESSION['s_price']);
$price = $pizza->calcPrice();

if ($_SESSION['check'] != null): ?>
    <a>Пицца <strong><?=$_SESSION['p_name'] ?></strong> - <?= $_SESSION['p_price'] ?>руб.</a>
    <br>
    <a>Соус <strong><?=$_SESSION['s_name'] ?></strong> - <?= $_SESSION['s_price'] ?> руб.</a>
    <br>
    <strong>Общая стоимость заказа - <?= $price ?> руб.</strong>
    <br>
    <br>
    <a>Спасибо за покупку!</a>
<?php endif; ?>

<?php
session_unset();
