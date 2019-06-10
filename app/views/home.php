<?php $this->view("components/head"); ?>
<?php $this->view("components/nav"); ?>
<?php $this->view("components/slide"); ?>
	<main>
		<div class="container">
			<div class="breadcrumb">
				<form action="<?= url() ?>all" method="get">
				<p align="center"><input type="search" name="search" placeholder="Search.." style="width:200px; display: inline-block;"><button class="btn-search" style="cursor:pointer;">SEARCH</button></p>
				</form>
			</div>

		<div class="row">
			<?php foreach($books AS $book): ?>
			<div class="span-3">
				<article class="book">
					<img src="<?= url() ?>public/uploads/<?= $book->slug .'.'.$book->file ?>">
						<div class="book-desc">
							<p class="book-title"><?= $book->title ?></p>
							<p><i>Penerbit : </i><?= $book->penerbit ?></p>
							<a href="<?= url() ?>detail/<?= $book->slug ?>" class="btn-show">SHOW</a>
						</div>
					</article>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="breadcrumb">
				New Articles
			</div>

		<div class="row">
			<div class="span-3">
				<article class="book">
					<img src="<?= url() ?>public/images/articles/7.jpg">
						<div class="book-desc">
							<p class="book-title">Mobil Perpustakaan Keliling beroperasi kembali</p>
							<p>4 april 2018</p>
							<a href="" class="btn-show">READ</a>
						</div>
					</article>
				</div>

				<div class="span-3">
				<article class="book">
					<img src="public/images/articles/article.jpg">
						<div class="book-desc">
							<p class="book-title">Gubernur Meninjau Perpustakaan Keliling</p>
							<p>9 april 2018</p>
							<a href="" class="btn-show">READ</a>
						</div>
					</article>
				</div>

				<div class="span-3">
				<article class="book">
					<img src="public/images/articles/8.jpg">
						<div class="book-desc">
							<p class="book-title">Mobil Perpustakaan Keliling ramai di kunjungi warga</p>
							<p>11 april 2018</p>
							<a href="" class="btn-show">READ</a>
						</div>
					</article>
				</div>

				<div class="span-3">
				<article class="book">
					<img src="public/images/articles/9.jpg">
						<div class="book-desc">
							<p class="book-title">Suasana gedung baru perpustakaan banten</p>
							<p>5 april 2018</p>
							<a href="" class="btn-show">READ</a>
						</div>
					</article>
				</div>
			</div>
		</main>

		<div class="sitemap">
		<div class="container">
			<div class="row">
				<h1 style="text-align: center; padding: 40px 0;color:#555;">INFORMATION</h1>
				<div class="span-6">
					<h4 style="font-size:18px;color:#555;margin-bottom: 20px;">PAMERAN BUKU</h4>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="span-6">
					<!-- <img src="public/images/site.jpg" style=" width:500px;float: left;"> -->
					<h4 style="font-size:18px;color:#555;margin-bottom: 20px;">BEDAH BUKU</h4>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
		</div>
	</div>
</div>
<?php $this->view("components/site"); ?>
<?php $this->view("components/aside"); ?>
<?php $this->view("components/footer"); ?>