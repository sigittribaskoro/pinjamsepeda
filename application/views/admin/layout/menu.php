<nav>
	<ul id="MenuBar1" class="MenuBarHorizontal">
		<li><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
		<li><a href="<?php echo base_url(); ?>admin/sepeda" class="MenuBarItemSubmenu">Sepeda</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>admin/sepeda">Data Sepeda</a></li>
				<li><a href="<?php echo base_url(); ?>admin/sepeda/tambah">Tambah Sepeda</a></li>
			</ul>
		</li>
		
	</ul>
</nav>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<!-- End Nav -->
