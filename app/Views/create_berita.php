<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h5 class="text-center">
        Form Tambah Berita
    </h5>
    <form action="<?= base_url('berita/create') ?>" method="post">
        <?= csrf_field() ?>
        <table class="table">
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul" placeholder="tambahkan judul" class="form-control"></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td><input type="text" name="isi" placeholder="tambahkan isi" class="form-control"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>:</td>
                <td><input type="text" name="gambar" placeholder="tambahkan gambar" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>