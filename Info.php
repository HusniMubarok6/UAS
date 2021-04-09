<div class="col-md-3">
	<div class="box box-primary box-solid">
		<!-- Box Header -->
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-user"></i> User Profille</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<!-- Box Header -->
		<!-- Box Body -->
				<div class="box-body box-primary">
					<?php echo'<img src="data:image/jpeg;base64,'.base64_encode($SPhoto).'" class="profile-user-img img-responsive img-circle" alt="User Profile Picture">'; ?>
					<h3 class="profile-username text-center"><?php echo"$SFName"; ?></h3>
					<p class="text-muted text-center"><?php echo"$SAccess"; ?></p>
					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Username</b><i class="pull-right"><?php echo"$SUsername"; ?></i>
						</li>
						<li class="list-group-item">
							<b>E-Mail</b><i><a class="pull-right" href="mailto:<?php echo $SEMail; ?>"><?php echo $SEMail; ?></a></i>
						</li>
						<li class="list-group-item">
							<b>NO HP</b> <i class="pull-right"><?php echo $SHP; ?></i>
						</li>
						<li class="list-group-item">
							<b>Create</b> <i class="pull-right"><?php echo $SCreated; ?></i>
						</li>
						<li class="list-group-item">
							<b>Log In</b> <i class="pull-right"><?php echo $SHistoryLogin; ?></i>
						</li>
						<li class="list-group-item">
							<b>Log Out</b> <i class="pull-right"><?php echo $SHistoryLogout; ?></i>
						</li>
						<li class="list-group-item">
							<b>Status</b> <i class="pull-right label bg-green"><?php echo $SStatus; ?></i>
						</li>
					</ul>
				</div>
				<!-- Box Body -->
				<!-- Box Footer -->
				<div class="box-footer">
					<div>
						<button class="btn btn-primary btn-block">Follow&nbsp;</button>
					</div>
				</div>
			</form>
		</div>
		<!-- Box Footer -->
	</div>
	<!-- Box -->