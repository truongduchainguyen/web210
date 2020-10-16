<html>
<head>
<title> Lab 02 4.1</title>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$chieudai = $_POST['chieu-dai'];
		$chieurong = $_POST['chieu-rong'];
		$dientich = $chieudai * $chieurong;
	}
?>
<body>
	<div id= "wrapper">
		<div class="container">
			<form id="Tinh-dien-tich-hcn">
				<table>
					<thead>
						<tr>
							<th colspan="2"><h1 style="color: orange">Diện tích HCN</h1></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Chiều dài</td>
							<td>
								<input type="number" id="chieu-dai" name="chieu-dai" placeholder="Nhập chiều dài"
								value="<?php echo $chieudai?>">
							</td>	
						</tr>
						<tr>
							<td>Chiều rộng</td>
							<td>
								<input type="number" id="chieu-rong" name="chieu-rong" placeholder="Nhập chiều rộng"
								value="<?php echo $chieurong?>">
							</td>
						</tr>
						<tr>
							<td>Diện tích</td>
							<td>
								<input type="number" id="dien-tich" name="dien-tich" placeholder="Diện tích hình chữ nhật" disabled="disable"
								value="<?php echo $dientich?>">
							</td>	
						</tr>
						<tr>
							<td colspan="2">
								<input type="button" onClick = "TinhDientich()" value = "Tinh">
							</td>
						</tr> 	
					</tbody>
				</table>
			</form>	
		</div>	
	</div>
	<script type="text/javascript">
		function TinhDientich(){
			var dai = document.getElementById('chieu-dai');
			var rong = document.getElementById('chieu-rong');
			var dientich = dai.value * rong.value;
			//alert
			//return dientich;
			document.getElementById("dien-tich").value = dientich;
		}
	</script>	
</body>
</head>
</html>