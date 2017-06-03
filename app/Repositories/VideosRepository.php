<?php

namespace App\Repositories;

use App\Repositories\AppRepository;
use App\Models\Video;
use App\Services\DateTimeSettings;

class VideosRepository extends AppRepository
{
	protected $model;

	public function __construct(Video $model)
	{
		$this->model = $model;
	}

	public function getLatest()
	{
		$builder = new Video;
		$builder = $builder->whereActive()
						->orderCreatedAt('DESC')
						->displayOrderBy()
						->limit(6);

		$videos = $builder->get();
		return $videos;
	}
	
	public function findBySlug($slug)
	{
		return $this->model->where('slug', $slug)
							->whereActive()
							->first();
	}

	public function getLatestByCategory($category)
	{
		$builder = new Video;
		$builder = $builder->whereActive()
						->whereCategory($category)
						->orderCreatedAt('DESC');

		$video = $builder->first();
		return $video;
	}

	public function getLatestPrev($id)
	{
		$builder = new Video;
		$builder = $builder->whereActive()
						->where('id', '<', $id)
						->orderByDesc('id');

		$video = $builder->first();
		return $video;
	}

	public function getLatestNext($id)
	{
		$builder = new Video;
		$builder = $builder->whereActive()
						->where('id', '>', $id)
						->orderBy('id');

		$video = $builder->first();
		return $video;
	}
}