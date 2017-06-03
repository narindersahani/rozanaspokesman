<?php

namespace App\Traits;

trait SortableTrait {

	public static function link_to_sorting_action($col, $title = null) {
        if (is_null($title)) {
            $title = str_replace('_', ' ', $col);
            $title = ucfirst($title);
        }

        $indicator = (\Request::get('s') == $col ? (\Request::get('o') === 'asc' ? '&uarr;' : '&darr;') : null);
        $parameters = array_merge(\Request::all(), array('s' => $col, 'o' => (\Request::get('o') === 'asc' ? 'desc' : 'asc')));
 
        return link_to_route(\Route::currentRouteName(), "$title $indicator", $parameters);
    }

    public function scopeSortable($query) {
  	
        if(\Request::has('s') && \Request::has('o')){
    		return $query->orderBy(\Request::get('s'), \Request::get('o'));
    	}
        else
            return $query;
    }
}