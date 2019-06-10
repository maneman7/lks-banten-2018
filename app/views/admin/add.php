<div class="papper">
		<h4>Add Book</h4>
		<hr>
		<form action="<?= url() ?>book/add" method="post" enctype="multipart/form-data">
			<label>Category</label>
			<?php $category = $this->db->query("SELECT * FROM category") ?>
			<select name="category">
				<?php foreach($category AS $categories): ?>
				<option value="<?= $categories->id ?>"><?= $categories->category ?></option>
			<?php endforeach; ?>
			</select>

			<label>Title</label>
			<input type="text" name="title">

			<label>Penerbit</label>
			<input type="text" name="penerbit">

			<label>Description</label>
			<textarea name="description"></textarea>

			<label>Picture</label>
			<input type="file" name="picture">

			<button class="btn-save">SAVE</button>
		</form>
	</div>
</body>
</html>