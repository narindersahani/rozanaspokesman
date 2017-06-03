<?php

namespace App\Repositories\Admin;

use App\Repositories\Admin\AppAdminRepository;
use App\Models\Category;
use App\Services\DateTimeSettings;

class CategoriesAdminRepository extends AppAdminRepository
{
	protected $model;

	public function __construct(Category $model)
	{
		$this->model = $model;
	}

	public function getList()
	{
		return $this->model->pluck('name', 'id');
	}
	
	/**
	 * get all categories list.
	 * 
	 * @param  $request: \Illuminate\Http\Request
	 * @return collection of categories.
	 */
	public function get($request)
	{
		$builder = $this->model;
		if($request->has('name')) {
			$builder = $builder->where('name', 'LIKE', '%'.$request->get('name').'%');
		}

		if($request->has('location')) {
			$builder = $builder->where('location', $request->get('location'));
		}
		
		$categories = $builder->sortable()->paginate(10);
		return $categories;
	}

	/**
	 * store new category.
	 * 
	 * @param  $request: \Illuminate\Http\Request.
	 * @return App\Models\Category
	 */
	public function store($request)
	{
		$status = false;
		if($request->has('status')) {
			$status = (bool)$request->get('status');
		}
		$category = new Category;
		$category->setLocation($request->get('location'))
				->setName($request->get('name'))
				->setDisplayOrder($request->get('display_order'))
				->setStatus($status)
				->save();

		return $category;
	}

	/**
	 * update catogory.
	 * 
	 * @param  $id: integer of category id.
	 * @param  $request: \Illuminate\Http\Request.
	 * @return App\Models\Category
	 */
	public function update($id, $request)
	{
		$category = Category::findOrFail($id);

		$status = false;
		if($request->has('status')) {
			$status = (bool)$request->get('status', $category->getStatus());
		}
		$category->setLocation($request->get('location', $category->getLocation()))
			->setName($request->get('name', $category->getName()))
			->setDescription($request->get('description', $category->getDescription()))
			->setDisplayOrder($request->get('display_order', $category->getDisplayOrder()))
			->setStatus($status)
			->save();

		return $category;
	}

	/**
	 * get list of locations.
	 * 
	 * @return array of locations.
	 */
	public function getLocationsList()
	{
		return $this->model->getLocationsList();
	}
}