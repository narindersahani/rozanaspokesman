<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AppAdminController;
use App\Repositories\Admin\CategoriesAdminRepository;

class CategoriesAdminController extends AppAdminController
{
	protected $repository;

    public function __construct(CategoriesAdminRepository $repository)
    {
    	$this->repository = $repository;
    }
    
    public function index(Request $request)
    {
    	$categories = $this->repository->get($request);
        $locations = $this->repository->getLocationsList();

    	return view('admin.categories.index', [
			'categories' => $categories,
            'locations' => $locations
		]);
    }

    public function create()
    {
        $locations = $this->repository->getLocationsList();
        return view('admin.categories.create',[
            'locations' => $locations
        ]);
    }

    public function store(Request $request)
    {
        $this->repository->store($request);
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $locations = $this->repository->getLocationsList();
        $cateogry = $this->repository->find($id);
        return view('admin.categories.edit', [
            'category' => $cateogry,
            'locations' => $locations
        ]);
    }

    public function update($id, Request $request)
    {
        $this->repository->update($id, $request);
        return redirect()->route('admin.categories.index');
    }

    public function toggle_status($category)
    {
        $this->repository->toggleStatus($category);
        return redirect()->back();
    }
}
