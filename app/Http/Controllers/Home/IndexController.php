<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    //跳转的前台主页的方法
	public function index()
	{
		return view('home.index');
	}


}
