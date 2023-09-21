<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $namafile = $_FILES['upload_file']['name'];
    $sizefile = $_FILES['upload_file']['size'];
    $tipefile = $_FILES['upload_file']['type'];
    $tmp_name_file = $_FILES['upload_file']['tmp_name'];
    $errorfile = $_FILES['upload_file']['error'];

    move_uploaded_file($tmp_name_file, __DIR__ . "/assets/img/" . $namafile);
}

?>
<html>
<body>
    <?php if($_SERVER['REQUEST_METHOD'] == "POST") { ?>

        <h1>Upload File</h1>
        <table>
            <tr>
                <td>Nama File</td>
                <td><?= $namafile ?></td>
            </tr>
            <tr>
                <td>Tipe File</td>
                <td><?= $tipefile ?></td>
            </tr>
            <tr>
                <td>Ukuran File</td>
                <td><?= $sizefile ?></td>
            </tr>
            <tr>
                <td>File Tmp Name</td>
                <td><?= $tmp_name_file ?></td>
            </tr>
            <tr>
                <td>File Error</td>
                <td><?= $errorfile ?></td>
            </tr>
        </table>
    <?php } ?>

    <h1>Form Upload</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="upfile">
            File :
            <input type="file" name="upload_file" id="upfile">
            <input type="submit" value="Upload">
        </label>
    </form>
</body>
</html>