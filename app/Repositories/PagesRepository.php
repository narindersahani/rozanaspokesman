<?php

namespace App\Repositories;

use App\Repositories\AppRepository;
use App\Models\Post;
use App\Services\DateTimeSettings;

class PagesRepository extends AppRepository
{
	protected $model;

	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function getPage($slug)
	{
		return $this->model->where('slug', $slug)
							->whereActive()
							->first();
	}

}