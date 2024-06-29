<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>