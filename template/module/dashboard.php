<?php

include('component/com-kamar.php');

include('component/com-transaksi.php');

?>
<section class="content-header" style="background-color: whitesmoke">
	<h1> DASHBOARD <span class="small"></br> Welcome Admin!</span></h1>
	<br>
	<p> A data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process. They are customizable to meet the specific needs of a department and company. Behind the scenes, a dashboard connects to your files, attachments, services and API’s, but on the surface displays all this data in the form of tables, line charts, bar charts and gauges. A data dashboard is the most efficient way to track multiple data sources because it provides a central location for businesses to monitor and analyze performance. Real-time monitoring reduces the hours of analyzing and long line of communication that previously challenged businesses. Data is visualized on a dashboard as tables, line charts, bar charts and gauges so that users can track the health of their business against benchmarks and goals. Data dashboards surface the necessary data to understand, monitor and improve your business through visual representations. Depending on how you decide to design your dashboard, even straightforward numerical data can be visually informative by utilizing intuitive symbols, such as a red triangle facing downward to indicate a drop in revenue or a green triangle facing up to indicate an increase in website traffic. <p>
	<br>
	<div  class="button" >
		<button  onclick="location.href='index.php'" style="width: 140px; height: 40px;"float: right;>Refresh Data  <i class="w3-margin-center glyphicon glyphicon-refresh fa-spin"></i></button></p>
				</div>
</section>

<section class="content" style="background-color: whitesmoke">
	<div class="row">
		<div class="col-sm-3">

			<div class="small-box bg-light-blue"  >
				<div class="inner" style="background-color: lightslategrey">
					<h3><?php echo $total_tersedia; ?></h3>
					<p>Available Room</p>
				</div>
				<div class="icon">
					<i class="fa fa-check"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/checkin" style="background-color: lightsteelblue">See More 🡆
				<a href="welcomepage.php"></a> 
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-blue">
				<div class="inner" style="background-color: lightslategrey">
					<h3><?php echo $total_terpakai; ?></h3>
					<p>Room In-Use</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="?module=transaksi/checkin-list" style="background-color: lightsteelblue">See More 🡆</a>

			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-blue-active">
				<div class="inner" style="background-color: lightslategrey">
					<h3><?php echo $total_kotor; ?></h3>
					<p>Need To Be Cleaned</p>
				</div>
				<div class="icon">
					<i class="fa fa-times"></i>
				</div>
				<a class="small-box-footer" href="?module=kamar/kamar-kotor" style="background-color: lightsteelblue">See More 🡆</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="box ">
				<div class="box-header with-border">
					<h3 class="box-title">In-House Guests</h3>
				</div>
				<div class="box-body">
					<?php if(!empty($tamu_inhouse)) { ?>
					<table class="table table-sriped">
						<thead>
							<tr>
								<th>Guests Name</th>
								<th>Room #</th>
								<th>Check-In Date/Time</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
							<tr>
								<td><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></td>
								<td><?php echo $tamu_inhouse['nomor_kamar']; ?></td>
								<td><?php echo $tamu_inhouse['tanggal_checkin'].' - '.$tamu_inhouse['waktu_checkin']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } else { ?>
					<div class="alert alert-warning">
						<h4>We're Sorry!</h4>
						There are no guests staying at the hotel for a while.
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		
	</div>
</section>