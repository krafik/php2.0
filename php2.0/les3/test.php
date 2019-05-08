<? if ((isset($_GET['ok1'])) && (isset($_GET['ok2'])) && (isset($_GET['ok3']))) {
    $a1=$_GET["ok1"];
    $a2=$_GET["ok2"];
    $a3=$_GET["ok3"];

    $p = ($a1 + $a2 + $a3)/2;
    $temp = $p*($p-$a1)*($p-$a2)*($p-$a3);
    $S = sqrt($temp);
    echo $S;
    die();
} ?>
<form method="get">
    <table>
        <tr>
            <td>Первая сторона:</td>
            <td><input type="text" name="ok1"></td>
        </tr>

        <tr>
            <td>Вторая сторона:</td>
            <td><input type="text" name="ok2"></td>
        </tr>

        <tr>
            <td>Третья сторона:</td>
            <td><input type="text" name="ok3"></td>
        </tr>

        <tr>
            <td><input type = "submit" name = "submit" value = "Submit"></td>
        </tr>
    </table>
</form>