<!doctype html>
<html>
<head>
	<title>Laporan</title>
	<style>
	table{
		border-collapse: collapse;
		width: 100%;
		margin: 0 auto;
	}
	table th{
		border: 1px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border: 1px solid #000;
		padding: 3px;
		vertical-align: top;
	}
	</style>
</head>
<body>
<table>
		<tr>
			<td style="border:none;">
			<img style="width:120px;margin:35px;" src="http://localhost:8080/codein/gambar/poltera.jpg" alt="">
			</td>
			<td style="border:none;">
				<center>		
				<h4>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI
				<br>POLITEKNIK NEGERI MALANG
				<br>Jl. Soekarno Hatta No.9 Malang 65141
				<br>Telp (0341) 404424, 404425 Fax (0341) 404420
				<br>Laman://www.polinema.ac.id</h4>
			</center>
			</td>
		<tr>
	</table>
	
	<br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<hr style="border-top: medium double #333; width:700px; text-align:center;">
<!-- <br>
<br>
<br> -->
	<p style="text-align: center">Tabel Ekstrakulikuler</p>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Kelas</th>
			<th>Ekstrakulikuler</th>
		</tr>
		<?php $id=0; foreach ($ekstra as $key){
			$id++;
		?>
		<tr>
			<td><?php echo $key->id ?></td>
			<td><?php echo $key->name ?></td>
			<td><?php echo $key->address ?></td>
			<td><?php echo $key->email ?></td>
			<td><?php echo $key->telephone ?></td>
			<td><?php echo $key->class ?></td>
			<td><?php echo $key->ekstra ?></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>