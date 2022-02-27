<?php
session_start();

require_once "blocks/header.php";

function redirect()
{
    header('Location: checkout.php');
    exit;
}

?>

<form class="form" id="myForm">
    <label for="pizza">Выберите пиццу:</label>
    <select name="pizza" id="pizza">
        <option value="Пепперони">Пепперони</option>
        <option value="Деревенская">Деревенская</option>
        <option value="Гавайская">Гавайская</option>
        <option value="Грибная">Грибная</option>
    </select>
    <br>
    <label for="size">Размер пиццы:</label>
    <select name="size" id="size">
        <option value="21">21</option>
        <option value="26">26</option>
        <option value="31">31</option>
        <option value="45">45</option>
    </select>
    <br>
    <label for="sause">Соус:</label>
    <select name="sause" id="sause">
        <option value="сырный">сырный</option>
        <option value="кисло-сладкий">кисло-сладкий</option>
        <option value="чесночный">чесночный</option>
        <option value="барбекю">барбекю</option>
    </select>
    <br>
    <button onclick="myFunction()" type="submit">Заказать</button>
    <br>
</form>

<script>
    const myForm = document.getElementById('myForm');

    function myFunction() {
        myForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const searchParams = new URLSearchParams();

            for (const pair of formData) {
                searchParams.append(pair[0], pair[1], pair[2], pair[3]);
            }

            fetch('sql.php', {
                method: 'post',
                body: searchParams
            }).then(function(response) {
                return response.text();
            }).then(function(text) {
                console.log(text);
            }).catch(function(error) {
                console.error(error);
            })
            window.location.reload();
        });
    }
</script>

<?php

if (isset($_SESSION['check'])) {
    if ($_SESSION['check'] == 'ok') {
        redirect();
        exit();
    }
}
?>