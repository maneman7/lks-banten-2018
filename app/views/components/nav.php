<style type="text/css">
	.active{
		color: #18a085 !important;
	}
</style>
<div class="green">
		<div class="container">
			<?php if(! isset($_SESSION['data'])): ?>
			<p align="right"><a style="color: #fff" href="<?= url('user/login') ?>">My Account</a></p>
			<?php else: ?>

			<p style="color: #fff" align="right">Halo <?= $_SESSION['data']->fullname ?>, <a style="color: #fff" href="<?= url('user/logout') ?>"> Logout</a></p>
			<?php endif;  ?>
		</div>
	</div>

	<nav>
		<div class="container">
			<a href="<?= url() ?>"><img src="<?= url() ?>public/images/logo.png" style="height: 25px; margin-top: 20px;"></a>
			<ul class="nav" id="hbg">
				<li><a href="" id="toggle-menu">&#9776;</a></li>
			</ul>
			<ul class="nav">
				<li><a class="<?= $_GET['url'] == '' ? 'active' : '' ?>" href="<?= url() ?>">HOME</a></li>
				<li><a class="<?= $_GET['url'] == 'all' ? 'active' : '' ?>" href="<?= url('all') ?>">KATALOG</a></li>
				<li><a class="<?= $_GET['url'] == 'sitemap' ? 'active' : '' ?>" href="<?= url('sitemap') ?>">SITEMAP</a></li>	
				<?php if( $_SESSION['data']->level == 2): ?>
					<li><a href="<?= url('admin/') ?>">ADMIN</a></li>
				<?php endif; ?>

				<?php if( $_SESSION['data']->level == 1): ?>
					<li><a class="<?= $_GET['url'] == 'get' ? 'active' : '' ?>" href="<?= url('get') ?>">PINJAMAN BUKU</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>