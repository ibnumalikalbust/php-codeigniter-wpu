<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicModel extends Model
{
	protected $table = 'comic';
    protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $dateFormat = 'datetime';
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $useSoftDeletes = true;
	protected $tempUseSoftDeletes;
	protected $deletedField = 'deleted_at';
	protected $allowedFields = ['title', 'slug', 'author', 'publisher', 'image'];

	public function getAllComic() {
		$comics = $this->findAll();
		return $comics;
	}

	public function getAllComicBySlug($slug = null) {
		if ($slug) {
			$comics = $this->where(['slug' => $slug])->findAll();
		} else {
			$comics = null;
		}
		if (empty($comics)) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic Not Found');
		}
		return $comics;
	}

	public function getFirstComicBySlug($slug = null) {
		if ($slug) {
			$comic = $this->where(['slug' => $slug])->first();
		} else {
			$comic = null;
		}
		if (empty($comic)) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic Not Found');
		}
		return $comic;
	}

	public function insertNewComic($data = []) {
		if (isset($data['csrf_test_name'])) {
			$title = ucwords(strtolower($data['title'])) ?? '';
			$slug = url_title($title, '-', true);
			$author = ucwords(strtolower($data['author'])) ?? '';
			$publisher = ucwords(strtolower($data['publisher'])) ?? '';
			$image = strtolower($data['image']) ?? '';
			$this->save([
				'title' => $title,
				'slug' => $slug,
				'author' => $author,
				'publisher' => $publisher,
				'image' => $image
			]);
			$message = "Insert Comic '$title' Success";
		} else {
			$message = 'CSRF Token Not Found';
		}
		return $message;
	}
}