<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
	public function __invoke()
	{
        $pageTitle = 'Новый тэг';

        return view('admin.Tag.create', compact('pageTitle'));
    }
}
