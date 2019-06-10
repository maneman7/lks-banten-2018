<?php

class Book extends Controller{

	public function add()
	{
		$record = [
			'title' => $_POST['title'],
			'slug' => str_replace(" ", "-", strtolower($_POST['title'])) . "-". rand(000,999),
			'penerbit' => $_POST['penerbit'],
			'description' => $_POST['description'],
			'file' => pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION),
			'category' => $_POST['category']
		];
		$fileName = $record['slug'] .'.'. pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

		move_uploaded_file($_FILES['picture']['tmp_name'], PATH . 'public/uploads/'. $fileName);

		$this->db->insert('books', $record);

		redirect(url('admin/'));
	}

	public function edit()
	{
		$record = [
			'title' => $_POST['title'],
			'penerbit' => $_POST['penerbit'],
			'description' => $_POST['description']
		];
		
		if($_POST['edit_foto']){
		
				$fileName = $_POST['slug'] . '.' . $_POST['file'];

			if(file_exists(PATH .'public/uploads/'. $r->slug . '.' . $r->file)){
				unlink(PATH . 'public/uploads/' . $fileName);
			}
				move_uploaded_file($_FILES['picture']['tmp_name'], PATH . 'public/uploads' . $fileName);

				$this->db->update("books", $record, ['id' => $_POST['id']]);

				redirect(url('admin/'));
			}else{

				$this->db->update('books', $record, ['id' => $_GET['id']]);

				redirect(url('admin/'));
		}			
	}

	public function destroy($id)
	{
		$r = $this->db->query("SELECT slug, file FROM books WHERE id=:id", ['id' => $id])[0];
		unlink(PATH . 'public/uploads/' . $r->slug . '.' . $r->file );

		$this->db->query("DELETE FROM books WHERE id=:id", ['id' => $id])[0];

		redirect($_SERVER['HTTP_REFERER']);
	}

	public function hapus($id)
	{

		$this->db->delete('pinjam', ['id' => $id]);

	}

	public function get_data()
	{
		$record = [
			'books_id' => $_GET['id'],
			'users_id' => $_SESSION['id']
		];

		$this->db->insert('pinjam', $record);

		redirect(url('get/'));	
	}
}