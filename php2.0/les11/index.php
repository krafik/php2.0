<?
ini_set('display_errors', 1);
error_reporting(E_ALL);

$countItem = 0;
if (isset($_POST['submit'])) {
    $countItem = count($_FILES['file']['name']);

}


$connection = new PDO('mysql:host=localhost; dbname=les11; charset=utf8', 'root', '');
if (isset($_POST['submit'])) {
    if ($countItem > 0 && $countItem <= 3) {
        for ($i = 0; $i < $countItem; $i++) {
            $fileName = $_FILES['file']['name'][$i];
            $fileTmpName = $_FILES['file']['tmp_name'][$i];
            $fileType = $_FILES['file']['type'][$i];
            $fileError = $_FILES['file']['error'][$i];
            $fileSize = $_FILES['file']['size'][$i];
            $fileExtension = explode('.', $fileName);
            $fileExtension = strtolower(end($fileExtension));
            $fileName = pathinfo($fileName)['filename'];

            $fileName = preg_replace('/[0-9]/', '', $fileName);
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            //abc.txt
            //end - обращаемся к последнему элементу массива
            //strtolower - капс в прописные буквы

            if (in_array($fileExtension, $allowedExtensions)) {
                if ($fileSize < 5000000) {
                    if ($fileError === 0) {
                        $connection->query("INSERT INTO `images` (`imgname`, `extension`)
                                  VALUES ('$fileName','$fileExtension');");
                        $lastID = $connection->query("SELECT MAX(id) FROM `images`");
                        $lastID = $lastID->fetchAll();
                        $lastID = $lastID[0][0];
                        $fileNameNew = $lastID . $fileName . '.' . $fileExtension;
                        $fileDestination = 'uploads/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        echo 'успех ';
                    } else {
                        echo 'Что-то пошло не так';
                    }
                } else {
                    echo 'самый большоей размер файла';
                }
            } else {
                echo 'неверный тип файла';
            }
        }
    } else {
        echo "слишком много файлов";
    }
}


$data = $connection->query('SELECT * FROM `images`');
echo "<div style='display: flex; align-items: flex-end; flex-wrap: wrap'>";
foreach ($data as $img) {

    $delete = "delete" . $img['id'];
    $image = "uploads/" . $img['id'] . $img['imgname'] . '.' . $img['extension'];
    if (isset($_POST[$delete])) {
        $imageID = $img['id'];
        $connection->query("DELETE FROM `les11`.`images` WHERE id = '$imageID'");
        if (file_exists($image)) {
            unlink($image);
        }

    }


    if (file_exists($image)) {
        echo "<div>";
        echo "<img width='150' height='150' src='$image'>";
        echo "";
        echo "<form method='post'> <button name='delete" . $img['id'] . "' style='display: block; margin:auto;'>
удалить</button> </form></div>";
    }

}

?>

<style>
    body {
        margin: 50px 100px;
        font-size: 25px;
    }

    input, button {
        outline: none;
        font-size: 25px;
    }
</style>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input multiple="multiple" type="file" name="file[]" id="my_images_upload" accept="image/gif, image/jpeg, image/png"
           required>
    <button name="submit">Отправить</button>
</form>
</body>
</html>
