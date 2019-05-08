<?
$arr = [
    'Get' => 'Ограниченный объем передаваемых данных. Запрос виден в URL, и является уязвимостью запроса.<br> Можно передавать данные не через форму, а через URL страницы, введя необходиые данные после &. ',
    'Post' => 'Объем передаваемой информации значительно выше. Позволяет передавать файлы. Запрос не виден в URL.',
];
?>
<? echo '<h3>Отличия GET и Post запросов</h3>' ?>
<? foreach ($arr as $key => $item) { ?>
    <? echo '<pre>' ?>
    <? echo '<h2>' . $key . '</h2> - ' . $item ?>
    <? echo '</pre>' ?>
<? } ?>


<? if ((isset($_GET['name'])) && (isset($_GET['secondName'])) && (isset($_GET['age']))) {
    echo 'Привет, меня зовут - ' . $_GET['name'] . ' ' . $_GET['secondName'] . '<br>';
    echo 'Мне ' . $_GET['age'] . 'года';
    die();
} ?>

    <form method="get">
        <h2>Get</h2>
        <label for="name">Имя</label><input type="text" name="name">
        <label for="secondName">Фамилия</label><input type="text" name="secondName">
        <label for="age">Возраст</label><input type="text" name="age">
        <input type="submit">
    </form>


    <form method="post">
        <h2>Post</h2>
        <label for="name">Имя</label><input type="text" name="name">
        <label for="secondName">Фамилия</label><input type="text" name="secondName">
        <label for="age">Возраст</label><input type="text" name="age">
        <input type="submit">
    </form>
<? if ((isset($_POST['name'])) && (isset($_POST['secondName'])) && (isset($_POST['age']))) {
    echo 'Привет, меня зовут - ' . $_POST['name'] . ' ' . $_POST['secondName'] . '. Мне ' . $_POST['age'];
    die();
} ?>
