<?php

namespace App\Repositories\Admin;

use App\Repositories\AppRepository;
use Exception;
class AppAdminRepository extends AppRepository
{

	protected $mode;

	public function find($id)
	{
		return $this->model->findOrFail($id);
	}	

	/**
	 * delete item from database.
	 * 
	 * @param  $id: integer of item id.
	 * @return boolean (true/false)
	 */
	public function destroy($id)
	{
		$item = $this->find($id);

		if(!$item) {
			throw new Exception("Error Processing Request", 500);	
		}
		$item->delete();
		return true;
	}

	/**
	 * toggle status.
	 * 
	 * @param  $item: Model model object.
	 * @return boolean (true/false)
	 */
	public function toggleStatus($item)
	{
		$item->setStatus(!$item->getStatus());
		return $item->save();
	}
}