<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Repositories\PostsRepository;
use App\Repositories\VideosRepository;
use View;
use DB;
class HomeController extends Controller
{
    protected $repository;
    protected $videosRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostsRepository $repository, VideosRepository $videosRepository)
    {
        // $this->middleware('auth');
        $this->repository = $repository;
        $this->videosRepository = $videosRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageTitle = "Spokesman";
        $description = "";
        $keyword = "";
        $meta = array(
            'description'  => $description,
            'keyword' => $keyword
        );

        $bannerNews = $this->repository->getBannerImages($request);
        $punjabiNews = $this->repository->getPunjabiNews($request);
        $politicsNews = $this->repository->getPoliticsNews($request);
        $sportsNews = $this->repository->getSportsNews($request);
        $latestVideos = $this->videosRepository->getLatest();

        return view('pages.index', [
            'category' => null,
            'punjabiNews' => $punjabiNews,
            'bannerNews' => $bannerNews,
            'politicsNews' => $politicsNews,
            'sportsNews' => $sportsNews,
            'latestVideos' => $latestVideos,
            'meta' => $meta,
            'pageTitle'=>$pageTitle
        ]);
    }

    /**
     * show video preview
     * 
     * @param  $slug: string of video slug.
     * @param  $category: string of category slug.
     * @param  $request: \Illuminate\Http\Request
     * @return html view
     */
    public function videoView($slug, $category = null, Request $request)
    {
        $page = $this->videosRepository->findBySlug($slug);

        $topNews = $this->repository->getTopNews($request);
        $leftNews = $this->repository->getSingleRendomNews($request);
        $prev = $this->videosRepository->getLatestPrev($page->getKey());
        $next = $this->videosRepository->getLatestNext($page->getKey());

        return View::make('pages.single', [
            'isVideo' => false,
            'pageInfo' => $page,
            'topNews' => $topNews,
            'leftNews' => $leftNews,
            'prev' => $prev,
            'next' => $next
        ]);
    }
}
