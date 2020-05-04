<?php

include('component/com-kamar.php');

//include('component/com-booking.php');

?>

<section class="content-header" style="background-color: whitesmoke">
	<h1>Room Reservation </h1>
</section>

<section class="content" style="background-color: whitesmoke">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($_GET['kamar'])) { ?>
			<form action="" method="post">
				<div class="row">
					<div class="col-sm-3">
						<div class="small-box bg-blue">
							<div class="inner" style="background-color: tan">
								<h3><?php echo $kamar_view['nomor_kamar']; ?></h3>
								<p><?php echo $kamar_view['nama_kamar_tipe']; ?></p>
							</div>
							
						</div>
						<a class="btn btn-danger btn-block" style="background-color: rosybrown" href="?module=transaksi/booking">Cancel</a>
					</div>
					<div class="col-sm-3">
						<legend>Choose Date!</legend>
						<div class="form-group">
							<label>Check In Date</label>
							<input id="checkin" class="form-control" name="start" required />
						</div>
						<div class="form-group">
							<label>Check Out Date</label>
							<input id="checkout" class="form-control" name="end" required />
						</div>
					</div>
				</div>
			</form>
			<?php } else { ?>
			<div class="row" align="center">
				<?php foreach($kamar as $kamar) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-blue">
						<div class="inner" style="background-color: tan">
							<h3><?php echo $kamar['nomor_kamar']; ?></h3>
							<p><?php echo $kamar['nama_kamar_tipe']; ?></p>
						</div>
						
						<a class="small-box-footer" style="background-color: rosybrown" href="<?php echo $url; ?>&kamar=<?php echo $kamar['id_kamar']; ?>">Booking</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>