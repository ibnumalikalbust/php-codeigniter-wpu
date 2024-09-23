<?php

namespace App\Models;

use CodeIgniter\Model;

class PopulationModel extends Model
{
	protected $table = 'testing_population';
    protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $dateFormat = 'datetime';
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $useSoftDeletes = true;
	protected $tempUseSoftDeletes;
	protected $deletedField = 'deleted_at';
	protected $allowedFields = ['name', 'address', 'email', 'phone'];

	public function getPopulations($keyword = null)
	{
		if ($keyword) {
			$populations = $this->like('name', $keyword)->paginate(10, 'group');
		} else {
			$populations = $this->paginate(10, 'group');
		}
		return $populations;
	}
}