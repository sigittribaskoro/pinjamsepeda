<div class="konten">
	<h1 align="center">Histori Peminjaman Sepeda</h1>
	<div align="right">
		<a href="<?php echo base_url() ?>admin/sepeda/tambah" class="tambah">Tambah Sepeda</a>
	</div>

	<p>DAFTAR SEPEDA</p>
	<table width="100%" border="0" cellspacing="0" class="myform">
		<tr>
			<th scope="col">Jenis Sepeda</th>
			<th scope="col">Status</th>
			<th scope="col">Author</th>
			<th scope="col">Tanggal Pinjam</th>
			<th scope="col">&nbsp;</th>
		</tr>

		<?php foreach($sepeda as $list) { ?>
		<tr>
			<td>
				<a href="<?php echo base_url() ?>home/read/<?php echo $list['slug'] ?>" target="_blank">
					<?php echo $list['jenis_sepeda']; ?></a>
			</td>
			<td><?php echo $list['status_sepeda']; ?></td>
			<td><?php echo $list['nama']; ?></td>
			<td><?php echo $list['tanggal_pinjam']; ?></td>
			<td>
				<a href="<?php echo base_url() ?>admin/sepeda/edit/<?php echo $list['id_sepeda'] ?>">EDIT</a> | <a href="<?php echo base_url() ?>admin/sepeda/delete/<?php echo $list['id_sepeda'] ?>">DELETE</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
