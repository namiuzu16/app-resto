<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="/simpan" method="post">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
            <tr>
                <td>Husbu</td>
                <td>:</td>
                <td>
                    <input type="text" name="husbu">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" class="btn">Simpan</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
</form>

<?php
    
    if(isset($siswa)){
            ?>
        <table>
            <tr>
                <td>Nama Siswa yang dikirim </td>
                <td>:</td>
                <td><?=$siswa['nama']?></td>
            </tr>
            <tr>
                <td>Alamat Siswa yang dikirim </td>
                <td>:</td>
                <td><?=$siswa["alamat"]?></td>
            </tr>
            <tr>
                <td>Husbu Siswa yang dikirim </td>
                <td>:</td>
                <td><?=$siswa['husbu']?></td>
            </tr>
        </table>
             <?php
        }
?>
</body>
</html>