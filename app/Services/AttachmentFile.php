<?php 
namespace App\Services;

use Carbon\Carbon;
use Image;
class AttachmentFile {

	protected $file;
	protected $node;
	protected $folder_name;
	protected $is_move_file = false;

	public function __construct($node, $file) {
		$this->node = $node;
		$this->file = $file;
		$this->folder_name = $node->id;
	}

	/**
	 *	upload file and set its parameters.
	 */
	public function upload() {
		$folderPath = $this->setTargetPath();
		$this->makeDir($folderPath);
		$attachment_name = $this->file->getClientOriginalName();
		$filename = $this->setFileName($attachment_name);
		$destinationPath = $folderPath . DIRECTORY_SEPARATOR;
		$this->file->move($destinationPath, $filename);
		$this->node->image = $filename;
		
		return $this->node;
	}
	public function resizeImage($width, $height, $folder)
	{
		$filePath = $this->setTargetPath();
		$folderPath = $filePath . DIRECTORY_SEPARATOR . $folder;
		$this->makeDir($folderPath);
		Image::make($filePath . DIRECTORY_SEPARATOR . $this->node->image)->resize($width, $height)->save($folderPath . DIRECTORY_SEPARATOR . $this->node->image);
	}
	/**
	 * 	delete attachment file.
	 * 	
	 *  @param  $attachment_name: optional attachment file name.
	 *  @return boolean wheather file deleted or not.
	 */
	public function deleteAttachment($attachment_name = null) {

		if(!$attachment_name) {
			$attachment_name = $this->node->image;
		}

		$folderPath = $this->setTargetPath();

		if(!$attachment_name) {
			return false;
		}

		$filePath = $folderPath . DIRECTORY_SEPARATOR . $attachment_name;
		if(!\File::delete($filePath)) {
			return false;
		}

		return true;
	}

	/**
	 *	change folder name where file will upload.
	 */
	public function changeFolderName($folder_name) {
		$this->folder_name = $folder_name;
	}


	/**
	 *	set file upload target path.
	 */
	protected function setTargetPath() {
		$uploads = config('global.upload_dir');
		$basePath = $uploads . DIRECTORY_SEPARATOR . $this->folder_name;
		//$basePath = 'uploads' . DIRECTORY_SEPARATOR.'blogs';
		return public_path() . DIRECTORY_SEPARATOR . $basePath;
	}

	/**
	 *	set filename
	 */
	protected function setFileName($name) {
		$now = Carbon::parse(Carbon::now());
		$timestamp = $now->timestamp;

		$name = str_replace(' ', '_', $name);
		$name = preg_replace('/[^A-Za-z0-9\-.]/', '_', $name);
		$filename = $timestamp . '_' . $name;
		return $filename;
	}

	/**
	 *	check is directory exists if not then create new directory.
	 */
	protected function makeDir($path) {
		if(!file_exists($path)){
			return \File::makeDirectory($path, 0755);
		}

		return true;
	}
}