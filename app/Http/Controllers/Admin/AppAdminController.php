<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppAdminController extends Controller
{
    protected $repository;

    /**
     * delete item.
     * 
     * @param  $id: integer of item id.
     * @return boolean(true/false)
     */
    public function destroy($id)
    {
    	$this->repository->destroy($id);
    	return redirect()->back();
    }
}
