<?php

include('component/com-kamar.php');

?>

<section class="content-header"  style="background-color: whitesmoke">
	<h1>Check In <span class="small"><br>Choose the available rooms below</span></h1>
</section>

<section class="content" align="Center"  style="background-color: whitesmoke">
	<div class="box"  style="background-color: whitesmoke">
		<div class="box-body"  style="background-color: whitesmoke">
			<?php if(!empty($kamar_tersedia)) { ?>
			<div class="row"  style="background-color: whitesmoke">
				<?php foreach($kamar_tersedia as $kamar_tersedia) { ?>
				<div class="col-sm-3" >
					<div class="small-box bg-blue"  style="background-color: whitesmoke">
						<div class="inner"  style="background-color: tan">
							<h3><?php echo $kamar_tersedia['nomor_kamar']; ?></h3>
							<p><?php echo $kamar_tersedia['nama_kamar_tipe']; ?></p>
						</div>
						
						<a class="small-box-footer"  style="background-color: rosybrown" href="?module=transaksi/checkin-add&kamar=<?php echo $kamar_tersedia['id_kamar']; ?>">Choose Room </a>
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