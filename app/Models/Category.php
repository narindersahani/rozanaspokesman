<?php

namespace App\Models;

use Karl456\Presenter\Traits\PresentableTrait;
use App\Traits\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Post;

class Category extends Model
{
	use Sluggable, PresentableTrait, SortableTrait;
    protected $presenter = 'App\Presenters\CategoryPresenter';

    protected $table = "categories";

    const HEADER_LOCATION = "header";
    const BELOW_HEADER_LOCATION = "below_header";

    const PUNJAB_SLUG = 'punjab';
    const TOP_SLUG = 'top';
    const SPORTS_SLUG = 'sports';
    const TECHNOLOGY_SLUG = 'technology';
    const CULTURE_SLUG = 'culture';
    const BUSINESS_SLUG = 'business';
    const ENVIRONMENT_SLUG = 'environment';
    const INDIA_SLUG = 'india';
    const POLITICS_SLUG = 'politics';
    const FASHION_SLUG = 'fashion';
    const WORLD_SLUG = 'world';
    const ENTERTAINMENT_SLUG = 'entertainment';
    const LIFESTYLE_SLUG = 'lifestyle';
    const TRAVEL_SLUG = 'travel';
    const ART_DESIGN_SLUG = 'art-design';
    const WEATHER_SLUG = 'weather';
    const HEALTH_SLUG = 'health';


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category_post')->withTimestamps();
    }

    public function getKey()
    {
    	return $this->{$this->primaryKey}	;
    }

    public function getLocationsList()
    {
        return [
            '' => "",
            self::HEADER_LOCATION => "Header",
            self::BELOW_HEADER_LOCATION => "Below Header"
        ];
    }

    /**
     * set location
     * 
     * @param $value: string of location.
     */
    public function setLocation($value)
    {
        $this->location = $value;
        return $this;
    }
    
    /**
     * get location.
     * @return string of location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * get slug.
     * @return string of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * set name
     * 
     * @param $value: string of name.
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * get name.
     * @return string of name
     */
    public function getName()
    {
    	return $this->name;
    }

    /**
     * set description
     * 
     * @param $value: string of description.
     */
    public function setDescription($value)
    {
    	$this->description = $value;
    	return $this;
    }

    /**
     * get description.
     * @return string of description
     */
    public function getDescription()
    {
    	return $this->description;
    }

    /**
     * set display order
     * 
     * @param $value: string of display order.
     */
    public function setDisplayOrder($value)
    {
    	$this->display_order = $value;
    	return $this;
    }

    /**
     * get display order.
     * @return string of display order
     */
    public function getDisplayOrder()
    {
    	return $this->display_order;
    }

    /**
     * set status
     * 
     * @param $value: string of status.
     */
    public function setStatus($value)
    {
    	$this->status = $value;
    	return $this;
    }

    /**
     * get status.
     * @return string of status
     */
    public function getStatus()
    {
    	return $this->status;
    }

    public function scopeWhereActive($builder)
    {
        return $builder->where('status', true);
    }
}
