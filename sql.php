<?php
session_start();
$_SESSION['check'] = 'ok';


// подключение к базе данных
$mysql = new mysqli('localhost', 'root', '', 'pizza');

if($mysql->connect_error)
{
    echo 'Не удалось подключиться к базе данных' . "<br>";
    echo $mysql->connect_error . "<br>";
    exit();
}
else
{
    $mysql->query("SET NAMES 'utf8'");

    $p = $_POST['pizza'];
    $s = $_POST['size'];
    $sause = $_POST['sause'];

    $pizza_data = $mysql->query("SELECT * FROM pizza WHERE pizza_name = '$p' AND size = '$s'");
    $pizza_result = $pizza_data->fetch_assoc();
    $sause_data = $mysql->query("SELECT * FROM sause WHERE sause_name = '$sause'");
    $sause_result = $sause_data->fetch_assoc();

    // запись информации из базы данных в переменную сессии
    $_SESSION['p_price'] = $pizza_result['price'];
    $_SESSION['p_name'] = $pizza_result['pizza_name'];
    $_SESSION['s_price'] = $sause_result['price'];
    $_SESSION['s_name'] = $sause_result['sause_name'];

}

$mysql->close();

?>

<a>
    hello
</a>

