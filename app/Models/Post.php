<?php

namespace App\Models;

use Karl456\Presenter\Traits\PresentableTrait;
use App\Traits\SortableTrait;
use App\Services\DateTimeSettings;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;
use Carbon\Carbon;

class Post extends AppModel
{
	use SortableTrait, PresentableTrait, Sluggable;
    protected $table = "posts";

    protected $presenter = 'App\Presenters\PostPresenter';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post')->withTimestamps();
    }

    public function setTitle($value)
    {
    	$this->title = $value;
    	return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getTitle()
    {
    	return $this->title;
    }

    public function setImage($value)
    {
        $this->image = $value;
        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setShortDescription($value)
    {
    	$this->short_description = $value;
    	return $this;
    }

    public function getShortDescription()
    {
    	return $this->short_description;
    }

    public function setDescription($value)
    {
    	$this->description = $value;
    	return $this;
    }

    public function getDescription()
    {
    	return $this->description;
    }

    public function setDisplayOrder($value = 10)
    {
        $this->display_order = $value;
    	return $this;
    }

    public function getDisplayOrder()
    {
    	return $this->display_order;
    }

    public function setIsFeatured($value)
    {
    	$this->is_featured = (boolean)$value;
    	return $this;
    }

    public function getIsFeatured()
    {
    	return $this->is_featured;
    }

    public function setStartDate($value)
    {
        if(!$value) {
            $carbon = new Carbon();
            $value = $carbon->format('Y-d-m H:i:s');
        }
    	$dateObj = new DateTimeSettings();
    	$this->start_date = $dateObj->getDBDateTimeFormat($value);
    	return $this;
    }

    public function getStartDate($format = 'd-m-Y')
    {
    	$dateObj = new DateTimeSettings();
    	return $dateObj->getFormatedDate($this->start_date, $format);
    }

    public function setEndDate($value)
    {
    	if(empty($value)) {
    		return $this;
    	}
    	$dateObj = new DateTimeSettings();
    	$this->end_date = $dateObj->getDBDateTimeFormat($value);
    	return $this;
    }

    public function getEndDate($format = 'd-m-Y')
    {
    	if(!$this->end_date) {
    		return null;
    	}
    	$dateObj = new DateTimeSettings();

    	return $dateObj->getFormatedDate($this->end_date, $format);
    }

    public function setEventDate($value)
    {
    	if(empty($value)) {
            $carbon = new Carbon();
            $value = $carbon->format('Y-d-m H:i:s');
    	}
    	$dateObj = new DateTimeSettings();
    	$this->event_date = $dateObj->getDBDateTimeFormat($value);
    	return $this;
    }

    public function getEventDate($format = 'd-m-Y')
    {
    	if(!$this->event_date) {
    		return null;
    	}
    	$dateObj = new DateTimeSettings();
    	return $dateObj->getFormatedDate($this->event_date, $format);
    }

    public function getCreatedAt($format = 'd-m-Y')
    {
        $dateObj = new DateTimeSettings();

        return $dateObj->getFormatedDate($this->created_at, $format);
    }

    public function setShowOnBanner($value)
    {
    	$this->show_on_banner = (boolean)$value;
    	return $this;
    }

    public function getShowOnBanner()
    {
    	return $this->show_on_banner;
    }

    public function setStatus($value)
    {
    	$this->status = (boolean)$value;
    	return $this;
    }

    public function getStatus()
    {
    	return $this->status;
    }

    public function scopeWhereActive($builder)
    {
        return $builder->where('status', true);
    }

    public function scopeWhereFeatured($builder)
    {
        return $builder->where('is_featured', true);
    }

    public function scopeWhereCategoryPunjab($builder)
    {
        return $builder->whereHas('categories', function($query) {
                    $query->where('slug', Category::PUNJAB_SLUG);
                });
    }

    public function scopeWhereCategoryPolitics($builder)
    {
        return $builder->whereHas('categories', function($query) {
                    $query->where('slug', Category::POLITICS_SLUG);
                });
    }

    public function scopeWhereCategorySports($builder)
    {
        return $builder->whereHas('categories', function($query) {
                    $query->where('slug', Category::SPORTS_SLUG);
                });
    }

    public function scopeWhereTopNews($builder)
    {
        return $builder->whereHas('categories', function($query) {
                    $query->where('slug', Category::TOP_SLUG);
                });
    }

    public function scopeWhereCategoryIn($builder, $categories)
    {
        return $builder->whereHas('categories', function($query) use ($categories) {
                    $query->whereIn('slug', $categories);
                });
    }

    public function scopeWhereCategory($builder, $category)
    {
        return $builder->whereHas('categories', function($query) use ($category) {
                    $query->where('slug', $category);
                });
    }

    public function scopeWhereShowOnBanner($builder)
    {
        return $builder->where('show_on_banner', true);
    }
}
