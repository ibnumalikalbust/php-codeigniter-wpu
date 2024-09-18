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
}