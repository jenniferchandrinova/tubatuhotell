<?php

include('component/com-kamar.php');

?>

<section class="content-header" style="background-color: whitesmoke">
	<h1>Room Type <span class="small"></span></h1>
</section>

<section class="content" style="background-color: whitesmoke">
	<div class="box">
		<div class="box-header" >
			<a class="btn btn-info" href="?module=kamar/tipe-add">Add Room Type</a>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Tipe Kamar</th>
						<th>Harga / Malam</th>
						<th>Harga / Orang</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($kamar_tipe as $kamar_tipe) { ?>
					<tr>
						<td><?php echo $kamar_tipe['nama_kamar_tipe']; ?></td>
						<td>Rp <?php echo number_format($kamar_tipe['harga_malam']); ?></td>
						<td>Rp <?php echo number_format($kamar_tipe['harga_orang']); ?></td>
						<td><a class="btn btn-info btn-xs" href="?module=kamar/tipe-update&kamar-tipe=<?php echo $kamar_tipe['id_kamar_tipe']; ?>">Update</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
				<div class="images" align="center" style="font-family: sans-serif;" style="background-color: whitesmoke" >
            <p><h1> ROOMS GALLERY </h1></p>
            <img src="template/images/singleroom.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <img src="template/images/singleroom2.jpg" alt="singleroom" style="width:500px" "height: 500px">
            <h5> Single Room </h5> 
            </div>


             <div class="images" align="center" >
            <img src="template/images/presidential.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <img src="template/images/presidential2.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <h5> Presidential Room </h5> 
            </div>

             <div class="images" align="center" >
            <img src="template/images/suiteroom.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <img src="template/images/suiteroom2.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <h5> Suite Room </h5> 
            </div>

             <div class="images" align="center" >
            <img src="template/images/juiorroom.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <img src="template/images/juiorroom2.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <h5> Junior Suite Room </h5> 
            </div>

             <div class="images" align="center" >
            <img src="template/images/deluxeroom.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <img src="template/images/deluxeroom2.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <h5> Deluxe Room </h5> 
            </div>

             <div class="images" align="center" >
            <img src="template/images/superiorroom2.jpg" alt="singleroom" style="width:500px" "height: 300px">
            <h5> Superior Room </h5> 
            </div>

             <div class="images" align="center" >
            <img src="template/images/standardroom.jpg" alt="singleroom" style="width:500px" "height: 300px">
            
            <h5> Standard Room </h5> 
            </div>

             <div class="images" align="center" >
            <img src="template/images/triple.jpg" alt="singleroom" style="width:500px" "height: 300px">
            
            <h5> Triple Room </h5> 
            </div>

             <div class="images" align="center" >
           
            <img src="template/images/double2.jpg" alt="singleroom" style="width:500px" "height: 300px">

            <h5> Double Room </h5> 
            </div>

            <div class="images" align="center" >
            <img src="template/images/twin.jpg" alt="Twin Room" style="width:500px" "height: 300px">
            <h5>Twin Room </h5> 
            </div>

        </div>
	</div>
    
</section>