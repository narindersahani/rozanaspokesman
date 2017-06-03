<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Admin\AppAdminController;
use App\Repositories\Admin\PostsAdminRepository;
use App\Repositories\Admin\CategoriesAdminRepository;
use App\Services\AttachmentFile;

class PostsAdminController extends AppAdminController
{
	protected $repository;
    protected $categoriesRepository;

    public function __construct(PostsAdminRepository $repository, CategoriesAdminRepository $categoriesRepository)
    {
    	$this->repository = $repository;
        $this->categoriesRepository = $categoriesRepository;
    }

    public function index(Request $request)
    {
    	$posts = $this->repository->get($request);
    	return view('admin.posts.index', [
			'posts' => $posts
		]);
    }

    public function show($id)
    {
        $post = $this->repository->find($id);
        return view('admin.posts.view', [
            'post' => $post
        ]);
    }

    public function create()
    {
        $categories = $this->categoriesRepository->getList();
        return view('admin.posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(CreatePostRequest $request)
    {
    	$post = $this->repository->store($request);

        if($request->hasFile('image')) {
            $attachmentObj = new AttachmentFile($post, $request->file('image'));
            $attachmentObj->changeFolderName(config('global.posts_dir_path.main_img_dir'));
            $post = $attachmentObj->upload();
            $post->save();
            
            $attachmentObj->resizeImage(130, 130, config('global.posts_dir_path.squre_thumb_dir'));
            $attachmentObj->resizeImage(421, 236, config('global.posts_dir_path.thumnail_dir'));
            $attachmentObj->resizeImage(160, 160, config('global.posts_dir_path.small_dir'));
            $attachmentObj->resizeImage(1055, 550, config('global.posts_dir_path.slide_img_dir'));
        }
    	return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
    	$post = $this->repository->find($id);
        $categories = $this->categoriesRepository->getList();
    	return view('admin.posts.edit', [
    		'post' => $post,
            'categories' => $categories
    	]);
    }

    public function update($id, UpdatePostRequest $request)
    {
    	$node = $this->repository->update($id, $request);

        if($request->hasFile('image')) {
            $attachmentObj = new AttachmentFile($node, $request->file('image'));
            $attachmentObj->changeFolderName(config('global.posts_dir_path.main_img_dir'));
            $node = $attachmentObj->upload();
            $node->save();

            $attachmentObj->resizeImage(130, 130, config('global.posts_dir_path.squre_thumb_dir'));
            $attachmentObj->resizeImage(421, 236, config('global.posts_dir_path.thumnail_dir'));
            $attachmentObj->resizeImage(160, 160, config('global.posts_dir_path.small_dir'));
            $attachmentObj->resizeImage(1055, 550, config('global.posts_dir_path.slide_img_dir'));
        }
    	return redirect()->route('admin.posts.index');
    }

    public function toggle_status($post)
    {
        $this->repository->toggleStatus($post);
        return redirect()->back();
    }
}
