<div class="konten">
	<h1>Tambah Sepeda Baru</h1>
	<!--<?php require_once('tinymce.php') ?>-->
	<?php echo validation_errors(); ?>
	<form name="form1" method="post" action="<?php echo base_url() ?>admin/sepeda/tambah" class="myform">
		<p>
			<label for="jenis_sepeda">Merk Sepeda</label>
			<input name="jenis_sepeda" type="text" id="jenis_sepeda" size="70">
		</p>
		<p>
			<label for="ringkasan">Jenis Sepeda</label>
			<input name="ringkasan" type="text" id="ringkasan" size="70">
		</p>
		<p>
			<label for="isi">Deskripsi Sepeda</label>
			<textarea name="isi" id="isi" cols="45" rows="5"></textarea>
		</p>
		<p>
			<label for="status_sepeda">Status Sepeda</label>
			<select name="status_sepeda" id="status_sepeda">
				<option value="Tidak Tersedia">Tidak Tersedia</option>
				<option value="Tersedia">Tersedia</option>
			</select>
			<!-- UNTUK KEPERLUAN PENGUJIAN, ID USER KITA SET MANUAL DULU -->
			<input name="id_user" type="hidden" id="id_user" value="1">
			<!-- END ID USER -->
			<input type="submit" name="submit" id="submit" value="Submit">
			<input type="reset" name="submit2" id="submit2" value="Reset">
		</p>
	</form>
	<p>&nbsp;</p>
</div>
