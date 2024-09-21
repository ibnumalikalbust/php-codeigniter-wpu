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
			$comics = $this->where('slug', $slug)->findAll();
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
			$comic = $this->where('slug', $slug)->first();
		} else {
			$comic = null;
		}
		if (empty($comic)) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic Not Found');
		}
		return $comic;
	}

	public function insertNewComic($data = null) {
		if ($data) {
			$title = ucwords(strtolower($data['title'])) ?? '';
			$slug = url_title($title, '-', true);
			$author = ucwords(strtolower($data['author'])) ?? '';
			$publisher = ucwords(strtolower($data['publisher'])) ?? '';
			$imageFile = $data['imageFile'];
			$imageError = $imageFile->getError();
			if ($imageError == 4) {
				$imageName = 'comic-default.jpg';
			} else {
				$imageName = $slug . '_' . time() . '.jpg';
				$imageFile->move('img', $imageName);
			}
			$data['title'] = $title;
			$data['slug'] = $slug;
			$data['author'] = $author;
			$data['publisher'] = $publisher;
			$data['image'] = $imageName;
			$insert = $this->save($data);
			if ($insert) {
				$message = "Insert Comic '$title' Success";
			} else {
				$message = "Insert Comic '$title' Failed";
			}
		} else {
			$message = 'Data Is Not Valid';
		}
		return $message;
	}

	public function updateComicBySlug($slug = null, $post = null) {
		if ($slug && $post) {
			$oldComic = $this->where('slug', $slug)->first();
			$oldID = $oldComic['id'];
			$oldImage = $oldComic['image'];
			$newComic = $post;
			$newID = $oldID;
			$newTitle = ucwords(strtolower($newComic['title'])) ?? '';
			$newSlug = url_title($newTitle, '-', true);
			$newAuthor = ucwords(strtolower($newComic['author'])) ?? '';
			$newPublisher = ucwords(strtolower($newComic['publisher'])) ?? '';
			$newImageFile = $post['imageFile'];
			$imageError = $newImageFile->getError();
			if ($imageError == 4) {
				$newImageName = $oldImage;
			} else {
				$newImageName = $newSlug . '_' . time() . '.jpg';
				$newImageFile->move('img', $newImageName);
			}
			$data['id'] = $newID;
			$data['title'] = $newTitle;
			$data['slug'] = $newSlug;
			$data['author'] = $newAuthor;
			$data['publisher'] = $newPublisher;
			$data['image'] = $newImageName;
			$update = $this->save($data);
			if ($update) {
				$message = "Update Comic '$newTitle' Success";
			} else {
				$message = "Update Comic '$newTitle' Failed";
			}
		} else {
			$message = "Comic Not Found";
		}
		return($message);
	}

	public function deleteComicBySlug($slug = null) {
		if ($slug) {
			$comic = $this->where('slug', $slug)->first();
			$title = $comic['title'];
			$delete = $this->where('slug', $slug)->delete();
			if ($delete) {
				$message = "Delete Comic '$title' Success";
			} else {
				$message = "Delete Comic '$title' Failed";
			}
		} else {
			$message = "Comic Not Found";
		}
		return $message;
	}
}