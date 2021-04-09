		<!-- Sidebar Menu: :Style Can Be Found In Sidebar Less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview <?php echo $MDashboard; ?>">
				<a href="?Url=Dashboard">
					<i class="fa fa-dashboard"></i><span>Dashboard</span>
					<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $Dashboard; ?>"><a href="?Url=Dashboard"><i class="fa fa-circle-o"></i>Dashboard</a></li>
				</ul>
			</li>
			<li class="treeview <?php echo $MAccount; ?>">
				<a href="#">
					<i class="fa fa fa-user"></i>
					<span>Account</span>
					<span class="pull-right-container">
						<span class="label label-primary pull-right">4</span>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $Account; ?>"><a href="?Url=Account"><i class="fa fa-user"></i>Account</a></li>
					<li class="<?php echo $TAccount; ?>"><a href="?Url=Account&Action=Tambah"><i class="fa fa-user-plus"></i>Tambah Account</a></li>
				</ul>
			</li>
			<li class="treeview <?php echo $MAccount; ?>">
				<a href="#">
					<i class="fa fa fa-user"></i>
					<span>Bantuan</span>
					<span class="pull-right-container">
						<span class="label label-primary pull-right">4</span>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $Account; ?>"><a href="?Url=Bantuan"><i class="fa fa-user"></i>Bantuan</a></li>
					<li class="<?php echo $TAccount; ?>"><a href="?Url=Bantuan&Action=Tambah"><i class="fa fa-user-plus"></i>Tambah Bantuan</a></li>
				</ul>
			</li>
			<li class="treeview <?php echo $MAccount; ?>">
				<a href="#">
					<i class="fa fa fa-user"></i>
					<span>Laporan</span>
					<span class="pull-right-container">
						<span class="label label-primary pull-right">4</span>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $Account; ?>"><a href="Laporan/Laporan.php" target="_blank"><i class="fa fa-user"></i>Laporan</a></li>
				</ul>
			</li>
      </ul>
