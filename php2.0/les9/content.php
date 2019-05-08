<?
session_start();
if(!$_SESSION['login'] || !$_SESSION['password']){
    header("location: login.php");
    die();
}

if ($_POST['unlogin']){
    session_destroy();
    setcookie("background", "");
    header("location: login.php");
}
?>

<style>
    body{
        background: <?=$_COOKIE['background']?>;
    }
</style>
<p>Сайт только для авторизированных пользователей</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, quaerat!</p>

<form method="post" style="margin: 40px; font-size: 40px;">

    <input type="submit" name="unlogin" value="НА СТРАНИЦУ АВТОРИЗАЦИИ" style="font-size: 30px;">
</form>
</body>