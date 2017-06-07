<?php

namespace App\Repositories;

use App\Repositories\AppRepository;
use App\Models\Post;
use App\Services\DateTimeSettings;
use App\Models\Category;
class PostsRepository extends AppRepository
{
	protected $model;

	public function __construct(Post $model)
	{
		$this->model = $model;
	}

	public function getPunjabiNews($request)
	{
		$builder = new Post;
		$builder = $builder->whereCategoryPunjab()
						->whereActive()
						->orderByDesc('created_at')
						->limit(4);
		
		$posts = $builder->get();
		return $posts;
	}
	
	public function getByCategory($request, $category)
	{
		$builder = new Post;
		$builder = $builder->whereCategory($category)
						->whereActive()
						->orderByDesc('created_at')
						->limit(4);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getTopNews($request)
	{
		$builder = new Post;
		$builder = $builder
						->whereActive()
						->orderByDesc('created_at')
						->limit(8);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getSingleRendomNews($request)
	{
		$builder = new Post;
		$builder = $builder->whereActive()
						->inRandomOrder();
		
		$post = $builder->first();
		return $post;
	}

	public function getPoliticsNews($request)
	{
		$builder = new Post;
		$builder = $builder->whereCategoryPolitics()
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit(7);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getSportsNews($request)
	{
		$builder = new Post;
		$builder = $builder->whereCategorySports()
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit(5);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getBannerImages($request)
	{
		$posts = $this->getCategoryBanners(null, $request, 5);
		/*$builder = new Post;
		$builder = $builder->whereShowOnBanner()
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit(5);
		
		$posts = $builder->get();*/
		return $posts;
	}

	public function getLatestPunjabPoliticsNews($request)
	{
		$builder = new Post;
		$builder = $builder->whereCategoryIn([Category::PUNJAB_SLUG, Category::POLITICS_SLUG])
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit(5);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getLatestPunjabSportsNews($request, $limit = 3)
	{
		$builder = new Post;
		$builder = $builder->whereCategoryIn([Category::PUNJAB_SLUG, Category::SPORTS_SLUG])
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit($limit);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getLatestPoliticsNews($category = null, $request, $limit = 5)
	{
		$builder = new Post;
		if($category) {
			$builder = $builder->whereCategory($category);
		}
		$builder = $builder->whereCategory(Category::POLITICS_SLUG)
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit($limit);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getLatestFeaturedNews($category = null, $request, $limit = 3)
	{
		$builder = new Post;

		if($category) {
			$builder = $builder->whereCategory($category);
		}

		$builder = $builder->whereFeatured()
						->whereActive()
						->orderByDesc('created_at')
						->orderBy('display_order')
						->limit($limit);

		$posts = $builder->get();
		return $posts;
	}

	/**
	 * get latest posts by category.
	 * 
	 * @param  $category: string of category slug.
	 * @param  $request: \Illuminate\Http\Request
	 * @return collection of posts.
	 */
	public function getLatestPosts($category, $request, $limit = 10)
	{
		$builder = new Post;
		$builder = $builder->whereCategory($category)
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit($limit);
		if($request->has('ids')) {
			$builder->whereNotIn('id', $request->get('ids'));
		}
		
		$posts = $builder->get();
		return $posts;
	}

	public function getCategoryBanners($category = null, $request, $limit = 5)
	{
		$builder = new Post;

		if($category) {
			$builder = $builder->whereCategory($category);
		}

		$builder = $builder->whereShowOnBanner()
						->whereActive()
						->orderBy('display_order')
						->orderByDesc('created_at')
						->limit(5);
		
		$posts = $builder->get();
		return $posts;
	}

	public function getLatestPrev($id)
	{
		$builder = new Post;
		$builder = $builder->whereActive()
						->where('id', '<', $id)
						->orderByDesc('id');

		$video = $builder->first();
		return $video;
	}

	public function getLatestNext($id)
	{
		$builder = new Post;
		$builder = $builder->whereActive()
						->where('id', '>', $id)
						->orderBy('id');

		$video = $builder->first();
		return $video;
	}
	
}
