<?php
namespace App\Presenters;

use Karl456\Presenter\Presenter;
use App\Models\Post;
use File;

class VideoPresenter extends Presenter {

    public function title()
    {
        return $this->entity->getTitle();
    }

    public function thumbnailImage()
    {
    	$image = $this->entity->getThumbnailImage();

        if(!$image) {
            return config('global.thumbnail_placeholde_image');
        }
        
    	return $image;
    }

    public function smallImage()
    {
        $image = $this->entity->getSmallImage();

        $placeholder = config('global.images_dir');
        $placeholder .= DIRECTORY_SEPARATOR . config('global.upload_placeholders.small');
        if(!$image) {
            return $placeholder;
        }

        return $image;
    }

    public function largeImage()
    {
        $image = $this->entity->getLargeImage();

        $placeholder = config('global.images_dir');
        $placeholder .= DIRECTORY_SEPARATOR . config('global.upload_placeholders.small');
        if(!$image) {
            return $placeholder;
        }

        return $image;
    }

    public function preview()
    {
        return '<iframe src="'.$this->entity->getUrl().'?rel=0&amp;controls=0" frameborder="0" allowfullscreen width="700" height="400">></iframe>';
        // return '<iframe src="'.$this->entity->getUrl().'?rel=0&amp;controls=0" frameborder="0" allowfullscreen width="600" height="700"></iframe>';
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

        $icon = link_to_route('admin.videos.status.toggle', '<i class="glyphicon glyphicon-remove"></i>', ['id' => $this->entity->getKey()]);
        if($status) {
            $icon = link_to_route('admin.videos.status.toggle', '<i class="glyphicon glyphicon-ok"></i>', ['id' => $this->entity->getKey()]);
        }
        return html_entity_decode($icon);
    }

}