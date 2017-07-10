<?php 
	$this->load->view('uas/header');
	$session_data = $this->session->userdata('logged_in');
?>
<br><br><br><br>
<div class="container">
<div class="table-responsive">
<table class="table table-hover" id="example">
	<thead>
	<tr><td>Nama</td>
		<td>Alamat</td>
		<td>Email</td>
		<td>Telepon</td>
		<td>Kelas</td>
		<td>Ekstrakulikuler</td>
		<td>edit</td>
		<td>del</td>			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ekstra_object as $key): ?>
		<tr>
			<td><?php echo $key->name ?></td>
			<td><?php echo $key->address ?></td>
			<td><?php echo $key->email ?></td>
			<td><?php echo $key->telephone ?></td>
			<td><?php echo $key->class ?></td>
			<td><?php echo $key->ekstra ?></td>
			<td><a href="<?=site_url()?>/ekstra/update/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
			<td><a href="<?=site_url()?>/ekstra/delete/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class=" glyphicon glyphicon-trash"></span></button></p></a></td>
		</tr>
		<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<?php
$this->load->view('uas/footer');
?>