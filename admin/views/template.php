<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách người dùng
        </h1>
    </div>
</div>

<a href="index.php?controller=users/add" class="btn btn-primary" style="margin-bottom: 10px;">Thêm người dùng</a>

<table class="table table-bordered table-hover">
	<tr>
		<td width="50px;">STT</td>
		<td width="200px;">Name</td>
		<td>Email</td>
		<td>Phân quyền</td>
		<td width="100px;">Update</td>
		<td width="100px;">delete</td>
	</tr>

	<?php
		$stt=0;
		foreach ($data as $value) {
			$stt++;
	?>
	<tr>
		<td style="text-align: center;"><?php echo $stt; ?></td>
		<td><?php echo $value["name"]; ?></td>
		<td><?php echo $value["email"] ?></td>
		<td>
			<?php
				if($value["permission"] == 1){
					echo "Admin";
				}if($value["permission"] == 0){
					echo "Member";
				}
			?>
		</td>
        <td><a class="text-danger" href="index.php?controller=users/edit&id=<?php echo $value["token"];?>"><i class="fas fa-trash"></i></a></td>
		<td><a onclick="window.confirm('Bạn có chắc chăn muốn xóa ?');" href="index.php?controller=users/list&id=<?php echo $value["token"]; ?>&act=delete"><i class="fas fa-trash"></i></a></td>
	</tr>
	<?php } ?>
</table>

<ul class="paginate">
	<?php for($i=1; $i<=$page_show; $i++){ ?>
		<li><a href="index.php?controller=users/list&p=<?php echo $i ?>"><?php echo $i; ?></a></li>
	<?php } ?>
</ul>