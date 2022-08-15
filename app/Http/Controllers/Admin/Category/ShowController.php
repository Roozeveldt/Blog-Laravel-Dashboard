<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
	public function __invoke( Category $category )
	{
        $pageTitle = 'Категория ' . $category->name;

        return view('admin.Category.show', compact('category', 'pageTitle'));
	}
}
