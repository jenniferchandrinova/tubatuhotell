<?php

include('component/com-transaksi.php');

?>

<section class="content-header"style="background-color: whitesmoke">
	<h1>Room Services <span class="small">Select The Room</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($tamu_inhouse)) { ?>
			<div class="row">
				<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-yellow" align="center">
						<div class="inner" style="background-color: palevioletred">
							<h3><?php echo $tamu_inhouse['nomor_kamar']; ?></h3>
							<p><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></p>
						</div>
						
						<a class="small-box-footer"  style="background-color: thistle" href="?module=transaksi/pesan-layanan-add&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>&tamu=<?php echo $tamu_inhouse['id_tamu']; ?>&kamar=<?php echo $tamu_inhouse['id_kamar']; ?>">Enter Service Orders</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>We're Sorry!</h4>
				There are currently no available rooms.
			</div>
			<?php } ?>
		</div>
	</div>
</section>