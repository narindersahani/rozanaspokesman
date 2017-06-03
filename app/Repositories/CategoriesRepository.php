<?php

namespace App\Repositories;

use App\Repositories\AppRepository;
use App\Models\Category;

class CategoriesRepository extends AppRepository
{
	protected $model;

	public function __construct(Category $model)
	{
		$this->model = $model;
	}

	public function getHeaderMenus()
	{
		return $this->model->where('location', Category::HEADER_LOCATION)
						->whereActive()
						->orderBy('display_order')
						->get();
	}

	public function getBelowHeaderMenus()
	{
		return $this->model->where('location', Category::BELOW_HEADER_LOCATION)
						->whereActive()
						->orderBy('display_order')
						->get();
	}
}