<?
session_start();
if ($_POST['color']) {
    setcookie('background', $_POST['color']);
    print_r($_COOKIE['background']);

}

$connection = new PDO("mysql:host=localhost; dbname=les8; charset=utf8", 'root', '');
$login = $connection->query("SELECT * FROM `logpass`");
if($_SESSION['login'] || $_SESSION['password']){
    header("location: content.php");
    die();
}

if ($_POST['login']) {
    foreach ($login as $log) {
        if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header("location: content.php");
        }
    }
    echo "неверный логин или пароль";
}

?>


<style>
    body {
        margin: 200px 300px;
    }

    input, p {
        font-size: 30px;
        margin: 10px;
    }
</style>


<form method="post">
    <p>Авторизируйтесь</p>
    <input type="text" name="login" required placeholder="Логин"><br>
    <input type="password" name="password" required placeholder="Пароль"><br>
    <select name="color" required>
        <option value="red">красный</option>
        <option value="navy">синий</option>
    </select> <br>
    <input type="submit" >

</form>