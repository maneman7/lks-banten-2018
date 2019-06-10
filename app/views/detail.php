<?php $this->view('components/head'); ?>
<?php $this->view('components/nav'); ?>
<main>
		<div class="container">
			<div class="row">
				<div class="span-4">
					<img src="<?= url() ?>public/uploads/<?= $book->slug .'.'.$book->file ?>" style="width:100%; margin-top: 15px; border-radius: 4px;">
					<article class="book-2">
						<div class="book-desc">
							<p align="center" class="book-title" style="padding: 20px 0;"><?= $book->title ?></p>
							<p align="center"><i>Penerbit : </i><?= $book->penerbit ?></p>
								<?php if(isset($_SESSION['data'])): ?>
							<form action="<?= url('book/get_data') ?>" method="post">
								<input type="hidden" value="<?= $book->id ?>" name="id">
								<a href="<?= url() ?>book/get_data?id=<?= $book->id ?>" class="btn-show">PINJAM SEKARANG</a>
								<?php else: ?>
								<a style="background:#333;" href="<?= url('user/login') ?>" class="btn-show"><center>LOGIN UNTUK MEMINJAM</center></a>
								<?php endif; ?>
							</form>
						</div>
					</article>
				</div>

				<div class="span-8">
					<article class="book-2">
						<div class="book-desc">
							<h4 style="color:#18a085;"><?= $book->title ?></h4>
							<hr>
							<p style="color: #333; font-weight: 0;"><?= $book->description ?></p>
						</div>
					</article>
				</div>
			</div>
		</div>
	</main>
<?php $this->view('components/aside'); ?>
<?php $this->view('components/footer'); ?>
