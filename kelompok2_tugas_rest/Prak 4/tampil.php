<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost:8080/REST_PHP/books.php");
$data = simplexml_load_string($input);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Buku</title>
    <link rel="stylesheet" href="REST_PHP/style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>REST PHP</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="../REST_PHP/tampil.php">Buku</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="content">
                <p>DATA PRODUK</p> <a href="../REST_PHP/tambah.php">Tambah Data</a>
                <table style="width:100%">
                    <tr>
                        <td>Nama</td>
                        <td>Tipe Produk</td>
                        <td>Aksi</td>
                    </tr>
                    <?php foreach ($data as $data) { ?>
                        <tr>
                            <td>
                                <?= $data["id"] ?>
                            </td>
                            <td>
                                <?= $data["author"] ?>
                            </td>
                            <td>
                                <?= $data["title"] ?>
                            </td>
                            <td>
                                <?= $data["genre"] ?>
                            </td>
                            <td>
                                <?= $data["price"] ?>
                            </td>
                            <td>
                                <?= $data["publish_date"] ?>
                            </td>
                            <td colspan="2"> <a href="../REST_PHP/edit.php?id=<?= $data['id'] ?>">Edit</a> <a href="../api/api_hapus.php?id=<?= $data['id'] ?>">Hapus</a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p> Sekolah Tinggi Teknologi Indonesia</p>
        </div>
    </div>
</body>

</html>