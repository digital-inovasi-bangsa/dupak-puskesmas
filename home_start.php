<?php
	require_once('config/koneksi.php');
?>

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>
		<i class="icon-ok green"></i>
			<?php echo "Selamat datang <strong>". $_SESSION['s_nama']."</strong> anda login sebagai <strong>". $_SESSION['s_level']."</strong>"; ?> <br />
				Untuk mengelola data silahkan pilih menu diatas, atau menu sanping pada halaman Home
</div>