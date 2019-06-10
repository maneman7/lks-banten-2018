<?php $this->view("components/head"); ?>
<?php $this->view("components/nav"); ?>
	<main>
		<div class="container">
			<div class="breadcrumb">
				<form action="<?= url() ?>all" method="get">
				<p align="center"><input type="search" name="search" placeholder="Search.." style="width:200px; display: inline-block;"><button class="btn-search">SEARCH</button></p>
				</form>
			</div>

		<div class="row">
			<?php foreach($books AS $book): ?>
			<div class="span-3">
				<article class="book">
					<img src="<?= url() ?>public/uploads/<?= $book->slug .'.'.$book->file ?>">
						<div class="book-desc">
							<p class="book-title"><?= $book->title ?></p>
							<p><i>Penerbit :</i><?= $book->penerbit ?></p>
							<a href="<?= url() ?>detail/<?= $book->slug ?>" class="btn-show">SHOW</a>
						</div>
					</article>
				</div>
			<?php endforeach; ?>
			</div>
		</main>
<?php $this->view("components/aside"); ?>
<?php $this->view("components/footer"); ?>