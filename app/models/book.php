<?php

class Book extends Model{

	public function detail($slug)
	{
		return $this->db->query("SELECT * FROM books WHERE slug=:slug", [':slug' => $slug]);
	}
}