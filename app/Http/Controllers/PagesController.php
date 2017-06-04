<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\PagesRepository;
use App\Repositories\PostsRepository;
use App\Repositories\VideosRepository;
use App\Models\Category;
use Route;
use Session;
class PagesController extends BaseController 
{
	protected $repository;
	protected $postRepository;
	protected $videosRepository;

	public function __construct(PagesRepository $repository, 
							PostsRepository $postRepository, 
							VideosRepository $videosRepository)
	{
		$this->repository = $repository;
		$this->postRepository = $postRepository;
		$this->videosRepository = $videosRepository;
	}

	//Chnages language englis to punjabi
	public function session($lang){
		if($lang=='punjabi'){
			session(['punjabi' => $lang]);
		} else{
			//session(['eng' => 'english']);
			session()->forget('punjabi');
		}
		return redirect()->back();
	}

	public function opinion_rozana(){
		$pageTitle = "Opinion Rozana";
		$description = "";
		$keyword = "";
		$meta = array(
		    'description'  => $description,
		    'keyword' => $keyword
		);
		return View::make('pages.opinion_rozana', array('meta' => $meta,'pageTitle'=>$pageTitle));
	}

	/**
	 * get punjab related news.
	 * 
	 * @param  $request: \Illuminate\Http\Request
	 * @return get punjab related latest news.
	 */
	public function punjab_rozana(Request $request)
	{
		$politicsNews = $this->postRepository->getLatestPunjabPoliticsNews($request);
		$sportsNews = $this->postRepository->getLatestPunjabSportsNews($request);
		return View::make('pages.punjab_rozana', [
			'politicsNews' => $politicsNews,
			'sportsNews' => $sportsNews
		]);
	}

	/**
     * show single post preview
     * 
     * @param  $slug: string of video slug.
     * @param  $category: string of category slug.
     * @param  $request: \Illuminate\Http\Request
     * @return html view
     */
	public function single($slug, $category = null, Request $request)
	{

		$page = $this->repository->getPage($slug);
		if(!$page)
		abort(404);
		$topNews = $this->postRepository->getTopNews($request);
		$leftNews = $this->postRepository->getSingleRendomNews($request);
		$prev = $this->postRepository->getLatestPrev($page->getKey());
        $next = $this->postRepository->getLatestNext($page->getKey());

		return View::make('pages.single', [
			'pageInfo' => $page,
			'topNews' => $topNews,
			'leftNews' => $leftNews,
			'prev' => $prev,
			'next' => $next,
		]);
	}

	public function sports_rozana(){
		$pageTitle = "Sports Rozana";
		$description = "";
		$keyword = "";
		$meta = array(
		    'description'  => $description,
		    'keyword' => $keyword
		);
		return View::make('pages.sports_rozana', array('meta' => $meta,'pageTitle'=>$pageTitle));
	}

	public function video_rozana(){
		$pageTitle = "Video Rozana";
		$description = "";
		$keyword = "";
		$meta = array(
		    'description'  => $description,
		    'keyword' => $keyword
		);
		return View::make('pages.video_rozana', array('meta' => $meta,'pageTitle'=>$pageTitle));
	}

	/**
	 * show news by category.
	 * 
	 * @param  $category: string of category slug.
	 * @param  $request: Illuminate\Http\Request
	 * @return render view.
	 */
	public function newsByCategory($slug, Request $request)
	{
		$politicsNews = $this->postRepository->getLatestPoliticsNews($slug, $request);
		$featuredNews = $this->postRepository->getLatestFeaturedNews($slug, $request);

		// get list of fetched items.
		$ids = $featuredNews->pluck('id');
		$allIds = $ids->merge($politicsNews->pluck('id'));
		$request['ids'] = $allIds->all();

		$middleSectionNews = $this->postRepository->getLatestPosts($slug, $request, 9);
		$latestVideo = $this->videosRepository->getLatestByCategory($slug);

		$idsList = $allIds->merge($middleSectionNews->pluck('id'));
		$request['ids'] = $idsList->all();

		$footerSectionNews = $this->postRepository->getLatestPosts($slug, $request, 7);
		return View::make('pages.news_rozana', [
			'category' => $slug,
			'politicsNews' => $politicsNews,
			'featuredNews' => $featuredNews,
			'middleSectionNews' => $middleSectionNews,
			'footerSectionNews' => $footerSectionNews,
			'latestVideo' => $latestVideo
		]);
	}

	/**
	 * show news by category.
	 * 
	 * @param  $category: string of category slug.
	 * @param  $request: Illuminate\Http\Request
	 * @return render view.
	 */
	public function categoryNews($category, Request $request)
	{
		$politicsNews = $this->postRepository->getLatestPoliticsNews(null, $request);
		$featuredNews = $this->postRepository->getLatestFeaturedNews($category, $request, 3);

		// get list of fetched items.
		$ids = $featuredNews->pluck('id');
		$allIds = $ids->merge($politicsNews->pluck('id'));
		$request['ids'] = $allIds->all();

		$middleSectionNews = $this->postRepository->getLatestPosts($category, $request, 9);
		$latestVideo = $this->videosRepository->getLatestByCategory($category);

		$idsList = $allIds->merge($middleSectionNews->pluck('id'));
		$request['ids'] = $idsList->all();

		$footerSectionNews = $this->postRepository->getLatestPosts($category, $request, 7);
		return View::make('pages.news_rozana', [
			'category' => $category,
			'politicsNews' => $politicsNews,
			'featuredNews' => $featuredNews,
			'middleSectionNews' => $middleSectionNews,
			'footerSectionNews' => $footerSectionNews,
			'latestVideo' => $latestVideo
		]);
	}

	public function sportsNews(Request $request)
	{
		$category = Category::SPORTS_SLUG;
		$featuredNews = $this->postRepository->getLatestFeaturedNews($category, $request, 6);
		$bannerNews = $this->postRepository->getCategoryBanners($category, $request, 1);

		$ids = $featuredNews->pluck('id');
		$allIds = $ids->merge($bannerNews->pluck('id'));
		$request['ids'] = $allIds->all();

		$middleSectionNews = $this->postRepository->getLatestPosts($category, $request, 4);

		$idsList = $allIds->merge($middleSectionNews->pluck('id'));
		$request['ids'] = $idsList->all();

		$footerSectionNews = $this->postRepository->getLatestPosts($category, $request, 5);
		$latestVideo = $this->videosRepository->getLatestByCategory($category);

		return View::make('pages.sports_rozana', [
			'category' => $category,
			'featuredNews' => $featuredNews,
			'bannerNews' => $bannerNews->first(),
			'middleSectionNews' => $middleSectionNews,
			'footerSectionNews' => $footerSectionNews,
			'latestVideo' => $latestVideo

		]);
	}
}
