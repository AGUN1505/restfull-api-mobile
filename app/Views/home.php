<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utama</title>
</head>

<body>
    <h3>Daftar Berita</h3>
    <a href="<?= base_url('berita/create') ?>"><button>Tambah</button></a>
    <br>
    <?php
    foreach ($list as $dt) {
        echo $dt['id'] . ' - 
        <a href ="' . base_url('berita/preview/') . $dt['id'] . '">' . $dt['judul'] . '</a> - 
        ' . substr($dt['isi'], 0, 100) . ' - 
        ' . $dt['gambar'] . ' - 
        <a href ="' . base_url('berita/edit/') . $dt['id'] . '">Edit</a> &nbsp
        <a href ="' . base_url('berita/delete/') . $dt['id'] . '" onclick="return confirm(\'yakin nih mau hapus?\')">Delete</a><br>';
    }
    ?>
</body>

</html>