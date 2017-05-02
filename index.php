<?php include "header.php" ?>
<div class="full bgcolor"></div>
<div class="full center v-parent">
	<div class="container-fluid v-child">
		<div class="row">
			<div class="col-md-12 title">Sistem Parkir ITB</div>
		</div>
		<div class="row">
			<div class="formbox mg-t40 pd20">
				<form name="form-login" method="get" action="login.php">
					<table class="table-fixed">
						<tr>
							<td class="right pd-r10" width="35%">Username</td>
							<td>
								<input class="form-control" type="text" name="username" id="username"></td>
						</tr>
						<tr class="pd-t10">
							<td class="right pd-r10">Password</td>
							<td>
								<input class="form-control" type="password" name="password" id="password"></td>
						</tr>
					</table>
					<div class="btn blue-button mg-t10" id="#log-in-submit-button">Log in</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php" ?>