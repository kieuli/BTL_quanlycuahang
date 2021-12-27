<div class="col-md-8 col-md-offset-2" style="margin-top: 30px; margin-bottom: 100px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm người dùng</div>
		<div class="panel-body">

			<?php if(isset($_GET["err"]) && $_GET["err"]=="false"){ ?>
				<div class="alert alert-danger">
					Nhập lại mật khẩu không đúng
				</div>
			<?php } ?>

			<form action="index.php?controller=users/add&act=add" method="post">
				<table class="table">
					<tr>
						<td width="200px;">Tên người dùng</td>
						<td>
							<input type="text" name="username" placeholder="Tên người dùng" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Email người dùng</td>
						<td>
							<input type="email" name="email" placeholder="Email người dùng" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Mật khẩu người dùng</td>
						<td>
							<input type="password" name="password1" placeholder="Mật khẩu" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Nhập lại mật khẩu</td>
						<td>
							<input type="password" name="password2" placeholder="Nhập lại mật khẩu" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Phân quyền người dùng</td>
						<td>
							<div class="form-group">
								<label>Quyền</label>
								<select name="permission" class="form-control">
									<option value=1>Admin</option>
									<option value=0>Member</option>
									</select>
							</div>
						</td>

					</tr>
					<tr>
						<td>Kích hoạt</td>
						<td>
						<div class="form-check">
							<input value="1" class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name="activated">
							<label class="form-check-label" for="flexCheckIndeterminate" >
								Kích hoạt tài khoản
							</label>
						</div>
						</td>					
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Thêm tài khoản" class="btn btn-primary">
							<a href="index.php?controller=users/list" class="btn btn-success">Hủy</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>