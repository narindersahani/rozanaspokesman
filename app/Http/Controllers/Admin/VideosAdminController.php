<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreateVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Http\Controllers\Admin\AppAdminController;
use App\Repositories\Admin\VideosAdminRepository;
use App\Repositories\Admin\CategoriesAdminRepository;
use App\Services\YouTubeVideoImages;

class VideosAdminController extends AppAdminController
{
    protected $repository;
    protected $categoriesRepository;

    public function __construct(VideosAdminRepository $repository, CategoriesAdminRepository $categoriesRepository)
    {
    	$this->repository = $repository;
    	$this->categoriesRepository = $categoriesRepository;
    }

    /**
     * get listing.
     * 
     * @param  Request $request [description]
     * @return return view.
     */
    public function index(Request $request)
    {
    	$videos = $this->repository->get($request);
    	return view('admin.videos.index', [
			'videos' => $videos
		]);
    }

    /**
     * set create video detail page.
     * 
     * @return video create page.
     */
    public function create()
    {
        $categories = $this->categoriesRepository->getList();
        return view('admin.videos.create', [
            'categories' => $categories
        ]);
    }

    /**
     * create new video.
     * 
     * @param  $request: App\Http\Requests\CreateVideoRequest
     * @return redirect to videos listing page.
     */
    public function store(CreateVideoRequest $request)
    {
    	$video = $this->repository->store($request);

        $service = new YouTubeVideoImages($video);
        $service->setImages();
        $service->save();
    	return redirect()->route('admin.videos.index');
    }

    /**
     * set edit page detail for single video.
     * 
     * @param  $id: integer of video id.
     * @return video edit page.
     */
    public function edit($id)
    {
    	$video = $this->repository->find($id);
        $categories = $this->categoriesRepository->getList();
    	return view('admin.videos.edit', [
    		'video' => $video,
            'categories' => $categories
    	]);
    }

    /**
     * update video detail.
     * 
     * @param  $id: integer video id.
     * @param  $request: App\Http\Requests\UpdateVideoRequest
     * @return redirect to index page.
     */
    public function update($id, UpdateVideoRequest $request)
    {
    	$node = $this->repository->update($id, $request);

        $service = new YouTubeVideoImages($node);
        $service->setImages();
        $service->save();

    	return redirect()->route('admin.videos.index');
    }

    /**
     * show single video detail.
     * 
     * @param  $id: integer of video id.
     * @return html view
     */
    public function show($id)
    {
        $post = $this->repository->find($id);
        return view('admin.videos.view', [
            'post' => $post
        ]);
    }

    /**
     * toggle video status.
     * 
     * @param  $video: video object.
     * @return redirect back.
     */
    public function toggle_status($video)
    {
        $this->repository->toggleStatus($video);
        return redirect()->back();
    }
}
