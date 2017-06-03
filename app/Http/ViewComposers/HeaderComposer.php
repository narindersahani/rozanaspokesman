<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\CategoriesRepository;

class HeaderComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $categoriesRepo;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $categoriesRepo
     * @return void
     */
    public function __construct(CategoriesRepository $categoriesRepo)
    {
        $this->categoriesRepo = $categoriesRepo;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $headerMenus = $this->categoriesRepo->getHeaderMenus();
        $belowHeaderMenus = $this->categoriesRepo->getBelowHeaderMenus();
        $view->with([
            'headerMenus' => $headerMenus,
            'belowHeaderMenus' => $belowHeaderMenus
        ]);
    }
}