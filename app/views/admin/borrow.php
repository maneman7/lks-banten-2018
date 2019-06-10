<div class="papper">
		<h4>Borrow</h4>
		<hr>
		<table>
			<?php $d = $this->db->query("SELECT pinjam.id as id, books.title AS title, users.fullname AS peminjam, books.slug AS slug, books.file AS file, books.penerbit AS penerbit FROM books,users,pinjam WHERE users.id=pinjam.users_id AND books.id=pinjam.books_id"); ?>
			<thead>
				<th width="10%;">Image</th>
				<th>Nama buku</th>
				<th>Penerbit</th>
				<th>Nama Peminjam</th>
				<th width="15%">Option</th>
			</thead>
			<?php foreach($d as $data): ?>
			<tbody>
				<td><img src="<?= url() ?>public/uploads/<?= $data->slug . '.' . $data->file ?>" width="100px"></td>
				<td><?= $data->title ?></td>
				<td><?= $data->penerbit ?></td>
				<td><?= $data->peminjam ?></td>
				<td align="center">
					<a href="<?= url() ?>book/hapus/<?= $data->id ?>" class="btn-edit" style="background:#18a085;">Delete</a>
				</td>
			</tbody>
		<?php endforeach; ?>
		</table>
	</div>
</body>
</html>