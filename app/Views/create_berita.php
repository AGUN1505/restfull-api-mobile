<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
</head>

<body>
    <h5>
        Form Tambah Berita
    </h5>
    <form action="<?= base_url('berita/create') ?>" method="post">
        <?= csrf_field() ?>
        <table>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul" placeholder="tambahkan judul"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td><input type="text" name="isi" placeholder="tambahkan isi"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>:</td>
                <td><input type="text" name="gambar" placeholder="tambahkan gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>