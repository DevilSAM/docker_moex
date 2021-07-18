<?php
session_start();

// это чтобы разлогиниться
if($_GET['do'] == 'logout'){
    unset($_SESSION['admin']);
    session_destroy();
}

// это если пароль или лгин неверные
if($_SESSION['admin'] != "admin"){
    header("Location: login.php");
    exit;
}
?>


<p>Добро пожаловать, admin!</p>
<button><a href="index.php?do=logout">Logout</a></button>

<div class="container">
    <h2>Тестовое задание на получение курсов валют</h2>
    <h3>Курс доллара: <span id="usd"></span></h3>
    <h3>Курс евро: <span id="eur"></span></h3>
    <button id="getData">Узнать курс валют</button>

</div>

<script src="script.js"></script>
