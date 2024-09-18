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
		return $comics;
	}

	public function getFirstComicBySlug($slug = null) {
		if ($slug) {
			$comic = $this->where(['slug' => $slug])->first();
		} else {
			$comic = null;
		}
		return $comic;
	}
}