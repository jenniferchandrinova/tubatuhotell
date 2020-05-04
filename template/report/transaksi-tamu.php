<?php

include('component/com-transaksi.php');

include('component/com-hitung-transaksi.php');

?>

<div class="row">
	<div class="col-sm-6" >
		<b>INVOICE NO : </b><br/>
		<span class="lead"><?php echo $transaksi_kamar['nomor_invoice']; ?></span><br/><br/>
		<b>INVOICE DATE :</b><br/>
		<span class="lead"><?php echo date('d M Y'); ?></span>
	</div>
	<div class="col-sm-6" style="background-color: pink">
		Addressed to :
		<address>
			<strong><?php echo $transaksi_kamar['prefix'].'. '.$transaksi_kamar['nama_depan'].'&nbsp;'.$transaksi_kamar['nama_belakang']; ?></strong><br/>
			<?php echo $transaksi_kamar['alamat_jalan']; ?><br/>
			<?php echo $transaksi_kamar['alamat_kabupaten'].' - '.$transaksi_kamar['alamat_provinsi']; ?><br/>
			<br/>
			Phone : <?php echo $transaksi_kamar['nomor_telp']; ?><br/>
		</address>
	</div>
	
</div>

<h3>PAYMENT DETAIL</h3>
<table class="table table-bordered table-striped table-responsive" style="background-color: pink">
	<thead>
		<tr>
			<th>Services</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Room Type : <?php echo $transaksi_kamar['nama_kamar_tipe']; ?></td>
			<td>Rp <?php echo number_format($transaksi_kamar['harga_malam']); ?></td>
			<td><?php echo $durasi; ?> Malam</td>
			<td>Rp <?php echo number_format($transaksi_kamar['total_biaya_kamar']); ?></td>
		</tr>
		<?php foreach($transaksi_layanan as $transaksi_layanan) { ?>
		<tr>
			<td><?php echo $transaksi_layanan['nama_layanan']; ?></td>
			<td>Rp <?php echo number_format($transaksi_layanan['harga_layanan']); ?></td>
			<td><?php echo $transaksi_layanan['jumlah'].'&nbsp;'.$transaksi_layanan['satuan']; ?></td>
			<td>Rp <?php echo number_format($transaksi_layanan['total']); ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>


	<div class="col-sm-3" style="margin: center" >
		<table class="table table-bordered table-responsive" ">
			<tr>
				<td><b>Total</b></td>
				<td>Rp <?php echo number_format($subtotal); ?></td>
			</tr>
			<tr>
				<td>PPn 10%</td>
				<td>Rp <?php echo number_format($ppn); ?></td>
			</tr>
			<tr>
				<td><b>Grand Total</b></td>
				<td><b>Rp <?php echo number_format($grand_total); ?></b></td>
			</tr>
		</table>
	</div>
	<div class="row" >
	<div class="col-sm-12">
		<p class="text-muted well well-sm no-shadow" style="background-color: lightyellow">
			<b>Note :</b> Please keep this proof of payment as good as possible. The hotel will not service guest complaints that do not have official proof of payment by the hotel.
		</p>
	</div>
</div>
