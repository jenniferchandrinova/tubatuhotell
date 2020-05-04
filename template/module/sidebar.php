<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="background-color: whitesmoke;">
          <!-- Sidebar user panel -->
          <div class="user-panel" >
            <div class="pull-left image" >
              <img src="template/images/yj1.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info" >
              <p>CYJ_Admin</p>
              <span class="small"><?php echo date('l. d M Y'); ?></span>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" >
            <li class="header" style="background-color: lightsteelblue">Administation Menu</li>
            
            <li class="treeview">
              <a href="#" >
                <i class="fa fa-key"></i>
                <span>Check In / Out</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=transaksi/checkin"><i class="fa fa-circle-o"></i> Check In</a></li>
                <li><a href="?module=transaksi/checkout"><i class="fa fa-circle-o"></i> Check Out</a></li>
                <li><a href="?module=transaksi/booking"><i class="fa fa-circle-o"></i> Reservation / Booking</a></li>
                <li><a href="?module=transaksi/checkin-list"><i class="fa fa-circle-o"></i> Guests In-House</a></li>
              </ul>
            </li>
            
            <?php if($_SESSION['batasan']<=3) { ?>
                        <li class="treeview">
              <a href="#">
                <i class="fa fa-bed"></i>
                <span>Rooms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=kamar/kamar-list"><i class="fa fa-circle-o"></i> See Room </a></li>
                <li><a href="?module=kamar/kamar-add"><i class="fa fa-circle-o"></i> Add Room </a></li>
                <li><a href="?module=kamar/tipe-list"><i class="fa fa-circle-o"></i> Room Type </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cutlery"></i>
                <span>Services</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=layanan/layanan-list"><i class="fa fa-circle-o"></i> See Services </a></li>
                <li><a href="?module=layanan/layanan-add"><i class="fa fa-circle-o"></i> Add Services </a></li>
                <li><a href="?module=layanan/kategori-list"><i class="fa fa-circle-o"></i> Services Category </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i>
                <span>Room Services</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=transaksi/pesan-layanan"><i class="fa fa-circle-o"></i> Order Services / Products</a></li>
                <li><a href="?module=kamar/kamar-kotor"><i class="fa fa-circle-o"></i> Room Cleaning Services</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Guests Book</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=tamu/tamu-list"><i class="fa fa-circle-o"></i> Guests List</a></li>
                <li><a href="?module=tamu/tamu-add"><i class="fa fa-circle-o"></i> Add A New Guests</a></li>
              </ul>
            </li>
            
            
            <?php if($_SESSION['batasan']==1) { ?>
            
            <?php } } ?>

            <?php if($_SESSION['batasan']<=3) { ?>
            <li class="header" style="background-color: lightsteelblue">Account Settings</li>
            <li class="treeview">
              <a href="logout.php">
                <i class="fa fa-times"></i>
                <span>Sign Out</span>
                <i class="fa fa-out"></i>
                <a href="logout.php><i ">
              </a>
            <?php if($_SESSION['batasan']==1) { ?>
            
            <?php } } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>