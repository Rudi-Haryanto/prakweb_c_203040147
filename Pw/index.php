<?php 

require 'function.php';
$books = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Daftar Buku</title>
	<link rel="stylesheet" href="style.css">
</head>


<body>
	<h3>Daftar Buku</h3>
	<a href="tambah.php">Tambah data buku</a>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>id</th>
			<th>Gambar</th>
			<th>judul</th>
			<th>Penerbit</th>
			<th>tipe</th>
		</tr>

		<?php $i = 1;
		foreach($books as $book) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $book['img']; ?>" width="60"></td>
			<td><?= $book['judul']; ?></td>
			<td><?= $book['penerbit']; ?></td>
			<td><?= $book['tipe']; ?></td>
			<td>
			<a href="ubah.php?id=<?= $book['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $book['id']; ?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>

</html>