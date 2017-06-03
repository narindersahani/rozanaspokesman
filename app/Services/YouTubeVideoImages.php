<?php

namespace App\Services;

class YouTubeVideoImages
{
	protected $video;
	protected $imgBaseUrl = "https://img.youtube.com/vi/%s/%s.jpg";
	protected $embeddedUrl = "https://www.youtube.com/embed/%s";

	public function __construct($video)
	{
		$this->video = $video;
	}

	public function setImages()
	{
		$url = $this->video->getUrl();
		$youTubeVideoId = null;

		if(strpos($url, 'embed') == FALSE) {
			$urlArr = explode('=', $url);
			$urlArr2 = explode('&', $urlArr[1]);
			$youTubeVideoId = $urlArr2[0];
		} else {
			$urlArr = explode('/', $url);
			$youTubeVideoId = array_pop($urlArr);
		}
		
		$largeImgUrl = sprintf($this->imgBaseUrl, $youTubeVideoId, "0");
		$thumbnailImgUrl = sprintf($this->imgBaseUrl, $youTubeVideoId, "0");
		$smallImgUrl = sprintf($this->imgBaseUrl, $youTubeVideoId, "1");
		$url = sprintf($this->embeddedUrl, $youTubeVideoId);
		
		$this->video->setUrl($url);
		$this->video->setThumbnailImage($thumbnailImgUrl);
		$this->video->setSmallImage($smallImgUrl);
		$this->video->setLargeImage($largeImgUrl);

		return $this->video;
	}

	public function save()
	{
		$this->video->save();
		return $this->video;
	}
}