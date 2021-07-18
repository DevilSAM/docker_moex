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
    <h2>Курс доллара и евро (с сайта moex.com)</h2>
    <h3>Курс доллара: <span id="usd"> _______ </span> руб.</h3>
    <h3>Курс евро: <span id="eur"> _______ </span> руб.</h3>
    <button id="getData">Узнать курс валют</button>

</div>

<script src="script.js"></script>
