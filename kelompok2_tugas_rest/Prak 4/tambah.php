<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="REST_PHP/style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>STTI API</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="../REST_PHP/tampil.php">Produk</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="content">
                <p>Tambah Produk</p> <a href="../REST_PHP/tampil.php">Kembali</a>
                <div id="stylish" class="myform">
                    <h1>TAMBAH PRODUK</h1>
                    <p>form ini digunakan untuk tambah data produk</p>
                    <form action="../REST_API/books.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Nama Produk" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <label for="">Tipe Produk</label>
                            <input type="text" name="tipe_produk" id="tipe_produk" placeholder="Tipe Produk" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" id="harga" placeholder="Harga" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" id="stok" placeholder="Stok" aria-describedby="helpId"> </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p> Sekolah Tinggi Teknologi Indonesia</p>
        </div>
    </div>
</body>

</html>