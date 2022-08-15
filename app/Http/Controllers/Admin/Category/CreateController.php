<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
	public function __invoke()
	{
        $pageTitle = 'Новая категория';

        return view('admin.Category.create', compact('pageTitle'));
    }
}
