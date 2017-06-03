<?php

namespace App\Models;

use Karl456\Presenter\Traits\PresentableTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;
use App\Traits\SortableTrait;
use App\Services\DateTimeSettings;

class Video extends AppModel
{
	use SortableTrait, PresentableTrait, Sluggable;
    protected $table = "videos";

    protected $presenter = 'App\Presenters\VideoPresenter';


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
        return $this->belongsToMany(Category::class, 'category_video')->withTimestamps();
    }

    /**
     * Gets the value of key.
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->id;
    }

    /**
     * Sets the value of slug.
     *
     * @param mixed $slug the slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Gets the value of slug.
     *
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of thumbnail_image.
     *
     * @param mixed $thumbnail_image the thumbnail image
     *
     * @return self
     */
    public function setThumbnailImage($thumbnail_image)
    {
        $this->thumbnail_image = $thumbnail_image;

        return $this;
    }

    /**
     * Gets the value of thumbnail_image.
     *
     * @return mixed
     */
    public function getThumbnailImage()
    {
        return $this->thumbnail_image;
    }

    /**
     * Sets the value of small_image.
     *
     * @param mixed $small_image the small image
     *
     * @return self
     */
    public function setSmallImage($small_image)
    {
        $this->small_image = $small_image;

        return $this;
    }

    /**
     * Gets the value of small_image.
     *
     * @return mixed
     */
    public function getSmallImage()
    {
        return $this->small_image;
    }

    /**
     * Sets the value of large_image.
     *
     * @param mixed $large_image the large image
     *
     * @return self
     */
    public function setLargeImage($large_image)
    {
        $this->large_image = $large_image;

        return $this;
    }

    /**
     * Gets the value of large_image.
     *
     * @return mixed
     */
    public function getLargeImage()
    {
        return $this->large_image;
    }

    /**
     * Sets the value of short_description.
     *
     * @param mixed $short_description the short description
     *
     * @return self
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;

        return $this;
    }

    /**
     * Gets the value of short_description.
     *
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of start_date.
     *
     * @param mixed $start_date the start date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Gets the value of start_date.
     *
     * @return mixed
     */
    public function getStartDate($format = 'd-m-Y')
    {
    	$dateObj = new DateTimeSettings();
    	return $dateObj->getFormatedDate($this->start_date, $format);
    }

    /**
     * Sets the value of end_date.
     *
     * @param mixed $end_date the end date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }

    /**
     * Gets the value of end_date.
     *
     * @return mixed
     */
    public function getEndDate($format = 'd-m-Y')
    {
        if(!$this->end_date) {
    		return null;
    	}
    	$dateObj = new DateTimeSettings();

    	return $dateObj->getFormatedDate($this->end_date, $format);
    }

    /**
     * Sets the value of event_date.
     *
     * @param mixed $event_date the event date
     *
     * @return self
     */
    public function setEventDate($event_date)
    {
        $this->event_date = $event_date;

        return $this;
    }

    /**
     * Gets the value of event_date.
     *
     * @return mixed
     */
    public function getEventDate($format = 'd-m-Y')
    {
        if(!$this->event_date) {
    		return null;
    	}
    	$dateObj = new DateTimeSettings();
    	return $dateObj->getFormatedDate($this->event_date, $format);
    }

    /**
     * Sets the value of display_order.
     *
     * @param mixed $display_order the display order
     *
     * @return self
     */
    public function setDisplayOrder($display_order)
    {
        $this->display_order = $display_order;

        return $this;
    }

    /**
     * Gets the value of display_order.
     *
     * @return mixed
     */
    public function getDisplayOrder()
    {
        return $this->display_order;
    }

    /**
     * Sets the value of status.
     *
     * @param mixed $status the status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function getCreatedAt($format = 'd-m-Y')
    {
        $dateObj = new DateTimeSettings();

        return $dateObj->getFormatedDate($this->created_at, $format);
    }

    public function scopeWhereActive($builder)
    {
        return $builder->where('status', true);
    }

    public function scopeDisplayOrderBy($builder, $direction = 'ASC')
    {
        return $builder->orderBy('display_order', $direction);
    }

    public function scopeOrderCreatedAt($builder, $direction = 'ASC')
    {
        return $builder->orderBy('created_at', $direction);
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

    public function scopeWhereCategory($builder, $category)
    {
        return $builder->whereHas('categories', function($query) use ($category) {
                    $query->where('slug', $category);
                });
    }
}
