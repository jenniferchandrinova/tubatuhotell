<?php

include('component/com-transaksi.php');

include('component/com-kamar.php');

?>

<section class="content-header" style="background-color: whitesmoke">
	<h1>Check Out <span class="small">Select The Used Room Below</span></h1>
</section>

<section class="content" style="background-color: whitesmoke">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($tamu_inhouse)) { ?>
			<div class="row">
				<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
				<div class="col-sm-3" align="center">
					<div class="small-box bg-red">
						<div class="inner" style="background-color: tan">
							<h3><?php echo $tamu_inhouse['nomor_kamar']; ?></h3>
							<p><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></p>
						</div>
						
						<a class="small-box-footer" style="background-color: rosybrown" href="?module=transaksi/checkout-proses&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>">Choose Room</a>
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