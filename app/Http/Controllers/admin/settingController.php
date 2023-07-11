<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function setting()
    {
    	return view('admin.setting.index');
    }
}
