<?php $data = $this->db->query("SELECT * FROM books WHERE id=:id", [':id' => $_GET['id']])[0]; ?>

<div class="papper">
		<h4>Add Book</h4>
		<hr>
		<form action="<?= url('book/edit') ?>" method="post" enctype="multipart/form-data">
			<label name="category">Category</label>
			<select>
				<option value="1">Information</option>
				<option value="2">Education</option>
			</select>

			<label>Title</label>
			<input type="text" name="title" value="<?= $data->title  ?>">

			<label>Penerbit</label>
			<input type="text" name="penerbit" value="<?= $data->penerbit ?>">

			<label>Description</label>
			<textarea name="description"><?= $data->description ?></textarea>

			<input type="checkbox" name="edit_foto" value="true" style="width:10px;">
			Check Jika ingin ubah foto<br>

			<label>Picture</label>
			<input type="file" name="picture">

			<input type="hidden" value="<?= $_GET['id'] ?>" name="id">
			<input type="hidden" value="<?= $data->slug ?>" name="slug">
			<input type="hidden" value="<?= $data->file ?>" name="file">
			
			<button class="btn-save">SAVE CHANGE</button>
		</form>
	</div>
</body>
</html>