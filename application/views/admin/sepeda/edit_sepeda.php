<div class="konten">

<h1>UPDATE SEPEDA</h1>
<?php require_once('tinymce.php') ?>
<form name="form1" method="post" action="<?php echo base_url(); ?>admin/sepeda/edit" class="myform">
	<p><label for="jenis_sepeda">Jenis Sepeda</label>
		<input name="jenis_sepeda" type="text" id="jenis_sepeda" size="70" value="<?php echo $detail['jenis_sepeda'] ?>">
	</p>
	<p>
		<label for="ringkasan">Ringkasan Sepeda</label>
		<textarea name="ringkasan" id="ringkasan" cols="45" rows="5"><?php echo $detail['ringkasan'] ?></textarea>
	</p>
	<p>
		<label for="isi">Isi Sepeda</label>
		<textarea name="isi" id="isi" cols="45" rows="5"><?php echo $detail['isi'] ?></textarea>
	</p>
	<p>
		<label for="status_sepeda">Status Sepeda</label>
		<select name="status_sepeda" id="status_sepeda">
			<option value="Tersedia" <?php if ($detail['status_sepeda'] == "Publish") { echo 'selected'; } ?>>Tersedia</option>
			<option value="Tidak Tersedia" <?php if($detail['status_sepeda'] == "Tidak Tersedia") { echo 'selected';} ?>>Tidak Tersedia</option>
		</select>
		<input name="id_user" type="hidden" id="id_user" value="1">
		<input name="id_sepeda" type="hidden" id="id_sepeda" value="<?php echo $detail['id_sepeda'] ?>">
	</p>
	<p>
		<input type="submit" name="submit" id="submit" value="Submit">
		<input type="reset" name="submit2" id="submit2" value="Reset">
	</p>
</form>
</div>
