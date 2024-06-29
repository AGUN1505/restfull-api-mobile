<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center">Daftar Berita</h3>
    <a href=" <?= base_url('berita/create') ?>"><button class="btn btn-primary">Tambah</button></a>
    <br>
    <?php
    foreach ($list as $dt) {
        echo $dt['id'] . ' - 
        <a href ="' . base_url('berita/preview/') . $dt['id'] . '" >' . $dt['judul'] . '</a> - 
        ' . substr($dt['isi'], 0, 100) . ' - 
        ' . $dt['gambar'] . ' - 
        <a href ="' . base_url('berita/edit/') . $dt['id'] . '"><button class="btn btn-success">Edit</button></a> &nbsp
        <a href ="' . base_url('berita/delete/') . $dt['id'] . '" onclick="return confirm(\'yakin nih mau hapus?\')"><button class="btn btn-danger">Delete</button></a><br>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>