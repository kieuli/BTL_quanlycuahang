<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách người dùng
        </h1>
    </div>
</div>


<table class="table table-bordered table-hover">
	<tr>
		<td width="50px;">STT</td>
		<td width="400px;">tên </td>
		<td>số người sử dụng</td>
	</tr>

	<?php
		$i0 = $this->Model->count("select * from users WHERE templates=0");
		$i1 = $this->Model->count("select * from users WHERE templates=1");
		$i2 = $this->Model->count("select * from users WHERE templates=2");
		$i3 = $this->Model->count("select * from users WHERE templates=3");
		$i4 = $this->Model->count("select * from users WHERE templates=4");
		$i5 = $this->Model->count("select * from users WHERE templates=5");
		$i6 = $this->Model->count("select * from users WHERE templates=6");
	?>
	<tr>
		<td style="text-align: center;">1</td>
		<td>chưa có template </td>
		<td style="text-align: center;"><?php echo $i0; ?></td>	
    </tr>
	<tr>
		<td style="text-align: center;">2</td>
		<td> template 1</td>
		<td style="text-align: center;"><?php echo $i1; ?></td>	
    </tr>
	<tr>
		<td style="text-align: center;">3</td>
		<td> template 2</td>
		<td style="text-align: center;"><?php echo $i2; ?></td>	
    </tr>
	<tr>
		<td style="text-align: center;">4</td>
		<td> template 3</td>
		<td style="text-align: center;"><?php echo $i3; ?></td>	
    </tr>
	<tr>
		<td style="text-align: center;">5</td>
		<td> template 4</td>
		<td style="text-align: center;"><?php echo $i4; ?></td>	
    </tr>
	<tr>
		<td style="text-align: center;">6</td>
		<td> template 5</td>
		<td style="text-align: center;"><?php echo $i5; ?></td>	
    </tr>
	<tr>
		<td style="text-align: center;">7</td>
		<td> template 6</td>
		<td style="text-align: center;"><?php echo $i6; ?></td>	
    </tr>
	
	


</table>
