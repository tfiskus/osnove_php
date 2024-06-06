<?php

$uploadDir = __DIR__ . '/uploads';

if (!empty($_FILES)) {
IF (is_dir($uploadDir) === false) {
    mkdir($uploadDir);
}

}

$file = $_FILES['datoteka']['name'];
$fileName = $uploadDir . '/' . $file;

if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $fileName)) {
    echo 'File dodan.'
    echo "<a href=$fileName>Prikazi</a>";

}else {
    echo "Problem kod file uploada.";
}

?>

<!DOCTYPE html>
<html>
<body>

    <h2>File Upload</h2>

    <form method="POST" enctype="multipart/form-data">

        <label for="datoteka">Datoteka:</label><br>
        <input type="file" id="datoteka" name="datoteka"><br>

        <label for="last_name">Prezime:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <input type="submit" value="Pošalji">

    </form> 

</body>
</html>

