<?php
	$title= "Edit product";
?>

	<div id="main_content">
		<form method="post" action="">
			<fieldset>
				<legend><b>EDIT PRODUCT</b></legend>
				<table>
					<tr>
						<td>Name</td>
					</tr>
					<tr>
						<td><input type="text" name="name" value=""> </td>
					</tr>
					<tr>
						<td>Buying Price</td>
					</tr>
						<tr>
						<td><input type="text" name="buy" value=""> </td>
					</tr>
					<tr>
						<td>Selling Price</td>
					</tr>
					<tr>
						<td><input type="text" name="sell" value=""> </td>
					</tr><br>
					
					<tr><td>
						<hr>
					<input type="checkbox" name="">Display
					<hr>
				</td>
			</tr>

						<td></td>
						<td>
							<input type="submit" name="save" value="Save">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>