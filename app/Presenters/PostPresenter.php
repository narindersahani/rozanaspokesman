<?php
namespace App\Presenters;

use Karl456\Presenter\Presenter;
use App\Models\Post;
use File;

class PostPresenter extends Presenter {

    public function title()
    {
        return $this->entity->getTitle();
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

    public function thumbnailImage()
    {
    	$image = $this->entity->getImage();

        if(!$image) {
            return config('global.thumbnail_placeholde_image');
        }
        
    	$uploads = config('global.upload_dir');
    	$uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.main_img_dir');
    	$uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.thumnail_dir');
    	return $uploads . DIRECTORY_SEPARATOR . $image;
    }

    public function smallImage()
    {
        $image = $this->entity->getImage();

        $placeholder = config('global.images_dir');
        $placeholder .= DIRECTORY_SEPARATOR . config('global.upload_placeholders.small');
        if(!$image) {
            return $placeholder;
        }

        
        $uploads = config('global.upload_dir');
        $uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.main_img_dir');
        $uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.small_dir');
        $path = $uploads . DIRECTORY_SEPARATOR . $image;
        if(!File::exists(public_path($path))) {
            return $placeholder;
        }

        return $path;
    }

    public function orgImage()
    {
        $image = $this->entity->getImage();

        $placeholder = config('global.images_dir');
        $placeholder .= DIRECTORY_SEPARATOR . config('global.upload_placeholders.slider');
        if(!$image) {
            return $placeholder;
        }
        
        $uploads = config('global.upload_dir');
        $uploads .= DIRECTORY_SEPARATOR . config('global.posts_dir_path.main_img_dir');
        $path = $uploads . DIRECTORY_SEPARATOR . $image;

        if(!File::exists(public_path($path))) {
            return $placeholder;
        }

        return $path;
    }

    public function preview()
    {
        return "<img src='" .asset($this->orgImage()). "' alt='".$this->title."'>";
    }

    public function eventDate()
    {
        return $this->entity->getCreatedAt(Post::DISPLAY_DATE);
    }

    public function slug()
    {
        return $this->entity->getSlug();
    }

    public function shortDescription()
    {
        return $this->entity->getShortDescription();
    }

    public function description()
    {
        return $this->entity->getDescription();
    }

    public function statusIcon()
    {
        $status = $this->entity->getStatus();

        $icon = link_to_route('admin.posts.status.toggle', '<i class="glyphicon glyphicon-remove"></i>', ['id' => $this->entity->getKey()]);
        if($status) {
            $icon = link_to_route('admin.posts.status.toggle', '<i class="glyphicon glyphicon-ok"></i>', ['id' => $this->entity->getKey()]);
        }
        return html_entity_decode($icon);
    }

}
