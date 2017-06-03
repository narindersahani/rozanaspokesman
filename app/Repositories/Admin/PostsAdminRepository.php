<?php

namespace App\Repositories\Admin;

use App\Repositories\Admin\AppAdminRepository;
use App\Models\Post;
use App\Services\DateTimeSettings;

class PostsAdminRepository extends AppAdminRepository
{
	protected $model;

	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function get($request)
	{
		$builder = $this->model;
		if($request->has('title')) {
			$builder = $builder->where('title', 'LIKE', '%'.$request->get('title').'%');
		}
		if($request->has('start_date')) {
			$startDate = $request->get('start_date');
			$startDateObj = new DateTimeSettings();
			$builder = $builder->where('start_date', '>=', $startDateObj->getDBDateTimeFormat($startDate));
		}

		if($request->has('end_date')) {
			$startDate = $request->get('end_date');
			$endDateObj = new DateTimeSettings();
			$builder = $builder->where('end_date', '<=', $endDateObj->getDBDateTimeFormat($startDate));
		}
		
		$posts = $builder->sortable()
						->orderByDesc('id')
						->paginate(10);
		return $posts;
	}

	public function store($request)
	{
		$post = new Post;
		$post->setTitle($request->get('title'))
			->setShortDescription($request->get('short_description'))
			->setDescription($request->get('description'))
			->setDisplayOrder((int)$request->get('display_order'))
			->setStartDate($request->get('start_date'))
			->setEndDate($request->get('end_date'))
			->setEventDate($request->get('start_date'))
			->setIsFeatured($request->get('is_featured'))
			->setShowOnBanner($request->get('show_on_banner'))
			->setStatus($request->get('status'), '0')
			->save();

		if($request->has('categories')) {
			$post->categories()->sync($request->get('categories'));
		}

		return $post;
	}

	public function update($id, $request)
	{

		$post = Post::findOrFail($id);

		$post->setTitle($request->get('title', $post->getTitle()))
			->setShortDescription($request->get('short_description', $post->getShortDescription()))
			->setDescription($request->get('description', $post->getDescription()))
			->setDisplayOrder($request->input('display_order') ?:  $post->getDisplayOrder())
			->setStartDate($request->get('start_date', $post->getStartDate(POST::DB_DATETIME)))
			->setEndDate($request->get('end_date', $post->getEndDate(POST::DB_DATETIME)))
			->setEventDate($request->get('start_date', $post->getEventDate(POST::DB_DATETIME)))
			->setIsFeatured($request->get('is_featured', $post->getIsFeatured()))
			->setShowOnBanner($request->get('show_on_banner', $post->getTitle()))
			->setStatus((bool)$request->get('status', false))
			->save();

		if($request->has('categories')) {
			$post->categories()->sync($request->get('categories'));
		}
		return $post;
	}

}