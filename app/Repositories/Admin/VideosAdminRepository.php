<?php

namespace App\Repositories\Admin;

use App\Repositories\Admin\AppAdminRepository;
use App\Models\Video;
use App\Services\DateTimeSettings;

class VideosAdminRepository extends AppAdminRepository
{
	protected $model;

	public function __construct(Video $model)
	{
		$this->model = $model;
	}

	public function get($request)
	{
		$builder = $this->model;
		if($request->has('title')) {
			$builder = $builder->where('title', 'LIKE', '%'.$request->get('title').'%');
		}
		/*if($request->has('start_date')) {
			$startDate = $request->get('start_date');
			$startDateObj = new DateTimeSettings();
			$builder = $builder->where('start_date', '>=', $startDateObj->getDBDateTimeFormat($startDate));
		}

		if($request->has('end_date')) {
			$startDate = $request->get('end_date');
			$endDateObj = new DateTimeSettings();
			$builder = $builder->where('end_date', '<=', $endDateObj->getDBDateTimeFormat($startDate));
		}*/

		$videos = $builder->sortable()
						->orderByDesc('id')
						->paginate(10);
		return $videos;
	}

	public function store($request)
	{
		$status = (bool)$request->get('status', false);
		$video = new Video;
		$video->setTitle($request->get('title'))
			->setUrl($request->get('url'))
			->setShortDescription($request->get('short_description'))
			->setDescription($request->get('description'))
			->setDisplayOrder((int)$request->get('display_order'))
			->setStartDate($request->get('start_date'))
			->setEndDate($request->get('end_date'))
			->setEventDate($request->get('start_date'))
			->setStatus($status)
			->save();

		if($request->has('categories')) {
			$video->categories()->sync($request->get('categories'));
		}

		return $video;
	}

	public function update($id, $request)
	{

		$video = Video::findOrFail($id);
		$video->setTitle($request->get('title', $video->getTitle()))
			->setUrl($request->get('url'))
			->setShortDescription($request->get('short_description', $video->getShortDescription()))
			->setDescription($request->get('description', $video->getDescription()))
			->setDisplayOrder((int)$request->get('display_order'))
			->setStartDate($request->get('start_date', $video->getStartDate(Video::DB_DATETIME)))
			->setEndDate($request->get('end_date', $video->getEndDate(Video::DB_DATETIME)))
			->setEventDate($request->get('start_date', $video->getEventDate(Video::DB_DATETIME)))
			->setStatus((bool)$request->get('status', false))
			->save();

		if($request->has('categories')) {
			$video->categories()->sync($request->get('categories'));
		}
		return $video;
	}

	/**
	 * toggle status.
	 * 
	 * @param  $video: Video model object.
	 * @return boolean (true/false)
	 */
	public function toggleStatus($video)
	{
		$video->setStatus(!$video->getStatus());
		return $video->save();
	}

}