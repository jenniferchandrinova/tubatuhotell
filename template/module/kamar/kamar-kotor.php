<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Room Cleaning Services <span class="small"></span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($kamar_kotor)) { ?>
			<div class="row">
				<?php foreach($kamar_kotor as $kamar_kotor) { ?>
				<div class="col-sm-3" align="center">
					<div class="small-box bg-yellow">
						<div class="inner" style="background-color: palevioletred">
							<h3><?php echo $kamar_kotor['nomor_kamar']; ?></h3>
							<p><?php echo $kamar_kotor['nama_kamar_tipe']; ?></p>
						</div>
						
						<a class="small-box-footer"  style="background-color: thistle" href="?module=kamar/kamar-update&kamar=<?php echo $kamar_kotor['id_kamar']; ?>">Pilih Kamar</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="alert alert-danger">
				<h4>We're Sorry!</h4>
				There are currently no used rooms.
			</div>
			<?php } ?>
		</div>
	</div>
</section>