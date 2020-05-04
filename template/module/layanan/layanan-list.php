<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Services <span class="small">Hotel Services Lists</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-warning" href="?module=layanan/layanan-add">Add New Services</a>
		</div>
		<div class="box-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nama Layanan</th>
						<th>Kategori</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($layanan as $layanan) { ?>
					<tr>
						<td><?php echo $layanan['nama_layanan']; ?></td>
						<td><?php echo $layanan['nama_layanan_kategori']; ?></td>
						<td>Rp <?php echo number_format($layanan['harga_layanan']).' / '.$layanan['satuan']; ?></td>
						<td>
							<a class="btn btn-xs btn-info" href="?module=layanan/layanan-update&layanan=<?php echo $layanan['id_layanan']; ?>">Update</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>