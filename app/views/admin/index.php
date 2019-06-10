<div class="papper">
		<h4>Book List</h4>
		<hr>
		<table>
			<thead>
				<th width="10%;">Image</th>
				<th width="18%">Book Title</th>
				<th>Creator</th>
				<th width="45%">Description</th>
				<th width="15%">Option</th>
			</thead>
			<?php foreach($books AS $book): ?>
			<tbody>
				<td><img src="<?= url() ?>public/uploads/<?= $book->slug .'.'. $book->file ?>" width="100px"></td>
				<td><?= $book->title ?></td>
				<td><?= $book->penerbit ?></td>
				<td><?= $book->description ?></td>
				<td align="right">
					<a href="<?= url() ?>admin/edit?id=<?= $book->id ?>" class="btn-edit">Edit</a>
					<a href="<?= url() ?>book/destroy/<?= $book->id ?>" class="btn-delete">Delete</a>
				</td>
			</tbody>
		<?php endforeach; ?>
		</table>
	</div>
</body>
</html>