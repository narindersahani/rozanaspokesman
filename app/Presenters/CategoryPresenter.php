<?php
namespace App\Presenters;

use Karl456\Presenter\Presenter;
use App\Models\Category;
use File;

class CategoryPresenter extends Presenter {

    public function location()
    {
        $locations = $this->entity->getLocationsList();
        return $locations[$this->entity->getLocation()] ? $locations[$this->entity->getLocation()] : "N/A";
    }

    public function name()
    {
        return $this->entity->getName();
    }

    public function slug()
    {
        return $this->entity->getSlug();
    }

    public function description()
    {
        return $this->entity->getDescription();
    }

    public function statusIcon()
    {
        $status = $this->entity->getStatus();

        $icon = link_to_route('admin.category.status.toggle', '<i class="glyphicon glyphicon-remove"></i>', ['id' => $this->entity->getKey()]);
        if($status) {
            $icon = link_to_route('admin.category.status.toggle', '<i class="glyphicon glyphicon-ok"></i>', ['id' => $this->entity->getKey()]);
        }
        return html_entity_decode($icon);
    }
    
    
    public function squreThumbnailImage()
    {
        $image = $this->entity->getImage();

        if(!$image) {
            return config('global.squre_thumbnail_placeholde_image');
        }
        
        $uploads = config('global.upload_dir');
        $uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.main_img_dir');
        $uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.squre_thumb_dir');
        return $uploads . DIRECTORY_SEPARATOR . $image;
    }

}
