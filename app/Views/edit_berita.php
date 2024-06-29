<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
</head>

<body>
    <h5>
        Form edit Berita
    </h5>
    <form action="<?= base_url('berita/edit/') . $news['id'] ?>" method="post">
        <?= csrf_field() ?>
        <table>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul" value="<?= $news['judul'] ?>" placeholder="tambahkan judul"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td><input type="text" name="isi" value="<?= $news['isi'] ?>" placeholder="tambahkan isi"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>:</td>
                <td><input type="text" name="gambar" value="<?= $news['gambar'] ?>" placeholder="tambahkan gambar"></td>
            </tr>
            <tr>
                <td></td>

                <td><input type="submit" name="simpan" value="simpan"></td>
                <a href="<?= base_url('/') ?>"><button>kembali</button></a>
            </tr>
        </table>
    </form>
</body>

</html>