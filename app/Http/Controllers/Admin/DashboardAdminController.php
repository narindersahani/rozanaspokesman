<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AppAdminController;

class DashboardAdminController extends AppAdminController
{
    public function index()
    {
    	return view('admin.dashboard.index');
    }
}
