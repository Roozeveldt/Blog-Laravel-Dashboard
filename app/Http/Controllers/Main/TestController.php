<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
	public function __invoke()
	{
		return 'test';
	}
}
