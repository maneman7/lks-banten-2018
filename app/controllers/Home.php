<?php

class Home extends Controller{


	public function index()
	{	
		$data['books'] = $this->db->query("SELECT * FROM books ");

 		$this->view('home', $data);
	}

	public function detail($slug)
	{
		$this->model('book');
		$data['book'] = $this->book->detail($slug)[0];

		$this->view('detail', $data);
	}

	public function all()
	{
		$data['books'] = $this->db->query("SELECT * FROM books");
		if($search = $_GET['search']){
			$data['books'] = $this->db->query("SELECT * FROM books WHERE title LIKE '%$search%'");
		}

		$this->view('all', $data);
	}

	public function c()
	{
		$data['category'] = $this->db->query("SELECT * FROM books WHERE category=:category", ['category' => $id])[0];
		$this->view('all', $data);
	}

	public function get()
	{
		$id = $_SESSION['data']->id;
		$data['pinjam'] = $this->db->query("SELECT books.title AS title, books.slug AS slug, books.file AS file, books.penerbit AS penerbit FROM books,pinjam WHERE pinjam.users_id=$id AND books.id=pinjam.books_id");
		$this->view('get', $data);
	}
}
