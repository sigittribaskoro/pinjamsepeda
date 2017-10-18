<div class="konten">
	<div class="posting">
		<h3><?php echo $detail['jenis_sepeda'] ?></h3>
		<div class="ringkasan"><?php echo $detail['isi'] ?></div>
	</div>

	<div class="anggota">
		<h3>Sepeda Terbaru</h3>

		<ul>
			<?php foreach ($sepeda as $list) { ?>
			<li><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['jenis_sepeda']; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
